<?php

namespace App\Models;

use App\Models\Alimantation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consommation extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantite',
        'jour',
        'alimantation_id'
    ];

    /**
     * Get the alimantation that owns the Consommation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alimantation(): BelongsTo
    {
        return $this->belongsTo(Alimantation::class);
    }
}
