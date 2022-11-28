<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

// Route::get('/', function () {
//     return view('starter');
// });
Route::get('/', [CustomAuthController::class,'newIndex']);
Route::get('delete/{title}', [CustomAuthController::class,'deleteCard']);
Route::get('/merchant', [CustomAuthController::class,'merchant'])->middleware('isLogged');
Route::get('/myProducts', [CustomAuthController::class,'myProducts'])->middleware('isLogged');
Route::get('/login', [CustomAuthController::class,'login'])->middleware('isLogged');
Route::get('/registration', [CustomAuthController::class,'registration'])->middleware('AlreadyLoggedIn');
Route::get('/index', [CustomAuthController::class,'myIndex'])->middleware('isLogged');
Route::post('/register-user', [CustomAuthController::class,'registrationUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/logout',[CustomAuthController::class,'logOut']);
Route::post('/merchant-user', [CustomAuthController::class,'merchantUser'])->name('merchant-user');


