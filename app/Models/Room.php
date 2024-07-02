<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $filable = [
        'building_id',
        'facility_id',
        'room_name',
        'room_capacity',
        'number_of_floor',
    ];
}
