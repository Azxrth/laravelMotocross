<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;

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


Route::get(
    '/training', [TrainingController::class, 'index'] 
)->name('training.index');

Route::get(
    '/create', [TrainingController::class, 'create'] 
)->name('training.create');

Route::post(
    '/create', [TrainingController::class, 'store'] 
)->name('training.store');

Route::get(
    '/update/{id}', [TrainingController::class, 'update'] 
)->name('training.update');