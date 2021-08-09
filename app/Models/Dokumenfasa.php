<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumenfasa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_fail',
        'laluan_fail',
        'saiz',
    ];
}
