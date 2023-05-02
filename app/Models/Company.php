<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_number',
        'reg_no',
        'location',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function careerDevelopments()
    {
        return $this->hasMany(CareerDevelopment::class);
    }
}
