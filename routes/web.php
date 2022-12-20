<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Contact\DashboardController;


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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource("/contact/contacts", ContactController::class);




Route::prefix('contact')->group(function(){
    Route::get('dashboard', [App\Http\Controllers\Contact\DashboardController::class, 'index']);

    Route::get('contacts/index',[App\Http\Controllers\Contact\ContactController::class, 'index']);
    Route::get('contacts/create',[App\Http\Controllers\Contact\ContactController::class, 'create']);
    Route::post('contacts/save',[App\Http\Controllers\Contact\ContactController::class, 'store']);
    Route::get('contacts/edit/{id}',[App\Http\Controllers\Contact\ContactController::class, 'edit']);
    Route::post('contacts/update',[App\Http\Controllers\Contact\ContactController::class, 'update']);
    Route::get('contacts/delete/{id}',[App\Http\Controllers\Contact\ContactController::class, 'delete']);



});

 