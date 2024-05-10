<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
// PublicController//
Route::get('/',[PublicController::class, 'homepage'])->name('home');

//CRUD e ArticleController//

//create//
Route::get('article/create',[ArticleController::class, 'create'])->name('article.create')->middleware('auth');
//store//
Route::post('article/store',[ArticleController::class, 'store'])->name('article.store')->middleware('auth');
//index//
Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
//show//
Route::get('/article/show/{article}',[ArticleController::class, 'show'])->name('article.show');
//edit//
Route::get('/article/edit/{article}',[ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
//update//
Route::put('/article/update{article}',[ArticleController::class, 'update'])->name('article.update')->middleware('auth');
//destroy//
Route::delete('/article/destroy/{article}',[ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');


