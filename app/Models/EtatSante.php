<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatSante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date_deb',
        'date_sort'
    ];
}
