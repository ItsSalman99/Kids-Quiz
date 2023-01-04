<?php

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Admin\BatchController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
  return redirect(route('admin.login.create'));
});


//------------------ AUTH ROUTES -------------------//
Route::get('/admin/login', [LoginController::class, 'create'])->name('admin.login.create');
Route::post('/loginstore', [LoginController::class, 'store'])->name('admin.login.store');
Route::get('logout', [LogoutController::class, 'logout'])->name('admin.user.logout');
//------------------ AUTH ROUTES END -------------------//


Route::group(['midddleware' => 'auth'], function () {

  Route::view('dashboard', 'Admin.Dashboard.index')->name('admin.dashboard.index');

  //---------------- USER ROUTES ---------------------//
  Route::group(['prefix' => 'admin/user'], function () {
    Route::get('/index', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('/update', [UserController::class, 'update'])->name('admin.user.update');
    Route::post('/delete', [UserController::class, 'delete'])->name('admin.user.delete');
  });
  //---------------- USER ROUTES END ---------------------//

  //------------------ EXAMS ROUTES ------------------//
  Route::group(['prefix' => 'admin/exam'], function () {
    Route::get('/index', [ExamController::class, 'index'])->name('admin.exam.index');
    Route::get('/create', [ExamController::class, 'create'])->name('admin.exam.create');
    Route::post('/store', [ExamController::class, 'store'])->name('admin.exam.store');
    Route::get('/edit/{id}', [ExamController::class, 'edit'])->name('admin.exam.edit');
    Route::post('/update', [ExamController::class, 'update'])->name('admin.exam.update');
    Route::post('/delete', [ExamController::class, 'delete'])->name('admin.exam.delete');
    Route::get('/view/{id}', [ExamController::class, 'view'])->name('admin.exam.view');
  });
  //------------------ EXAMS ROUTES END ------------------//

  //------------------ QUESTIONS ROUTES ------------------//
  Route::group(['prefix' => 'admin/question'], function () {
    Route::get('/index', [QuestionController::class, 'index'])->name('admin.question.index');
    Route::get('/create', [QuestionController::class, 'create'])->name('admin.question.create');
    Route::post('/store', [QuestionController::class, 'store'])->name('admin.question.store');
    Route::get('/edit/{id}', [QuestionController::class, 'edit'])->name('admin.question.edit');
    Route::post('/update', [QuestionController::class, 'update'])->name('admin.question.update');
    Route::post('/delete', [QuestionController::class, 'delete'])->name('admin.question.delete');
  });
  //------------------ QUESTIONS ROUTES END ------------------//

  //------------------ BATCHES ROUTES ------------------//
  Route::group(['prefix' => 'admin/batch'], function () {
    Route::get('/index', [BatchController::class, 'index'])->name('admin.batch.index');
    Route::post('/store', [BatchController::class, 'store'])->name('admin.batch.store');
    Route::post('/update', [BatchController::class, 'update'])->name('admin.batch.update');
    Route::post('/delete', [BatchController::class, 'delete'])->name('admin.batch.delete');
  });
  //------------------ BATCHES ROUTES END ------------------//

  //------------------ STUDENT ROUTES ------------------//
  Route::group(['prefix' => 'admin/student'], function () {
    Route::get('/index', [StudentController::class, 'index'])->name('admin.student.index');
    Route::post('/store', [StudentController::class, 'store'])->name('admin.student.store');
    Route::post('/update', [StudentController::class, 'update'])->name('admin.student.update');
    Route::post('/delete', [StudentController::class, 'delete'])->name('admin.student.delete');
    Route::get('/excelimp', [StudentController::class, 'ExcelStudent'])->name('admin.student.import');
    Route::post('/excelstore', [StudentController::class, 'ExcelStudentstore'])->name('admin.student.excelstore');
  });
  //------------------ STUDENT ROUTES END ------------------//

  //------------------ SCHEDULE ROUTES ------------------//
  Route::group(['prefix' => 'admin/schedule'], function () {
    Route::get('/index', [ScheduleController::class, 'index'])->name('admin.schedule.index');
    Route::post('/store',[ScheduleController::class,'store'])->name('admin.schedule.store');
    Route::post('/delete', [ScheduleController::class, 'delete'])->name('admin.schedule.delete');
  });
  //------------------ SCHEDULE  ROUTES END ------------------//
});
