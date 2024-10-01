<?php

namespace App\Models;

use App\Models\User;
use App\Models\Animal;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prevention extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'etat',
        'user_id',
        'animal_id',
        'produit_id'
    ];

    /**
     * Get the produit that owns the Prevention
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }

    /**
     * Get the animal that owns the Prevention
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }
    /**
     * Get the user that owns the Prevention
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
