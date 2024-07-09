<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $filable = [
        'name',
        'email',
        'phone_number',
        'address',
    ];

    public function Schedules(): HasMany
    {
        return $this->hasMany(Schedules::class);
    }

    public function AdminRole(): HasOne
    {
        return $this->hasOne(AdminRole::class);
    }
}
