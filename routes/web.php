<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Auth::routes();

Route::get('/', function (){
    return view('index');
});

/**
 * rotas de criacao do usuario
 */
Route::get('/registro', [UserController::class, 'createPage']);
Route::post('/usuario', [UserController::class, 'create'])->name('user.create');

/**
 * rotas de atualizacao do usuario
 */
Route::get('/atualizaUsuario', [UserController::class, 'updatePage']);
Route::put('/atualizaUsuario', [UserController::class, 'update'])->name('user.update');

/**
 * rotas de login com API do Google
 */
Route::get('/loginGoogle', [UserController::class, 'loginGooglePage']);
Route::post('/loginGoogle', [UserController::class, 'loginGoogle'])->name('user.loginGoogle');

/**
 * rotas de login do usuario
 */
Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login', [UserController::class, 'login'])->name('user.login');

/**
 * rota home
 */
Route::get('/home', [HomeController::class, 'index'])->name('home');
