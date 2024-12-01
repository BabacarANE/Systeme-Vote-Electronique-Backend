<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoleUtilisateur extends Model
{
    protected $fillable = [
        'personne_id',
        'email',
        'mot_de_passe',
        'est_actif'
    ];

    protected $casts = [
        'est_actif' => 'boolean'
    ];

    public function personne(): BelongsTo
    {
        return $this->belongsTo(Personne::class);
    }

    public function superviseurCENA(): HasOne
    {
        return $this->hasOne(RoleSuperviseurCENA::class);
    }

    public function personnelBV(): HasOne
    {
        return $this->hasOne(RolePersonnelBV::class);
    }

    public function representant(): HasOne
    {
        return $this->hasOne(RoleRepresentant::class);
    }

    public function adminDGE(): HasOne
    {
        return $this->hasOne(RoleAdminDGE::class);
    }

    public function journalUtilisateur(): HasMany
    {
        return $this->hasMany(JournalUtilisateur::class);
    }
}
