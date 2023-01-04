<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable=[
        'exam_name','exam_duration','exam_marks','exam_note','active'
    ];

    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function schedule()
    {
        return $this->hasMany(ScheduleExam::class);
    }
}
