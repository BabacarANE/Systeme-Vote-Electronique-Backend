<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Affectation extends Model
{
    protected $fillable = [
        'bureau_de_vote_id',
        'role_personnel_bv_id',
        'election_id',
        'code_role',
        'date_debut',
        'date_fin',
        'statut',
        'date_creation'
    ];

    protected $dates = [
        'date_debut',
        'date_fin',
        'date_creation'
    ];

    protected $casts = [
        'statut' => 'boolean'
    ];

    public function bureauDeVote(): BelongsTo
    {
        return $this->belongsTo(BureauDeVote::class);
    }

    public function rolePersonnelBV(): BelongsTo
    {
        return $this->belongsTo(RolePersonnelBV::class);
    }

    public function election(): BelongsTo
    {
        return $this->belongsTo(Election::class);
    }
}
