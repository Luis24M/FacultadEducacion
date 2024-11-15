<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable; // Importa la clase base
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable // Extiende la clase Authenticatable
{
    protected $table = 'users';

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
    ];
}