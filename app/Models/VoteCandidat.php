<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VoteCandidat extends Model
{
    protected $fillable = [
        'resultat_bureau_vote_id',
        'candidature_id',
        'nombre_voix'
    ];

    public function resultatBureauVote(): BelongsTo
    {
        return $this->belongsTo(ResultatBureauVote::class);
    }

    public function candidature(): BelongsTo
    {
        return $this->belongsTo(Candidature::class);
    }
}
