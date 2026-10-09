<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

Route::get('/',[LibraryController::class,'index']);
Route::post('/store',[LibraryController::class,'store'])->name('store');
Route::get('/edit/{id}',[LibraryController::class,'edit'])->name('edit');
Route::put('/update/{id}',[LibraryController::class,'update'])->name('update');
Route::delete('/delete/{id}',[LibraryController::class,'delete'])->name('delete');
Route::post('/search',[LibraryController::class,'search'])->name('search');
Route::post('/available',[LibraryController::class,'available'])->name('available');
