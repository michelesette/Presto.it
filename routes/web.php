<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// HOME
Route::get('/',[PublicController::class, 'welcome'])
->name('homepage');


// ARTICLE
Route::post('/article/store', [ArticleController::class, 'store'])
->name('article.store')->middleware('auth');

Route::get('/article/create', [ArticleController::class, 'create'])
->name('article.create')->middleware('auth');

Route::get('/article/index', [ArticleController::class, 'index'])
->name('article.index');

Route::get('/article/show/{article}', [ArticleController::class, 'show'])
->name('article.show');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])
->name('article.edit')->middleware('auth');

Route::put('/article/update/{article}',[ArticleController::class, 'update'])
->name('article.update')->middleware('auth');

Route::delete('/article/destroy/{article}',[ArticleController::class, 'destroy'])
->name('article.destroy')->middleware('auth');