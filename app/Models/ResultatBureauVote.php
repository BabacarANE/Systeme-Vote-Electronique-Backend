<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ResultatBureauVote extends Model
{
    protected $fillable = [
        'bureau_de_vote_id',
        'nombre_votants',
        'bulletins_nuls',
        'bulletins_blancs',
        'suffrages_exprimes',
        'pv',
        'validite'
    ];

    protected $casts = [
        'validite' => 'boolean'
    ];

    public function bureauDeVote(): BelongsTo
    {
        return $this->belongsTo(BureauDeVote::class);
    }

    public function votesCandidat(): HasMany
    {
        return $this->hasMany(VoteCandidat::class);
    }
    // Dans App\Models\ResultatBureauVote

    public function contestations(): HasMany
    {
        return $this->hasMany(Contestation::class);
    }
}
