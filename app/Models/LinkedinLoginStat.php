<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkedinLoginStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'linkedin_user_id',
        'ip_address',
        'logged_in_at',
    ];

    public function user()
    {
        return $this->belongsTo(LinkedinUser::class, 'linkedin_user_id');
    }
}