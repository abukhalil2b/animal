<?php

use App\Http\Controllers\Admin\AnimalController as AdminAnimalController;
use App\Http\Controllers\Normal\AnimalController as NormalAnimalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $animals = \App\Models\Animal::all();

    return view('dashboard', compact('animals'));
})->middleware(['auth'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| admin
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth', 'prefix' => 'admin/user'], function () {

    Route::get('index', [ProfileController::class, 'index'])
        ->name('admin.user.index');

});


/*
|--------------------------------------------------------------------------
| admin
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth', 'prefix' => 'admin/animal'], function () {

    Route::get('show/{animal}', [AdminAnimalController::class, 'show'])
        ->name('admin.animal.show');

    Route::post('store', [AdminAnimalController::class, 'store'])
        ->name('admin.animal.store');

    Route::post('delete/{animal}', [AdminAnimalController::class, 'delete'])
        ->name('admin.animal.delete');

    Route::post('update/{animal}', [AdminAnimalController::class, 'update'])
        ->name('admin.animal.update');
});

/*
|--------------------------------------------------------------------------
| normal
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth', 'prefix' => 'normal/animal'], function () {

    Route::get('show/{animal}', [NormalAnimalController::class, 'show'])
        ->name('normal.animal.show');

    Route::post('store', [NormalAnimalController::class, 'store'])
        ->name('normal.animal.store');
});

require __DIR__ . '/auth.php';
