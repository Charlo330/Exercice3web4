<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Model pour les centre de services scolaires
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class CentreServicesScolaire extends Model
{
    use HasFactory;

    /**
     * @var string Nom de la table au pluriel
     */
    protected $table = 'centres_services_scolaires';

    /**
     * @var string[] Colonnes que les utilisateurs ont le droit de modifier
     */
    protected $fillable = ['nom'];

    /**
     * @return HasMany Retourne la liste des ecoles appartenant a un centre de services scolaires
     */
    public function ecole() : HasMany {
        return $this->HasMany(Ecole::class);
    }
}
