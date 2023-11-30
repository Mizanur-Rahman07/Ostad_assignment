<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',function() {
	return view('pages.home');
})->name('home');
Route::get('/home',[PageController::class,'home'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/project',[PageController::class,'project'])->name('project');
Route::get('/skill',[PageController::class,'skills'])->name('skill');
Route::get('/contact',[PageController::class,'contact'])->name('contact');