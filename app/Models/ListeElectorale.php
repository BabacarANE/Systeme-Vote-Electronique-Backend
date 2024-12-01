<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListeElectorale extends Model
{
    protected $fillable = [
        'code',
        'date_creation',
        'bureau_de_vote_id'
    ];

    protected $dates = ['date_creation'];

    public function bureauDeVote(): BelongsTo
    {
        return $this->belongsTo(BureauDeVote::class);
    }
}
