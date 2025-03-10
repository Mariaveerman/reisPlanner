<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class TransitStop extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = "TransitStop";
    public $timestraps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
    */
    protected $fillable = [
        'rices_id',
        'station',
        'departure_time',
        'arrival_time',    
    ];

    public function rice(): BelongsTo
    {
        return $this->BelongsTo(Rice::class);
    }
}
