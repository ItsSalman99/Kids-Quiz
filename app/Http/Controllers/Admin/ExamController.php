<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        $exam= Exam::orderBy('id','DESC')->get();
        return view('Admin.Exams.index',compact('exam'));
    }

    public function create()
    {
        return view('Admin.Exams.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'exam_name' => 'required',
            'exam_duration' => 'required',
            'exam_marks' => 'required',
            'exam_note' => 'required',
        ]);
        $exam = new Exam;
        $exam->exam_name = $request->exam_name;
        $exam->exam_duration = $request->exam_duration;
        $exam->exam_marks = $request->exam_marks;
        $exam->exam_note = $request->exam_note;
        $exam->active = $request->active == true ? 1 : 0;
        $exam->save();
        return redirect()->route('admin.exam.index')->with('success', 'Exam Created Successfully!');
    }

    public function edit($id)
    {
        $exam=Exam::find($id);
        return view('Admin.Exams.edit',compact('exam'));
    }

    public function update(Request $request)
    {
        $exam= Exam::find($request->exam_id);
        $exam->exam_name = $request->exam_name;
        $exam->exam_duration = $request->exam_duration;
        $exam->exam_marks = $request->exam_marks;
        $exam->exam_note = $request->exam_note;
        $exam->active = $request->active == true ? 1 : 0;
        $exam->save();
        return redirect()->route('admin.exam.index')->with('success', 'Exam Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $exam= Exam::where('id',$request->id)->delete();
        return response()->json(["status" => "Exam Deleted Successfully!"]);
    }

    public function view($id)
    {
        $exam= Exam::find($id);
        return view('Admin.Exams.view',compact('exam'));
    }
}
