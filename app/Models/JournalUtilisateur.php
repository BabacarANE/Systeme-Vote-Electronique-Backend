<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JournalUtilisateur extends Model
{
    protected $fillable = [
        'role_utilisateur_id',
        'action',
        'horodatage'
    ];

    protected $dates = ['horodatage'];

    public function roleUtilisateur(): BelongsTo
    {
        return $this->belongsTo(RoleUtilisateur::class);
    }
}
