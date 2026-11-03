<?php

use App\Http\Controllers\JamController;
use Illuminate\Support\Facades\Route;



Route::get('/jam', [JamController::class,'index'])->name('jam.index');
Route::get('/jam/create', [JamController::class,'create'])->name('jam.create');
Route::post('/jam', [JamController::class,'store'])->name('jam.store');
Route::get('/jam/{jam}/edit', [JamController::class,'edit'])->name('jam.edit');
Route::put('/jam/{jam}', [JamController::class,'update'])->name('jam.update');
Route::delete('/jam/{jam}', [JamController::class,'destroy'])->name('jam.destroy');
   
route::get('/', function () {
    return to_route('jam.index');
});