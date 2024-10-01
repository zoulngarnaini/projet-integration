<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'origine',
        'robe',
        'date_nais',
        'date_arriv',
        'description',
        'race',
        'capacite_prod',
        'photo',
        'etat_lactation'
    ];
}
