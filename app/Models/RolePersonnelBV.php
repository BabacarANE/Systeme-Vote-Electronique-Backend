<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RolePersonnelBV extends Model
{
    protected $fillable = [
        'role_utilisateur_id',
        'code'
    ];

    public function roleUtilisateur(): BelongsTo
    {
        return $this->belongsTo(RoleUtilisateur::class);
    }

    public function affectations(): HasMany
    {
        return $this->hasMany(Affectation::class);
    }
}
