<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleExam extends Model
{
    protected $fillable=[
        'exam_id','batch_id'
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id','id');
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class,'batch_id','id');
    }
}
