<?php

use Illuminate\Support\Facades\Route;

use App\Controller\UserController;
use App\Http\Controllers\frontend\HomeController;


Route::get('/', [Homecontroller::class,'index'])->name('home');

Route::get("user",[UserController::class,"index"]);
Route::get("user/1",[UserController::class,"show"]); 
Route::get("user/{id}/edit",[UserController::class,"edit"])->name("user.edit");
Route::get("user/list/{page?}",[UserController::class,"list"])->name("user.list");
