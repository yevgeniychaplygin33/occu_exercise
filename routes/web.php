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

Route::delete('/delete/all', [CrudStackController::class, 'deleteAll'])->name('form.deleteAll');
Route::delete('/delete/{name}', [CrudStackController::class, 'delete'])->name('form.delete');

Route::put('/update/{name}', [CrudStackController::class, 'update'])->name('form.update');

Route::post('/copy/{name}', [CrudStackController::class, 'copy'])->name('form.copyForm');
Route::post('/save', [CrudStackController::class, 'saveForm'])->name('form.save');
