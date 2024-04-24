<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('localite', [ App\Http\Controllers\Admin\localitesController::class, 'index']);

    Route::get('add-localite', [ App\Http\Controllers\Admin\localitesController::class, 'create']);

    Route::post('add-localite', [ App\Http\Controllers\Admin\localitesController::class, 'store']);

    Route::get('edit-localite/{localite_id}', [ App\Http\Controllers\Admin\localitesController::class, 'edit']);

    Route::put('update-localite/{localite_id}', [ App\Http\Controllers\Admin\localitesController::class, 'update']);

    Route::get('delete-localite/{localite_id}', [ App\Http\Controllers\Admin\localitesController::class, 'destroy']);



});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


