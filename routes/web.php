<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MountainController;

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

// The main routes CRUD
Route::get('/mountains', [MountainController::class, 'index']);

// Create form and store
Route::get('/mountains/create', [MountainController::class, 'create']);
Route::post('/mountains', [MountainController::class, 'store']);

// Edit form and update
Route::get('/mountains/{id}/edit', [MountainController::class, 'edit']);
Route::put('/mountains/{id}', [MountainController::class, 'update']);

Route::get('/mountains/{id}', [MountainController::class, 'show']);

Route::delete('/mountains/{id}', [MountainController::class, 'destroy']);

// Other routes

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
