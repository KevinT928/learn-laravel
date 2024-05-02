<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// added
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// added for notification (add the event php)
use App\Events\ChirpCreated;

class Chirp extends Model
{
    use HasFactory;

    //added
    protected $fillable = [
        'message',
    ];

    // added for notification
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    // added
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
