<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\CategoryController;

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

Route::get('/axixa', function(){
    return view("my");
});

// Route::get('/cats', [Category::class,'index']); 
Route::get('/cata', function(){
    $obj = new Category;
    return $obj->index();
});



// Route::get('/cats', [CategoryController::class,'index']);
Route::get('/category',[CategoryController::class,'index']);
Route::get('/category/create',[CategoryController::class,'create']);
Route::get('/category/{id}/edit',[CategoryController::class,'edit']);
Route::post('/category/',[CategoryController::class,'store']);
Route::put('/category/{id}',[CategoryController::class,'update']);
Route::delete('/category/{id}',[CategoryController::class,'destroy']);
Route::get('/category/{id}',[CategoryController::class,'show']);



Route::resource('/cats',CategoryController::class);