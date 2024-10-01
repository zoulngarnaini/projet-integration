<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lait extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantite_total',
        'quantite_veau',
        'quantite_famille',
        'date',
        'animal_id'
    ];

    /**
     * Get the animal that owns the Lait
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }
}
