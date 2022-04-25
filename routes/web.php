<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
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
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get("/new", [PetController::class, "new"]);
    Route::post("/store-pet", [PetController::class, "store"]);
    Route::get("/delete/{id}", [PetController::class, "delete"]);
    Route::get("/update/{id}", [PetController::class, "view_update"]);
    Route::post("/update", [PetController::class, "update"]);

});

Route::get("/", [PetController::class, "index"]);
Route::get("/search-pet", [PetController::class, "search"]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
