<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('linkedin_login_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('linkedin_user_id')->constrained('linkedin_users')->onDelete('cascade');
            $table->ipAddress('ip_address');
            $table->timestamp('logged_in_at')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('linkedin_login_stats');
    }
};