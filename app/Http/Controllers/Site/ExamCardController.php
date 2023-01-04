<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Option;
use App\Models\ScheduleExam;

class ExamCardController extends Controller
{
    public function getExam($id)
    {   
        $data = [];
        $exam= Exam::find($id);
        $question= Question::where('exam_id',$id)->get();
        foreach ($question as $key) {
        $options = Option::where('question_id','=',$key->id)->first();    
        
        $data[] = [
            "Question"  => $key->question,
            "option1"   => $options['option1'],
            "option2"   => $options['option2'],
            "option3"   => $options['option3'],
            "option4"   => $options['option4'],
        ];
    }
        
       
        
       return view('Site.Pages.exam',compact('exam','data'));
    }
}
