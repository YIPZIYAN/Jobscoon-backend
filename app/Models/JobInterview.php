<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobInterview extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 
        'start_time',
        'end_time',
        'type',
        'link',
        'location',
        'description',
    ];
}
