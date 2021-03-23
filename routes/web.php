<?php

use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;

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
Route::get('/material/{category?}', function ($category = null) {
    return view('materials', ['category' => $category]);
});

// Route::get('/test', function () {
//     return view('auth/reset-password');
// });
// Route::get('/test', function () {
//     return view('auth/verify-email');
// });
Route::get('/users', [UserController::class, 'userNames']);
Route::get('/insertTest', [MaterialController::class, 'insertMaterial']);

Route::post('/tryToInsert', [MaterialController::class, 'insertMaterial']);

Route::get('/all_materials', [MaterialController::class, 'selectTypeAndCategory']);
