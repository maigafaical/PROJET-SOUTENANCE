<?php

namespace App\Models;
use App\Models\jury;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class maitre_stage extends Model
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
