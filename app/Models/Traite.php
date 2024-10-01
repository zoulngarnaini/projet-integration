<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Traite extends Model
{
    use HasFactory;

    protected $fillable = [
        'animal_id',
        'lait_id',
        'periode',
        'superviseur'
    ];

    /**
     * Get the animal that owns the Traite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }
    /**
     * Get the lait that owns the Traite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lait(): BelongsTo
    {
        return $this->belongsTo(Lait::class);
    }
}
