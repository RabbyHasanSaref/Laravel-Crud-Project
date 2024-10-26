<?php

use Illuminate\Support\Facades\Route;




Route::get('/', [\App\Http\Controllers\Crud\crudController::class, 'index'])->name('home');
Route::get('add', [\App\Http\Controllers\Crud\crudController::class, 'create']);
Route::post('add-store', [\App\Http\Controllers\Crud\crudController::class, 'store']);
Route::get('/show/{id}', [\App\Http\Controllers\Crud\crudController::class, 'show'])->name('show');
Route::get('edit/{id}', [\App\Http\Controllers\Crud\crudController::class, 'edit']);
Route::put('update/{id}', [\App\Http\Controllers\Crud\crudController::class, 'update'])->name('update');
Route::delete('delete/{id}', [\App\Http\Controllers\Crud\crudController::class, 'destroy']);






//optional route
Route::get('/welcome', function () {
    return view('welcome');
});
