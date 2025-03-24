<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class TicketUser extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = "tickets_users";
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
    */
    protected $fillable = [
        'ticket_id',
        'user_id',
    ];

    public function ticket(): BelongsTo
    {
        return $this->BelongsTo(Ticket::class);
    }

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
