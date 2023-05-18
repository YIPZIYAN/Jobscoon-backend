<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'description',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $with = [
        'company',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function careerDevelopments()
    {
        return $this->belongsToMany(CareerDevelopment::class, 'career_development_applications');
    }

    public function jobInterviews()
    {
        return $this->hasMany(JobInterview::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function jobPosts()
    {
        return $this->belongsToMany(JobPost::class, 'job_applications');
    }

    public function jobPostsInterview()
    {
        return $this->belongsToMany(JobPost::class, 'job_interviews')
        ->withTimestamps();
    }
}
