<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable=[
        'batch_timings','teacher','course'
    ];

    public function student()
    {
        return $this->hasMany(User::class);
    }

    public function shcedule()
    {
        return $this->hasMany(ScheduleExam::class);
    }
}
