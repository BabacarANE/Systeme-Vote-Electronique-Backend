<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contestation extends Model
{
    protected $fillable = [
        'role_representant_id',
        'resultat_bureau_vote_id',
        'motif',
        'description',
        'statut',
        'preuve',
        'date_soumission',
        'date_traitement',
        'reponse'
    ];

    protected $dates = [
        'date_soumission',
        'date_traitement'
    ];

    public function representant(): BelongsTo
    {
        return $this->belongsTo(RoleRepresentant::class, 'role_representant_id');
    }

    public function resultatBureauVote(): BelongsTo
    {
        return $this->belongsTo(ResultatBureauVote::class);
    }
}
