<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Rice extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = "rices";
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
    */
    protected $fillable = [
        'departure',
        'destination',
        'departure_time',
        'arrival_time',
        'weekdays',
        'delete_time',
        'transport_id',
        'edit_by',
        'creat_by',
    ];

    public function edit(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function creat(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transport(): BelongsTo
    {
        return $this->belongsTo(transport::class);
    }
}
