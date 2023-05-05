<?php

namespace App\Models;

use Carbon\Carbon;
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

    protected $appends = [
        'date_only',
        'combined_time',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function getDateOnlyAttribute()
    {
        return ($this->date_start == $this->date_end) ?
        $this->date_end:
        $this->date_start.' - '.$this->date_end;
    }

    public function getCombinedTimeAttribute()
    {
        return Carbon::parse($this->start_time)->format('h:i A').' - '.Carbon::parse($this->end_time)->format('h:i A');
    }
}
