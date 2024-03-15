<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CheckoutController;

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

Route::get('/', function () {return view('Frontend.home');});
Route::get('/products', [FrontendProductController::class, 'product_list']);
Route::get('/products/{product_id}', [FrontendProductController::class, 'product_details']);
Route::post('/product/add_cart', [CartController::class, 'add_cart']);
Route::get('/{user}/cart', [CartController::class, 'show_cart']);
Route::post('/{user}/cart/remove/{id}', [CartController::class, 'remove_product']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard/products', [ProductController::class, 'products_all'])->name('product.all');
    Route::any('/dashboard/product/add', [ProductController::class, 'product_add'])->name('product.add');
    Route::post('/dashboard/add', [ProductController::class, 'new_product'])->name('product.new');
    Route::get('/dashboard/product/delete/{id}', [ProductController::class, 'product_delete'])->name('product.delete');
    Route::get('/dashboard/product/edit/{id}', [ProductController::class, 'product_edit'])->name('product.edit');
    Route::post('/dashboard/product/update/{id}', [ProductController::class, 'update'])->name('user.update');
    Route::any('/product/{product_id}/comment', [CommentController::class, 'store']);
    Route::get('/{user}/checkout', [CheckoutController::class, 'show']);
});

require __DIR__.'/auth.php';

Auth::routes();
