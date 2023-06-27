<?php

use App\Http\Controllers\UserController;
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
    try {
        \Illuminate\Support\Facades\DB::connection()->getPdo();
    } catch (Exception $e) {
        abort($e instanceof  PDOException ? 503 : 500);
    }

   return redirect()->route('users.index');
});

Route::resource('users', UserController::class);
