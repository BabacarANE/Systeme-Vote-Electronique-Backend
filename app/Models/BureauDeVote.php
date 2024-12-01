<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BureauDeVote extends Model
{
    protected $fillable = [
        'nom',
        'statut',
        'nombre_inscrits',
        'centre_de_vote_id'
    ];

    public function centreDeVote(): BelongsTo
    {
        return $this->belongsTo(CentreDeVote::class);
    }

    public function listeElectorale(): HasOne
    {
        return $this->hasOne(ListeElectorale::class);
    }

    public function resultats(): HasMany
    {
        return $this->hasMany(ResultatBureauVote::class);
    }

    public function affectations(): HasMany
    {
        return $this->hasMany(Affectation::class);
    }

    public function journalVotes(): HasMany
    {
        return $this->hasMany(JournalVote::class);
    }
}
