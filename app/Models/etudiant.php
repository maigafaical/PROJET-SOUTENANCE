<?php

namespace App\Models;
use App\Models\demande;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'sexe',
        'phone_etudiant',
        'filiere',
        'niveau',
    ];  
    
    function demande(){
        return $this->hasOne(demande::class);
       }
}
