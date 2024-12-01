<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoleRepresentant extends Model
{
    protected $fillable = [
        'role_utilisateur_id',
        'code'
    ];

    public function roleUtilisateur(): BelongsTo
    {
        return $this->belongsTo(RoleUtilisateur::class);
    }
    // Dans App\Models\RoleRepresentant

    public function contestations(): HasMany
    {
        return $this->hasMany(Contestation::class);
    }
}

