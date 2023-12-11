<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PetController;
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

Route::get('/dashboard', function () {
    return view('main.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/status', function () {
    return view('main.status');
})->middleware(['auth', 'verified'])->name('status');

Route::get('/settings', function () {
    return view('main.settings');
})->middleware(['auth', 'verified'])->name('settings');

Route::get('/user', function () {
    return view('main.user');
})->middleware(['auth', 'verified'])->name('user');

Route::get('/petreg', function () {
    return view('main.partials.petreg');
})->name('petreg');

Route::get('/getDetails/{pid}', function () {
    return view('main.partials.details.details');
})->name('details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PetController::class)->group(function() {
    // petstatus
    Route::get('/data', 'dbdata'); //send status of the pet data to database
    Route::get('/getSliderValue', 'getSliderValue');
    Route::post('/addpet', 'add'); //send pet data to database
    Route::get('/getDetails/{pid}', 'getDetails');
    });
    



require __DIR__.'/auth.php';
