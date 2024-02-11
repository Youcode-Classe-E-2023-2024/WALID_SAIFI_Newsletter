<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\ForgetpasswordController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;





Route::get('/home', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/register',[AuthentificationController::class, 'pageregister'])->name('pageregister');

Route::middleware('guest')->group(function (){
    Route::get('/login',[AuthentificationController::class,'pagelogin'])->name('login');
    Route::post('/login',[AuthentificationController::class,'loginAction'])->name('loginAction');

});
Route::post('/register.save',[AuthentificationController::class, 'registerSave'])->name('register.save');
Route::post('/', [AuthentificationController::class, 'destroy'])->name('logout');


Route::post('subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
Route::get('/forget_password', [ForgetpasswordController::class, 'fogetpassword']);


