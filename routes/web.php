<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/buscar', function(){
    return view('/buscar');

});
Route::post('buscar', [ApiController::class, 'buscar'])->name('api.buscar');
Route::post('guardarUsuarios',[ApiController::class, 'save']);