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
});

Route::get('/', function () 
{
    return view('form');
});

Route::get('users',[users::class,'add']);

Route::get('detail',[users::class,'detail']);

Route::get('delete/{id}', [UsersController::class, 'delete']);

Route::get('edit/{id}', [UsersController::class, 'edit']);

