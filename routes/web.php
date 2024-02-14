<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\ForgetpasswordController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TempletController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/ajouterT',[TempletController::class, 'index'])->name('ajouter');
    Route::post('/ajoutertemplet', [TempletController::class, 'store'])->name('ajouter_templet');


    Route::get('/list',[SubscriptionController::class,'index'])->name('list.email');
    Route::delete('/list/{listemail}/delete', [SubscriptionController::class, 'delete'])->name('email.delete');

});


Route::get('/register',[AuthentificationController::class, 'pageregister'])->name('pageregister');

Route::middleware('guest')->group(function (){
    Route::get('/login',[AuthentificationController::class,'pagelogin'])->name('login');
    Route::post('/login',[AuthentificationController::class,'loginAction'])->name('loginAction');

});
Route::post('/register.save',[AuthentificationController::class, 'registerSave'])->name('register.save');
Route::post('/', [AuthentificationController::class, 'destroy'])->name('logout');


Route::post('subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
Route::get('/forget_password', [ForgetpasswordController::class, 'fogetpassword'])->name('foget.password');
Route::post('/forget_password', [ForgetpasswordController::class, 'fogetpasswordPost'])->name('foget.passwordPost');

Route::get('/rest_password/{token}', [ForgetpasswordController::class, 'rest_password'])->name('rest.password');
Route::post('/rest_password', [ForgetpasswordController::class, 'rest_passwordPost'])->name('rest.passwordPost');





/*Route::get('/ajoutert', function () {
    return view('ajouter_templet');
})->name('ajouter');*/
