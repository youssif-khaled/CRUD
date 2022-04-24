<?php

use App\Http\Controllers\categoriesController;
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

Route::get('/categories',[categoriesController::class,'paginate','search']);
Route::get('/categories/create',[categoriesController::class,'create']);
Route::get('/categories/{id}',[categoriesController::class,'show']);

Route::post('/categories',[categoriesController::class,'store']);
Route::get('/categories/edit/{id}',[categoriesController::class,'edit']);
Route::PUT('/categories/{id}',[categoriesController::class,'update']);
Route::delete('/categories/delete/{id}',[categoriesController::class,'destroy']);
// Route::get('/search',[categoriesController::class,'search']);
