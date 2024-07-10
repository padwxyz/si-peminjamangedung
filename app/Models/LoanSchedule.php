<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'user_id',
        'building_id',
        'room_id',
        'loan_start_date',
        'loan_end_date',
        'start_time',
        'end_time',
        'activity_letter',
        'purpose',
        'status_id',
    ];

    public function building(): HasOne
    {
        return $this->hasOne(Building::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
}
