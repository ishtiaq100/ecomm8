<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
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
    return "Home page";
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/logout',function(){
    //Session::forget('yourKeyGoesHere')
   
    Session()->forget('user');
    if(session()->has('user')){
    echo "have";
    }else{
        return redirect('/login');
    }
   
});
//Route::get('users/{id}',['App\Http\Controllers\UserController','show']);

//Route::view('/login','login');
//Route::get('demo',['App\Http\Controllers\ProductController','demo']);
Route::post('login',[UserController::class,'login']);
Route::get('product',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::post('search',[ProductController::class,'search']);
Route::post('add-to-cart',[ProductController::class,'addtocart']);
Route::get('cartlist',[ProductController::class,'cartlist']);
Route::get('deletecartitem/{id}',[ProductController::class,'deletecartitem']);