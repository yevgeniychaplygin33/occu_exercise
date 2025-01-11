<?php

use App\Http\Controllers\CrudStackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusValuesController;

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

Route::get('/', [StatusValuesController::class, 'getStatusValues']);
Route::get('/index', [CrudStackController::class, 'index'])->name('form.show');;
Route::post('/save', [CrudStackController::class, 'saveForm'])->name('form.save');

Route::post('/search', [CrudStackController::class, 'search'])->name('form.search');

Route::delete('/delete/all', [CrudStackController::class, 'deleteAll'])->name('form.deleteAll');
Route::delete('/delete/{name}', [CrudStackController::class, 'delete'])->name('form.delete');

// update
Route::put('/update/{name}', [CrudStackController::class, 'update'])->name('form.update');

// copy


