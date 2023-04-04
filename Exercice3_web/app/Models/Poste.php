<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Poste extends Model
{
    use HasFactory;

    protected $fillable = ['ecole_id', 'charge'];

    public function ecole() : BelongsTo {
        return $this->belongsTo(Ecole::class);
    }
}
