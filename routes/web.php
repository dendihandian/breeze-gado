<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('products')->name('products.')->middleware(['auth'])->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::get('/factory/{count}', [ProductController::class, 'factory'])->name('factory');

    Route::prefix('{product}')->group(function () {
        Route::get('/', [ProductController::class, 'show'])->name('show');
        Route::patch('/', [ProductController::class, 'update'])->name('update');
        Route::delete('/', [ProductController::class, 'delete'])->name('delete');
        Route::get('/edit', [ProductController::class, 'edit'])->name('edit');
    });
});

require __DIR__ . '/auth.php';
