<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerDevelopment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date_start',
        'date_end',
        'start_time',
        'end_time',
        'type',
        'link',
        'location',
        'description',
        'capacity',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
