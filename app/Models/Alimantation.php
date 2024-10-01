<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimantation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'quantite',
        'description'
    ];
}
