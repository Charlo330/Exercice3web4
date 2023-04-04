<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CentreServicesScolaire extends Model
{
    use HasFactory;

    protected $table = 'centres_services_scolaires';

    protected $fillable = ['nom'];

    public function ecole() : HasMany {
        return $this->HasMany(Ecole::class);
    }
}
