<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

// Route::get('/student', 'StudentController@index')->name('student')->middleware('student');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
// Route::get('/lecturer', 'LecturerController@index')->name('lecturer')->middleware('lecturer');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile{$user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');

Route::get('calendar/index', [App\Http\Controllers\calendarController::class, 'index'])->name('calendar.index');
Route::post('calendar', [App\Http\Controllers\calendarController::class, 'store'])->name('calendar.store');
Route::patch('calendar/update/{id}', [App\Http\Controllers\calendarController::class, 'update'])->name('calendar.update');
Route::delete('calendar/destroy/{id}', [App\Http\Controllers\calendarController::class, 'destroy'])->name('calendar.destroy');

