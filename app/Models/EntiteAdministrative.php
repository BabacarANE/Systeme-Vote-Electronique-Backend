<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EntiteAdministrative extends Model
{
    protected $fillable = [
        'nom',
        'code',
        'type',
        'parent_id'
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(EntiteAdministrative::class, 'parent_id');
    }

    public function enfants(): HasMany
    {
        return $this->hasMany(EntiteAdministrative::class, 'parent_id');
    }

    public function centresDeVote(): HasMany
    {
        return $this->hasMany(CentreDeVote::class, 'commune_id');
    }
}
