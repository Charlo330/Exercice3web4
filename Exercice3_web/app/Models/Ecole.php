<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ecole extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'centre_services_scolaire_id'];

    public function centreScolaire() : BelongsTo {
        return $this->belongsTo(CentreServicesScolaire::class);
    }

    public function poste() : HasMany {
        return $this->HasMany(Poste::class);
    }
}
