<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Election extends Model
{
    protected $fillable = [
        'date',
        'statut'
    ];

    protected $dates = ['date'];

    public function candidatures(): HasMany
    {
        return $this->hasMany(Candidature::class);
    }

    public function affectations(): HasMany
    {
        return $this->hasMany(Affectation::class);
    }
}
