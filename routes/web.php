<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ProductController;

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
    return view('index', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/Cheese', function () {
    return view('Cheese' , [
        "title" => "Cheese"
    ]);
});
Route::get('/Caramel', function () {
    return view('Caramel', [
        "title" => "Caramel"
    ]);
});
Route::get('/Mix', function () {
    return view('Mix', [
        "title" => "Mix"
    ]);
});
Route::get('/c', function () {
    return view('admin.dashboard', [
        "title" => "dashboard"
    ]);
});
// Route::get('/contact', function () {
//     return view('contact', [
//         "title" => "contact"
//     ]);
// });


// Route::get('/reg', function () {
//     return view('trial/regist', [
//         "title" => "Register"
//     ]);
// });
// Route::get('/login', function () {
//     return view('trial/login', [
//         "title" => "Login"
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);



















Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('', function () {
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    });
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('insertproduct', [ProductController::class, 'insertproduct'])->name('insertproduct');
        Route::get('{product_id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::get('{product_id}/variation',[ProductController::class, 'variation'])->name('variation');
        Route::get('{product_id}/createvariation', [ProductController::class, 'createvariation'])->name('createvariation');
        Route::post('{product_id}/insertvariation', [ProductController::class, 'insertvariation'])->name('insertvariation');
        Route::get('{product_id}/editvariation', [ProductController::class, 'editvariation'])->name('editvariation');
        // Route::get('{product_id}/variation/createvariation',[ProductController::class, 'createvariation'])->name('createvariation');
        Route::get('{product_id}/delete',[ProductController::class, 'delete'])->name('delete');
    });
});
