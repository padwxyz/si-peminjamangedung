<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    use HasFactory;
    protected $filable = [
        'title',
    ];

    public function Admin(): HasOne
    {
        return $this->hasOne(Admin::class);
    }
}
