<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
// PublicController//
Route::get('/',[PublicController::class, 'homepage'])->name('home');

//CRUD e ArticleController//

//create//
Route::get('article/create',[ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::post('article/store',[ArticleController::class, 'store'])->name('article.store')->middleware('auth');
