<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\StudentsImport;
use App\Models\Batch;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index()
    {
        $batch = Batch::all();
        $student = User::where('batch_id', '!=', null)->get();
        return view('Admin.Students.index', compact('batch', 'student'));
    }

    public function store(Request $request)
    {
        $student = new User;
        $student->batch_id = $request->batch_id;
        $student->name = $request->student_name;
        $student->email = $request->cr_number;
        $student->save();
        return redirect()->back()->with('success', 'Student Added Successfully!');
    }

    public function update(Request $request)
    {
        $student = User::find($request->student_id);
        $student->batch_id = $request->batch_id;
        $student->name = $request->student_name;
        $student->email = $request->cr_number;
        $student->save();
        return redirect()->back()->with('success', 'Student Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $exam = User::where('id', $request->id)->delete();
        return response()->json(["status" => "Student Deleted Successfully!"]);
    }

    public function ExcelStudent()
    {
        return view('Admin.Students.index');
    }
    public function ExcelStudentstore(Request $request)
    {
        $file= $request->file('excel');
        Excel::import(new StudentsImport,$file);
        return redirect()->back()->with('success', 'Student Imported Successfully!');
    }
}
