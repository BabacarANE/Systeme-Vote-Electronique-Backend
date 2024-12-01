<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleElecteur extends Model
{
    protected $fillable = [
        'personne_id',
        'numero_electeur',
        'a_voter'
    ];

    protected $casts = [
        'a_voter' => 'boolean'
    ];

    public function personne(): BelongsTo
    {
        return $this->belongsTo(Personne::class);
    }
}
