<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CentreDeVote extends Model
{
    protected $fillable = [
        'nom',
        'adresse',
        'nombre_de_bureau',
        'commune_id'
    ];

    public function commune(): BelongsTo
    {
        return $this->belongsTo(EntiteAdministrative::class, 'commune_id');
    }

    public function bureauxDeVote(): HasMany
    {
        return $this->hasMany(BureauDeVote::class);
    }
}
