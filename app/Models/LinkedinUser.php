<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LinkedinUser extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'linkedin_id',
        'name',
        'email',
        'avatar',
        'last_login_ip',
        'visit_count',
    ];

    protected $attributes = [
        'visit_count' => 0,
    ];

    public function loginStats()
    {
        return $this->hasMany(LinkedinLoginStat::class, 'linkedin_user_id');
    }
}