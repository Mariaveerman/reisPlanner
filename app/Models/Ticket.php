<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = "tickets";
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
    */
    protected $fillable = [
        'rices_id',
        'price',
        'tecket_count',
        'edit_by',    
    ];

    public function edit(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function rices(): BelongsTo
    {
        return $this->BelongsTo(Rice::class);
    }
}
