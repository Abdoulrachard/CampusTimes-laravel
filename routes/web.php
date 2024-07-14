<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController ;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TimetableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loadestudent.dashboardd by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('guest')->prefix('auth')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])->name('auth.register');
    Route::post('register', [RegisterController::class, 'store']) ;
    Route::get('login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('login', [LoginController::class, 'doLogin']);
}) ;

Route::delete('auth/logout', [LoginController::class, 'logout'])->middleware('auth')->name('auth.logout');
Route::middleware(['auth','adminDenied'])->group(function (){
        Route::view('/', 'student.dashboard')->name('student.dashboard');
        Route::view('faq', 'student.faq')->name('faq.index');
        Route::view('timetable', 'student.timetable')->name('student.timetable.index');
});
Route::prefix('admin')->middleware(['auth','studentDenied'])->group(function () {
        Route::resource('level', LevelController::class)->except('show');
        Route::resource('subject', SubjectController::class)->except('show');
        Route::resource('classroom', ClassroomController::class)->except('show');
        Route::resource('timetable', TimetableController::class);
        Route::resource('teacher', TeacherController::class)->except('show');
        Route::resource('collaborator', CollaboratorController::class)->except('show');
        Route::get('student', [StudentController::class, 'index'])->name('student.index');
        Route::post('student/{student}', [StudentController::class, 'blocked'])->name('student.blocked');
        Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
});
Route::middleware('auth')->group(function(){
        Route::get('profile/edit', [PasswordController::class, 'edit'])->name('profile.edit');
        Route::put('profile/update', [PasswordController::class, 'update'])->name('profile.update');
        Route::put('profile/password', [PasswordController::class, 'updatePass'])->name('profile.password.update');
});
