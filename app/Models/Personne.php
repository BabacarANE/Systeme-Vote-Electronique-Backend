<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Personne extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'sexe',
        'adresse'
    ];

    protected $dates = ['date_naissance'];

    public function roleElecteur(): HasOne
    {
        return $this->hasOne(RoleElecteur::class);
    }

    public function roleCandidat(): HasOne
    {
        return $this->hasOne(RoleCandidat::class);
    }

    public function roleUtilisateur(): HasOne
    {
        return $this->hasOne(RoleUtilisateur::class);
    }
}
