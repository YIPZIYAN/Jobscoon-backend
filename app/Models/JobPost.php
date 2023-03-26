<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'salary_lower',
        'salary_upper',
        'type',
        'shift',
        'description',
        'company_id',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
