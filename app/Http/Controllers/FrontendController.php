<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LinkedinUser;
use App\Models\LinkedinLoginStat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FrontendController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function redirectToLinkedin()
    {
        // Redirect to LinkedIn OpenID sign in
        return Socialite::driver('linkedin-openid')
            ->scopes(['openid', 'profile', 'email'])
            ->redirect();
    }

    public function handleLinkedinCallback()
    {
        $linkedinUser = Socialite::driver('linkedin-openid')->user();

        // Simplify data extraction
        $linkedinUserData = [
            'linkedin_id' => $linkedinUser->getId(),
            'name'        => $linkedinUser->getName(),
            'email'       => $linkedinUser->getEmail(),
            'avatar'      => $linkedinUser->getAvatar(),
        ];

        // Store or update user + record login stats
        $storedUser = $this->storeLinkedinUser($linkedinUserData, request()->ip());

        // (Optional) Login locally
        Auth::login($storedUser);

        return redirect('/')->with('success', 'Welcome back, ' . $storedUser->name . '!');
    }

    protected function storeLinkedinUser(array $linkedinUserData, string $ip)
    {
        // Use a transaction for consistency
        return DB::transaction(function () use ($linkedinUserData, $ip) {
            // Update or create user and increment visit count safely
            $user = LinkedinUser::updateOrCreate(
                ['linkedin_id' => $linkedinUserData['linkedin_id']],
                [
                    'name'          => $linkedinUserData['name'],
                    'email'         => $linkedinUserData['email'] ?? null,
                    'avatar'        => $linkedinUserData['avatar'] ?? null,
                    'last_login_ip' => $ip,
                ]
            );

            // Manually increment visit_count (DB::raw doesn’t work with updateOrCreate’s update)
            $user->increment('visit_count');

            // Store login stats
            LinkedinLoginStat::create([
                'linkedin_user_id' => $user->id,
                'ip_address'       => $ip,
                'logged_in_at'     => now(),
            ]);

            return $user;
        });
    }
}