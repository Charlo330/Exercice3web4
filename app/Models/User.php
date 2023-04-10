<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Modèle pour les utilisateurs
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Colonnes dont l'utilisateur à le droit de modifier
     *
     * @var array<int, string> Liste des colonnes
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Attributs cachés lors de la sérialization
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Liste des attributs à caster
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
