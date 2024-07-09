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

    public function Schedules(): HasOne
    {
        return $this->hasOne(Schedules::class);
    }
    public function Room(): HasMany
    {
        return $this->hasMany(Room::class);
    }
}
