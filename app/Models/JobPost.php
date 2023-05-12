<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class JobPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'salary_lower',
        'salary_upper',
        'type',
        'shift_start',
        'shift_end',
        'description',
        'company_id',
    ];

    protected $appends = [
        'post_at',
        'salary',
        'is_applied',
        'shift',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'job_applications')
        ->withTimestamps()
        ->withPivot('status');
    }

    public function getPostAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getShiftAttribute()
    {
        return $this->shift_start." to ".$this->shift_end;
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
        return "RM " . strval($this->salary_lower) . " - " . strval($this->salary_upper);
    }

    public function getIsAppliedAttribute()
    {
        return ($this->users()->where('user_id', Auth::user()->id)->exists()) ? true : false;
    }
}
