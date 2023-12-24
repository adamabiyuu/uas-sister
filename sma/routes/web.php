<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmaController;


Route::get('/', [SmaController::class, 'index']);
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Handling the creation of a new mahasiswi item
Route::post('/sma/create', [SmaController::class, 'create'])->name('sma.create');

// Form to edit a mahasiswi item
Route::get('/sma/{id}/edit', [SmaController::class, 'edit'])->name('sma.edit');

// Handling the update of a mahasiswi item
Route::put('/sma/{id}', [SmaController::class, 'update']);

// Handling the deletion of a mahasiswi item
Route::delete('/sma/{id}', [SmaController::class, 'delete'])->name('sma.delete');