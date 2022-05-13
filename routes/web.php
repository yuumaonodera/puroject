<?php

use Illuminate\Support\Facades\Route;
use app\http\controllers\testcontroller;
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
route::get('/',[testcontroller::class,'index']);
route::get('/',[testcontroller::class,'post']);
route::get('/verror',[testcontroller::class, 'verror']);
Route::get('/', function () {
    return view('welcome');
});
