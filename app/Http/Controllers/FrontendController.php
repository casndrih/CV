<?php

namespace App\Http\Controllers;

use App\Models\LinkedinLoginStat;
use App\Models\LinkedinUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class FrontendController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    /**
     * Serve the CV only to a visitor with a valid LinkedIn-backed session.
     */
    public function downloadCv(): BinaryFileResponse|RedirectResponse
    {
        if (! Auth::check()) {
            return redirect()->guest(route('linkedin.redirect'));
        }

        $file = public_path('doc/cv.pdf');

        abort_unless(is_file($file) && is_readable($file), 404, 'CV file not found.');

        return response()->download($file, 'Casper_Ndrih_CV.pdf', [
            'Content-Type' => 'application/pdf',
            'X-Content-Type-Options' => 'nosniff',
            'Cache-Control' => 'private, no-store, no-cache, must-revalidate',
            'Pragma' => 'no-cache',
        ]);
    }

    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin-openid')
            ->scopes(['openid', 'profile', 'email'])
            ->redirect();
    }

    public function handleLinkedinCallback(): RedirectResponse
    {
        $linkedinUser = Socialite::driver('linkedin-openid')->user();
        $linkedinId = $linkedinUser->getId();

        abort_if(blank($linkedinId), 403, 'LinkedIn did not return a valid account identifier.');

        $storedUser = $this->storeLinkedinUser([
            'linkedin_id' => (string) $linkedinId,
            'name' => $linkedinUser->getName() ?: 'LinkedIn member',
            'email' => $linkedinUser->getEmail(),
            'avatar' => $linkedinUser->getAvatar(),
        ], request()->ip() ?? '0.0.0.0');

        Auth::login($storedUser, true);
        request()->session()->regenerate();

        // Laravel's guest redirect stores the originally requested CV URL.
        return redirect()->intended(route('home'))
            ->with('success', 'LinkedIn sign-in successful. Your CV is ready.');
    }

    protected function storeLinkedinUser(array $linkedinUserData, string $ip): LinkedinUser
    {
        return DB::transaction(function () use ($linkedinUserData, $ip) {
            $user = LinkedinUser::updateOrCreate(
                ['linkedin_id' => $linkedinUserData['linkedin_id']],
                [
                    'name' => $linkedinUserData['name'],
                    'email' => $linkedinUserData['email'] ?? null,
                    'avatar' => $linkedinUserData['avatar'] ?? null,
                    'last_login_ip' => $ip,
                ]
            );

            // updateOrCreate initializes new rows with the migration default (1).
            // Increment only returning visitors so the first login is counted once.
            if (! $user->wasRecentlyCreated) {
                $user->increment('visit_count');
            }

            LinkedinLoginStat::create([
                'linkedin_user_id' => $user->id,
                'ip_address' => $ip,
                'logged_in_at' => now(),
            ]);

            return $user;
        });
    }
}
