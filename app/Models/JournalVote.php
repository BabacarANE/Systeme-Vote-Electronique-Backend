<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JournalVote extends Model
{
    protected $fillable = [
        'bureau_de_vote_id',
        'numero_electeur',
        'horodatage'
    ];

    protected $dates = ['horodatage'];

    public function bureauDeVote(): BelongsTo
    {
        return $this->belongsTo(BureauDeVote::class);
    }
}
