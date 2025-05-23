<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Authenticatable
{
    use HasFactory, Notifiable;

 protected $fillable = [
        'Nom',
        'Prenom',
        'email',     // Lowercase
        'password',  // Lowercase
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
