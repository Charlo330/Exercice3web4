<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Model pour les écoles
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class Ecole extends Model
{
    use HasFactory;

    /**
     * @var string[] Colonnes que les utilisateurs ont le droit de modifier
     */
    protected $fillable = ['nom', 'centre_services_scolaire_id'];

    /**
     * @return BelongsTo Le centre scolaire qu'une ecole en particulier appartient
     */
    public function centreScolaire() : BelongsTo {
        return $this->belongsTo(CentreServicesScolaire::class);
    }

    /**
     * @return HasMany Retourne la liste des postes appartenant à une ecole
     */
    public function poste() : HasMany {
        return $this->HasMany(Poste::class);
    }
}
