<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Candidature extends Model
{
    protected $fillable = [
        'role_candidat_id',
        'election_id',
        'statut',
        'date_inscription',
        'bulletin'
    ];

    protected $dates = ['date_inscription'];

    public function roleCandidat(): BelongsTo
    {
        return $this->belongsTo(RoleCandidat::class);
    }

    public function election(): BelongsTo
    {
        return $this->belongsTo(Election::class);
    }

    public function votesCandidat(): HasMany
    {
        return $this->hasMany(VoteCandidat::class);
    }
}
