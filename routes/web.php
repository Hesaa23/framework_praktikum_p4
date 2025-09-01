<?php

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
})->name(name:'welcome.page');

Route::get('/about', function(){
    return view('about');
})->name(name:'about.page');

Route::get('/contact', function(){
    return view('contact');
})->name(name:'contact.page');

Route::prefix('manage')->group(function () {
    Route::get('/edit', function() {
        return view('manage.edit');
    });
});