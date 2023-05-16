<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
        /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(\DateTimeInterface $date)
    {
        return Carbon::instance($date)->setTimezone('Asia/Kuala_Lumpur')->toDateTimeString();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jobPost()
    {
        return $this->belongsTo(JobPost::class);
    }

    // public function getCreatedAtColumn()
    // {
    //     return Carbon::parse($this->created_at)->setTimezone('Asia/Kuala_Lumpur')->format('Y-m-d H:i:s');
    // }

    // public function getUpdatedAtColumn()
    // {
    //     return Carbon::parse($this->updated_at)->setTimezone('Asia/Kuala_Lumpur')->format('Y-m-d H:i:s');
    // }
}
