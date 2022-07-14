<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebCTL;
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
Route::get("/abuot",[\App\Http\Controllers\WebCTL::class,"abuotUs"]);
Route::get("/category",[WebCTL::class,"listCTGR"]);
Route::get("/product",[WebCTL::class,"listPD"]);
Route::get("/addcategory",[WebCTL::class,"addCTGR"]);
Route::get("/editcategory",[WebCTL::class,"editCTGR"]);
Route::get("/editproduct",[WebCTL::class,"editPD"]);
