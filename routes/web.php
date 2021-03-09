<?php

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
})->middleware('birthday');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/newTest', function () {
    return view('new');
});
Route::get('/test', function () {
    return view('carcassTest');
});
Route::get('/test', function () {
    return view('search');
});
Route::get('/materials/{category?}', function ($category = null) {
    return view('materials', ['category' => $category]);
});
// Route::get('/test', function () {
//     return view('auth/reset-password');
// });
// Route::get('/test', function () {
//     return view('auth/verify-email');
// });
