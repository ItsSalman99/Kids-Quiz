<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Option;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $question = Question::orderBy('id', 'DESC')->get();
        return view('Admin.Questions.index', compact('question'));
    }
    public function create()
    {
        $exam = Exam::where('active', '=', 1)->get();
        return view('Admin.Questions.create', compact('exam'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'exam_id' => 'required',
            'question' => 'required',
            'option1'  => "required",
            'option2'  => "required",
            'option3'  => "required",
            'option4'  => "required",
            'right_answer' => 'required',
        ]);

        $question = new Question;
        $question->exam_id =  $request->exam_id;
        $question->question = $request->question;
        $question->right_answer  = $request->right_answer;
        $question->save();

        $option= new Option;
        $option->question_id = $question->id;
        $option->option1 = $request->option1;
        $option->option2 = $request->option2;
        $option->option3 = $request->option3;
        $option->option4 = $request->option4;
        $option->save();
        // foreach ($request->options as $key => $value) {
        //     Option::create([
        //         'question_id' => $question->id,
        //         'options' => $request->options[$key],
        //     ]);
        // }
        return redirect()->route('admin.question.index')->with('success', 'Question Created Successfully!');
    }

    public function edit($id)
    {
        $exam = Exam::where('active', '=', 1)->get();
        $question = Question::find($id);
        return view('Admin.Questions.edit', compact('question', 'exam'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'option1'  => "required",
            'option2'  => "required",
            'option3'  => "required",
            'option4'  => "required",
            'right_answer' => 'required',
        ]);

        $question = Question::find($request->que_id);
        $question->exam_id =  $request->exam_id;
        $question->question = $request->question;
        $question->right_answer  = $request->right_answer;
        $question->save();

        $option= Option::find($request->opt_id);
        $option->question_id = $question->id;
        $option->option1 = $request->option1;
        $option->option2 = $request->option2;
        $option->option3 = $request->option3;
        $option->option4 = $request->option4;
        $option->save();
        // $opt = [];
        // for ($i = 0; $i < count($request->opt_id); $i++) {
        //     $opt[] = Option::where('id', '=', $request->opt_id[$i])->update([
        //         'options' => $request->options[$i],
        //     ]);
        // }

        return redirect()->route('admin.question.index')->with('success', 'Question Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $question = Question::where('id', $request->id)->delete();
        return response()->json(["status" => "Question Deleted Successfully!"]);
    }
}
