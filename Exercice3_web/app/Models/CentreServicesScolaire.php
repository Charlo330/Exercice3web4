<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Model pour le centre de services scolaires
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
     * @var string[] Donnees a ajouter
     */
    protected $appends = ['postes_totaux'];

    /**
     * OBtenir le nombre de poste total
     *
     * @return Attribute Nombre de postes
     */
    protected function postesTotaux(): Attribute
    {
        return Attribute::make(
          get: function () {
              return $this->ecole()->withCount('poste')->get()->sum('poste_count');
            }
        );
    }

    /**
     * @var string[] Colonnes que les utilisateurs ont le droit de modifier
     */
    protected $fillable = ['nom'];

    /*
     * Retourne la liste des ecoles appartenant a ce centre de services scolaires
     */
    public function ecole() : HasMany {
        return $this->HasMany(Ecole::class);
    }
}
