<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\inputController;

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
    return view('bootstrap.index');
});
Route::get('user/new', function () {
    return view('bootstrap.input_newuser');
});
Route::post('newuserinput/', function () {
    inputController::newuserinput();
    return redirect("/");
});