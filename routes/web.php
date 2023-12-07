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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [UserController::class, 'registerFunction'])->name('register');
Route::get('/update', [UserController::class, 'updateFunction'])->name('update');

//ruta actualizar usuario
Route::get('/users/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::put('/users/{id}/update', [UserController::class, 'updateData'])->name('user.update');

//ruta pdf
//Route::get('/pdf/{id}', [UserController::class, 'pdf'])-> name('pdf');
Route::get('/user/pdf/{id}', [UserController::class, 'pdf'])->name('user.pdf');


Route::get('/', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'store'])->name('store');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.delete');
