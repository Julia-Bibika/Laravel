<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fuel extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'amount',
        'price',
        'station_id',
        'creator_user_id',
    ];
    public function station(): BelongsTo
    {
        return $this->belongsTo(Station::class);
    }
}
