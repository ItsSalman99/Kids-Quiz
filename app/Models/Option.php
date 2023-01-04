<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable=[
        'question_id','option1','option2','option3','option4'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class,'question_id','id');
    }
}
