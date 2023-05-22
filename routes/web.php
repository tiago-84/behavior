<?php

use App\Http\Controllers\UserController;
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

/**
 * Route::view http ('uri'), '[Controller::class, 'method'];
 *
 * Passo a passo: Criar Controlador -> Definir rota -> Cração de metodo -> Camada view
 */

Route::view('/form', 'form');


/**
 * GET
 */
Route::get('/users/1', [UserController::class, 'index']);
Route::get('/getData', [UserController::class, 'getData']);

/**
 * POST
 */
Route::post('/postData', [UserController::class, 'postData']);

/**
 * PUT
 */
Route::put('/users/1', [UserController::class, 'testPut']);

/**
 * PATCH
 */

Route::patch('/users/1', [UserController::class, 'testPatch']);

/**
 * Math PUT/PATCH
 */

Route::match(['PUT', 'PATCH'], '/users/2', [UserController::class, 'testMatch']);

