<?php

namespace App\Models;

use App\Models\User;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Synchronisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_synchronisation',
        'animal_id',
        'user_id',
        'etat'
    ];

    /**
     * Get the animal that owns the Synchronisation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }
    /**
     * Get the user that owns the Synchronisation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
