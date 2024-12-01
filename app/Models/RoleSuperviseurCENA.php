<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleSuperviseurCENA extends Model
{
    protected $fillable = [
        'role_utilisateur_id',
        'code'
    ];

    public function roleUtilisateur(): BelongsTo
    {
        return $this->belongsTo(RoleUtilisateur::class);
    }
}
