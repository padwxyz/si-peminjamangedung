<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $filable = [
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

    public function Building(): HasOne
    {
        return $this->hasOne(Building::class);
    }
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function Admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
}
