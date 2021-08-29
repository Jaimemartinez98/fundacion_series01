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
//GET= Trae datos o consulta en la base de datos = READ
//POST = Introduce datos en la base de datos = CREATE
//PUT = Actualiza datos en la base de datos = UPDATE
//DELETE = Elimna datos  = DELETE

Route::get('/empresas', [App\Http\Controllers\EmpresasController::class, 'index'])->name('empresas.index');
Route::get('/empresas/create', [App\Http\Controllers\EmpresasController::class, 'create'])->name('empresas.create');
Route::post('/empresas/store', [App\Http\Controllers\EmpresasController::class, 'store'])->name('empresas.store');
Route::get('/empresas/show/{id}', [App\Http\Controllers\EmpresasController::class, 'show'])->name('empresas.show');
Route::get('/empresas/edit/{id}', [App\Http\Controllers\EmpresasController::class, 'edit'])->name('empresas.edit');
Route::put('/empresas/update/{id}', [App\Http\Controllers\EmpresasController::class, 'update'])->name('empresas.update');
Route::delete('/empresas/delete/{id}', [App\Http\Controllers\EmpresasController::class, 'delete'])->name('empresas.delete');

Route::get('/series', [App\Http\Controllers\SeriesController::class, 'index'])->name('series.index');
Route::get('/series/create', [App\Http\Controllers\SeriesController::class, 'create'])->name('series.create');
Route::post('/series/store', [App\Http\Controllers\SeriesController::class, 'store'])->name('series.store');
Route::get('/series/show/{id}', [App\Http\Controllers\SeriesController::class, 'show'])->name('series.show');
Route::get('/series/edit/{id}', [App\Http\Controllers\SeriesController::class, 'edit'])->name('series.edit');
Route::put('/series/update/{id}', [App\Http\Controllers\SeriesController::class, 'update'])->name('series.update');
Route::delete('/series/delete/{id}', [App\Http\Controllers\SeriesController::class, 'delete'])->name('series.delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
