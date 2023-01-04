<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Site\ExamCardController;
use App\Http\Controllers\Site\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('site.login.create'));
});

//------------------ AUTH ROUTES -------------------//
Route::get('/login', [LoginController::class, 'create'])->name('site.login.create');
Route::post('/sitelogin', [LoginController::class, 'store'])->name('site.login.store');
//------------------ AUTH ROUTES END -------------------//

Route::group(['prefix' => 'site/exam'], function () {

    Route::view('card', 'Site.Pages.index')->name('site.examcard');
    Route::get('/examview/{id}', [ExamCardController::class, 'getExam'])->name('site.exam.view');
});


require "admin.php";
