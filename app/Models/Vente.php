<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantite',
        'date',
        'client_id',
        'lait_id'
    ];

    /**
     * Get the client that owns the Vente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the lait that owns the Vente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lait(): BelongsTo
    {
        return $this->belongsTo(lait::class);
    }
}
