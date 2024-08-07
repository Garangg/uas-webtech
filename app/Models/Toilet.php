<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toilet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'length',
        'width',
        'floor_location',
        'description',
    ];
}
