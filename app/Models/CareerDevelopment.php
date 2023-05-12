<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class CareerDevelopment extends Model
{
    use HasFactory,SoftDeletes;

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
        'max_capacity',
        'image',
    ];

    protected $appends = [
        'date_only',
        'combined_time',
        'is_applied',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'career_development_applications')
        ->withTimestamps();
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

    public function getIsAppliedAttribute()
    {
        return ($this->users()->where('user_id',Auth::user()->id)->exists()) ? true : false;
    }

    public function updateCapacity($id)
    {
        $noApply =CareerDevelopmentApplication::where('career_development_id', $id)->count();
        $this->capacity = $this->max_capacity - $noApply;
        $this->save();
    }
}
