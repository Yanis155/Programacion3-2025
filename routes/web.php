<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buscar', function(){
    return view('/buscar');

});
Route::post('student', [StudentController::class, 'buscar'])->name('student.buscar');