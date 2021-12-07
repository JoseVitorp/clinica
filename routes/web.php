<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/', 'HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/usuarios', 'UsuariosController@index')->middleware('auth');
Route::get('/usuarios/new', 'UsuariosController@new')->middleware('auth');
Route::post('usuarios/add', 'UsuariosController@add')->middleware('auth');
Route::get('usuarios/{id}/edit', 'UsuariosController@edit')->middleware('auth');
Route::patch('/usuarios/update/{id}', 'UsuariosController@update')->middleware('auth');
Route::delete('/usuarios/delete/{id}', 'UsuariosController@delete')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
