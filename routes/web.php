<?php

use App\Http\Controllers\Books;
use App\Http\Controllers\Categories as ControllersCategories;
use App\Http\Controllers\Details;
use App\Models\Categories;
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

Route::get('/',[Books::class,'index']);
Route::get('/categoryList',function(){
    return view('categoryList',[
        'listCategory' => Categories::all()
    ]);
});
Route::get('/contactInfo',function(){
    return view('contactInfo');
});
Route::get('/categoryList/{category_id}',[ControllersCategories::class,'categoryView']);
Route::get('/{id}',[Details::class,'detailsView']);

