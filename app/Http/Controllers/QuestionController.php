<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::take(10)->get();

        return view('backend.quiz.index' , compact('questions'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

}
