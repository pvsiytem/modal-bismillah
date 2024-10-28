<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', 'ip_address' // Make sure 'role' is included if it exists
    ];

    // Add this method to check if the user is an admin
    public function getIsAdminAttribute()
    {
        return $this->role === 'admin'; // Adjust according to your role logic
    }
}
