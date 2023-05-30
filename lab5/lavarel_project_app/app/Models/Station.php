<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Station extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'owner',
        'address',
        'creator_user_id',
    ];

    public function fuel(): HasMany
    {
        return $this->hasMany(Fuel::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
