<?php

namespace App\Models;

use App\Models\User;
use App\Models\Animal;
use App\Models\EtatSante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FicheControle extends Model
{
    use HasFactory;

    protected $fillable = [
        'symptome',
        'diagnostique',
        'traitement',
        'date',
        'etat_sante_id',
        'animal_id',
        'user_id',
        'etat_lactation'
    ];

    /**
     * Get the animal that owns the FicheControle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }

    /**
     * Get the user that owns the FicheControle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the etat_sante that owns the FicheControle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etat_sante(): BelongsTo
    {
        return $this->belongsTo(EtatSante::class);
    }
}
