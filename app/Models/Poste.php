<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Model pour les postes
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class Poste extends Model
{
    use HasFactory;

    /**
     * @var string[] Colonnes que les utilisateurs ont le droit de modifier
     */
    protected $fillable = ['ecole_id', 'charge'];

    /**
     * Retourne l'école que le poste appartient
     */
    public function ecole() : BelongsTo {
        return $this->belongsTo(Ecole::class);
    }
}
