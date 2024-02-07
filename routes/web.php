<?php

use App\Http\Controllers\AuthentificationController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashebord', function () {
    return view('dashebord');
});

Route::get('/register',[AuthentificationController::class, 'pageregister'])->name('pageregister');
Route::post('/',[AuthentificationController::class, 'registerSave'])->name('register.save');
Route::get('/login',[AuthentificationController::class,'pagelogin'])->name('login.page');
Route::post('/',[AuthentificationController::class,'loginAction'])->name('login.Action');

