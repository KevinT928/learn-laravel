<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// added
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;

    //added
    protected $fillable = [
        'message',
    ];

    // added
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
