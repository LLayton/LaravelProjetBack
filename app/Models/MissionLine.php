<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionLine extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'unity',    
        'quantity',
        'price',
        'mission_id',
    ];

}
