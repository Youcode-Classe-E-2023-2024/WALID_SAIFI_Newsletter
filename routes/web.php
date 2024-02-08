<?php

use App\Http\Controllers\AuthentificationController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/register',[AuthentificationController::class, 'pageregister'])->name('pageregister');
Route::post('/register.save',[AuthentificationController::class, 'registerSave'])->name('register.save');
Route::get('/login',[AuthentificationController::class,'pagelogin'])->name('login.page');

Route::post('/register',[AuthentificationController::class,'loginAction'])->name('login.Action');
Route::post('/', [AuthentificationController::class, 'destroy'])->name('logout');

