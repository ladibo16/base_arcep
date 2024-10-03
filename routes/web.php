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

    // Route::get('delete-localite/{localite_id}', [ App\Http\Controllers\Admin\localitesController::class, 'destroy']);
    Route::post('delete-localite', [ App\Http\Controllers\Admin\localitesController::class, 'destroy']);
    // Route::delete('/delete-localite/{item}', [ App\Http\Controllers\Admin\localitesController::class, 'destroy'])->name('localite.destroy');
    

    Route::post('import-localite', [ App\Http\Controllers\Admin\localitesController::class, 'import']);



    Route::get('sites', [ App\Http\Controllers\Admin\SitesController::class, 'index']);

    Route::get('add-site', [ App\Http\Controllers\Admin\SitesController::class, 'create']);

    Route::post('add-site', [ App\Http\Controllers\Admin\SitesController::class, 'store']);

    // Route::get('site/{site}/edit', [ App\Http\Controllers\Admin\localitesController::class, 'edit']);
    Route::get('edit-site/{site_id}', [ App\Http\Controllers\Admin\SitesController::class, 'edit']);

    Route::put('update-site/{site_id}', [ App\Http\Controllers\Admin\SitesController::class, 'update']);

    Route::get('detail_site/{id}', [ App\Http\Controllers\Admin\SitesController::class, 'detail_site']);

    Route::post('delete-site', [ App\Http\Controllers\Admin\SitesController::class, 'destroy']);

    // Route::get('delete-site/{site_id}', [ App\Http\Controllers\Admin\SitesController::class, 'destroy']);



});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


