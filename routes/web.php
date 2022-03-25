<?php

use App\Http\Controllers\UsuariosController;
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
    return view('auth.login');
});

/*Route::get('/usuarios', function () {
    return view('usuarios.index');
});*/

Route::resource('usuarios', UsuariosController::class);


Auth::routes([ 'reset'=>false]);

Route::get('/home', [UsuariosController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [UsuariosController::class, 'index'])->name('home');
});




