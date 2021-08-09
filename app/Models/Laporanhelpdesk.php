<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporanhelpdesk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_fail',
        'laluan_fail',
        'saiz'
    ];
}
