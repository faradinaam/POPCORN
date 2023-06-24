<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');