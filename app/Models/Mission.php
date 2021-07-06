<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'title',
        'comment' ,
        'deposit' ,
        'ended_at',
        'organisation_id'
    ];

}
