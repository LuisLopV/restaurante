<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware('web')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
        Route::post('/register', [AuthController::class, 'register'])->name('register');
        Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
        Route::post('/', [AuthController::class, 'login'])->name('login');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('auth')->name('dashboard');



});
Route::get('/categories/create', function () {
    return view('categories.create');
})->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/dishes/create', function () {
    return view('dishes.create');
})->name('dishes.create');
Route::post('/dishes', [DishController::class, 'store'])->name('dishes.store');
Route::get('/dishes', [DishController::class, 'index'])->name('dishes.index');