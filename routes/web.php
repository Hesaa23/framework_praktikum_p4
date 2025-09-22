<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->name(name: 'welcome.page');

Route::get('/about', function () {
    return view('about');
})->name(name: 'about.page');

Route::get('/contact', function () {
    return view('contact');
})->name(name: 'contact.page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/rahasia', function () {
    return "Halaman ini rahasia";
})->middleware(['auth', 'RoleCheck:admin']);

Route::get('/product/{number}', [ProductController::class, 'index'])->middleware(['auth', 'RoleCheck:admin,owner']);



require __DIR__ . '/auth.php';
