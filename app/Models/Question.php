<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=[
        'exam_id','question','right_answer'
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id','id');
    }

    public function option()
    {
       return $this->hasMany(Option::class)->inRandomOrder();
    }

}
