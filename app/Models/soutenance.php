<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soutenance extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'heure',
        'statut',
        'juries',
        'salles',
        'demandes',
        'users',
    ];
}

