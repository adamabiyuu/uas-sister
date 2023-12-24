<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmkController;


Route::get('/', [SmkController::class, 'index']);
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
Route::post('/smk/create', [SmkController::class, 'create'])->name('smk.create');

// Form to edit a mahasiswi item
Route::get('/smk/{id}/edit', [SmkController::class, 'edit'])->name('smk.edit');

// Handling the update of a mahasiswi item
Route::put('/smk/{id}', [SmkController::class, 'update']);

// Handling the deletion of a mahasiswi item
Route::delete('/smk/{id}', [SmkController::class, 'delete'])->name('smk.delete');