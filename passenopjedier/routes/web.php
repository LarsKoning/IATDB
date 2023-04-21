<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [App\Http\Controllers\MainController::class, 'show'])->name('dashboard');

    Route::get('/location/{address}', [\App\Http\Controllers\LocationController::class, 'showSpecific']);
    Route::get('/searching/{id}', [\App\Http\Controllers\AnimalController::class, 'showSpecific']);

    Route::get('/addAnimal', [\App\Http\Controllers\AddAnimalController::class, 'index'])->name('addAnimal');
    Route::post('store-form', [\App\Http\Controllers\AddAnimalController::class, 'store']);

    Route::get('/addLocation', [\App\Http\Controllers\AddlocationController::class, 'index'])->name('addLocation');
    Route::post('store-forms', [\App\Http\Controllers\AddLocationController::class, 'store']);


    Route::get('/edit/{id}', [\App\Http\Controllers\AnimalController::class, 'edit']);
    Route::put('/edit-form/{id}', [\App\Http\Controllers\AnimalController::class, 'update']);

    Route::view('myAnimals', 'myAnimals')->name('myAnimals');

});

require __DIR__.'/auth.php';
