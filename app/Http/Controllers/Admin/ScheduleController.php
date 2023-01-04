<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Exam;
use App\Models\ScheduleExam;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = ScheduleExam::all();
        $exam = Exam::where('active', '=', 1)->get();
        $batch = Batch::all();
        return view('Admin.Schedule.index', compact('exam', 'batch', 'schedule'));
    }

    public function store(Request $request)
    {
        $schedule = new ScheduleExam;
        $schedule->exam_id = $request->exam_id;
        $schedule->batch_id = $request->batch_id;
        $schedule->save();
        return redirect()->back()->with('success', 'Exam Scheduled Successfully!');
    }
    public function delete(Request $request)
    {
        $schedule = ScheduleExam::where('id', $request->id)->delete();
        return response()->json(["status" => "Schedule Exam Deleted Successfully!"]);
    }
}
