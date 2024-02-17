<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\ForgetpasswordController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TempletController;
use App\Http\Controllers\UploadController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use Spatie\Permission\Models\Permission;


Route::get('/', function () {

    return view('home');
})->name('home');

Route::middleware('auth')->group(function (){

    Route::get('/media', function () {
        return view('ajouter_media');
    })->name('ajouter');
    Route::post('/media', [UploadController::class, 'store'])->name('media');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/ajouterT',[TempletController::class, 'index'])->name('ajouter');

    Route::post('/ajoutertemp', [TempletController::class, 'store'])->name('ajouter.templet');


    Route::get('/list',[SubscriptionController::class,'index'])->name('list.email');
    Route::delete('/list/{listemail}/delete', [SubscriptionController::class, 'delete'])->name('email.delete');

    Route::get('/role', [RoleController::class, 'index'])->name('role.list');
    Route::get('/permission', [PermissionController::class, 'index'])->name('permission.list');

    Route::post('/role_ajouter', [RoleController::class, 'store'])->name('role_ajouter');

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


Route::get('/tmp', [TempletController::class, 'show'])->name('show_tmp');

