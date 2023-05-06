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
        'post_at',
        'salary',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'job_applications');
    }

    public function getPostAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function jobInterviews()
    {
        return $this->hasMany(JobInterview::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }
    public function getSalaryAttribute()
    {
        return "RM ".strval($this->salary_lower)." - ".strval($this->salary_upper);
    }

}
