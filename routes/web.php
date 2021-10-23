<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form', [App\Http\Controllers\FormController::class, 'index'])->name('form');
Route::get('/formView', [App\Http\Controllers\FormController::class, 'view'])->name('formView');
Route::get('/viewResult', [App\Http\Controllers\FormController::class, 'viewResult'])->name('viewResult');
Route::get('/formViewUser', [App\Http\Controllers\FormUserController::class, 'viewUser'])->name('formViewUser');
