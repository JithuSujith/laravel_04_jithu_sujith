<?php
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class,'home'])->name('home');


//Categories

Route::get('/articles/{category}',[PublicController::class,'category'] )->name('categories');


//Articles

Route::get('/details/{id}',[PublicController::class,'article'] )->name('detail');
