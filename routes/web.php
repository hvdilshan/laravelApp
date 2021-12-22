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
    $data = App\Models\User::all();
    return view('index')->with('users', $data);
});

Route::get('/user', function () {
    return view('user_management');
});

Route::post('/saveUser', [UserController::class, 'AddUser']);

Route::get('/delete/{id}', [UserController::class, 'DeleteUser']);

Route::get('/update/{id}', [UserController::class, 'GetUserDetails']);

Route::post('/updateUser', [UserController::class, 'UpdateUser']);
