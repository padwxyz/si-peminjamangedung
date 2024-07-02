<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $filable = [
        'building_name',
        'building_room',
        'floor_quantity',
        'building_capacity',
    ];
}
