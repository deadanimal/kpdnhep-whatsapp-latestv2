<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function mesejs()
    {
        return $this->hasMany(Mesej::class);
    }
    public function tugasans()
    {
        return $this->hasMany(Tugasan::class);
    }
}
