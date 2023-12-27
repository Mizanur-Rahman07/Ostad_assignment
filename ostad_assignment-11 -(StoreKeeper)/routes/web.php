<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/add_product', [ProductController::class, 'addProduct'])->name('add.product');
    Route::post('/new_product', [ProductController::class, 'saveProduct'])->name('new.product');
    Route::get('/manage_product', [ProductController::class, 'manageProduct'])->name('manage.product');
    Route::get('/edit_product/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
    Route::post('/update_product', [ProductController::class, 'updateProduct'])->name('update.product');
    Route::post('/delete_product', [ProductController::class, 'deleteProduct'])->name('delete.product');





    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
