<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CentreServicesScolaire extends Model
{
    use HasFactory;

    protected $table = 'centres_services_scolaires';

    protected $appends = ['postes_totaux'];

    protected function postesTotaux(): Attribute
    {
        return Attribute::make(
          get: function () {
              return $this->ecole()->withCount('poste')->get()->sum('poste_count');
            }
        );
    }

    protected $fillable = ['nom'];

    public function ecole() : HasMany {
        return $this->HasMany(Ecole::class);
    }
}
