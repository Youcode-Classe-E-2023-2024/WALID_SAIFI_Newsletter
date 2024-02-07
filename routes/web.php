<?php

use App\Http\Controllers\AuthentificationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashebord', function () {
    return view('dashebord');
});

Route::get('/register',[AuthentificationController::class, 'pageregister']);
Route::post('/',[AuthentificationController::class, 'registerSave'])->name('register.save');
Route::get('/login',[AuthentificationController::class,'pagelogin'])->name('login.page');

