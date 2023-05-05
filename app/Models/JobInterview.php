<?php

namespace App\Models;

use Carbon\Carbon;
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
        'status',
    ];

    protected $appends = [
        'day_only',
        'year_only',
        'month_in_word',
        'day_in_word',
        'combined_time',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jobPost()
    {
        return $this->belongsTo(JobPost::class);
    }

    public function getDayOnlyAttribute()
    {
        return Carbon::parse($this->date)->format('d');
    }

    public function getYearOnlyAttribute()
    {
        return Carbon::parse($this->date)->format('Y');
    }

    public function getMonthInWordAttribute()
    {
        return Carbon::parse($this->date)->format('M');
    }

    public function getDayInWordAttribute()
    {
        return Carbon::parse($this->date)->format('l');
    }

    public function getCombinedTimeAttribute()
    {
        return Carbon::parse($this->start_time)->format('h:i A').' - '.Carbon::parse($this->end_time)->format('h:i A');
    }

}
