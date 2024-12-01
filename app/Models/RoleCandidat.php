<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoleCandidat extends Model
{
    protected $fillable = [
        'personne_id',
        'parti',
        'code',
        'profession'
    ];

    public function personne(): BelongsTo
    {
        return $this->belongsTo(Personne::class);
    }

    public function candidatures(): HasMany
    {
        return $this->hasMany(Candidature::class);
    }
}
