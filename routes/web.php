<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeacherController;


Route::get('/',[FrontController::class,'home'])->name('home');
Route::as('front.')->group(function (){

    Route::get('/course-details',[FrontController::class,'courseDetails'])->name('course.details');

});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
   Route::resource('teachers',TeacherController::class);
});
