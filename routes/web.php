<?php

use App\Http\Controllers\UserController;
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

// Route::get('/user/{id?}', function ($user_id = null) {
//     return 'Siz kiritgan raqam ' . $user_id;
// })->name('users');

Route::prefix('admin')->group(function () {
    Route::get('/user', function () {
        return 'admin users';
    });
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user /{data}', [UserController::class, 'show']);
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
