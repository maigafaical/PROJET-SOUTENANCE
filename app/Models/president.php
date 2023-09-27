<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jury;
class president extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'fonction',


    ];

    function jury(){
        return $this->hasOne(jury::class);
       }
}
