<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Batch;

class BatchController extends Controller
{
    public function index()
    {
        $batch= Batch::orderBy('id','DESC')->get();
        return view('Admin.Batches.index',compact('batch'));
    }

    public function store(Request $request)
    {
        $batch= new Batch;
        $batch->batch_timings = $request->batch_timings;
        $batch->teacher = $request->teacher;
        $batch->course = $request->course;
        $batch->save();
        return redirect()->back()->with('success', 'Batch Created Successfully!');
    }

    public function update(Request $request)
    {
        $batch= Batch::find($request->batch_id);
        $batch->batch_timings = $request->batch_timings;
        $batch->teacher = $request->teacher;
        $batch->course = $request->course;
        $batch->save();
        return redirect()->back()->with('success', 'Batch Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $exam= Batch::where('id',$request->id)->delete();
        return response()->json(["status" => "Batch Deleted Successfully!"]);
    }
}
