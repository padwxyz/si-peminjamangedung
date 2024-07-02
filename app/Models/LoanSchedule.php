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
}
