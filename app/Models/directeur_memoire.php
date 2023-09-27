<?php

namespace App\Models;
use App\Models\jury;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directeur_memoire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'fonction',
    ];

    function jury(){
        return $this->hasOne(jury::class);
       }

}
