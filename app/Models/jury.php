<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jury extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'enseignants_id',
        'users_id',
        'maitre_stages_id',
        'presidents_id',
        'directeur_memoires_id',
    ];
}
