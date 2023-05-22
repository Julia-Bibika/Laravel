<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Good extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'owner',
        'price',
        'date',
        'owner_id',
    ];
    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
