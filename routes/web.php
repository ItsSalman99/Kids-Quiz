<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('quize/questions', [QuestionController::class, 'index'])->name('quizes.questions');
Route::post('quize/questions/store', [QuestionController::class, 'store'])->name('quizes.questions.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
