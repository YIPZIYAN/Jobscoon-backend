<?php

namespace App\Models;

use Carbon\Carbon;
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

    protected $appends = [
        'post_at'
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function getPostAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }

}
