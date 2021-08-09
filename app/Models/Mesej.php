<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesej extends Model
{
    use HasFactory;
    public function Rooms()
    {
        return $this->belongsTo(Room::class);
    }
}
