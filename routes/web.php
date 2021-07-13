<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

    Route::get('/home',[ProductController::class,'index']);
    Route::get('/login', function () {
        return view('customer/login');
    });
    
    Route::get('/logout', function () {
        Session::forget('user');
        return redirect('/home');
    });
    Route::get('ordernow',[ProductController::class,'orderNow']);
    
    Route::group(['middleware'=>['protectedPage']],function(){
        Route::get('/vitambaa',[ProductController::class,'vitambaa']);
        Route::view('/kitambaa', 'customer/kitambaa');
        Route::view('/test', 'customer/test');
        Route::view('/contact', 'customer/contact');
        Route::view('/blog', 'customer/blog');
        Route::view('/single', 'customer/blog-single');

        Route::view('/select', 'customer/select');
        Route::get('detail/{id}',[ProductController::class,'detail']);
        Route::get('removecart/{id}',[ProductController::class,'removeCart']);
        Route::post('/feedback',[ProductController::class,'feedback']);
    Route::post('orderplace',[ProductController::class,'orderPlace']);
    Route::get('myorders',[ProductController::class,'myOrders']);
    Route::get('/blog',[ProductController::class,'post']);
    Route::post('addToCart',[ProductController::class,'addToCart']);
    Route::get('cartlist',[ProductController::class,'cartList']);
    
    // rutes for product sample type
    Route::get('/skirt',[ProductController::class,'skirt']);
    Route::get('/s_shirt',[ProductController::class,'s_shirt']);
    Route::get('/l_shirt',[ProductController::class,'l_shirt']);
    Route::get('/m_trouse',[ProductController::class,'m_trouse']);
    Route::get('/w_trouse',[ProductController::class,'w_trouse']);
    Route::get('/short',[ProductController::class,'short']);
    //route for product design type 
    Route::get('/skirt2',[ProductController::class,'skirt2']);
    Route::get('/s_shirt2',[ProductController::class,'s_shirt2']);
    Route::get('/l_shirt2',[ProductController::class,'l_shirt2']);
    Route::get('/m_trouse2',[ProductController::class,'m_trouse2']);
    Route::get('/w_trouse2',[ProductController::class,'w_trouse2']);
    Route::get('/short2',[ProductController::class,'short2']);

    });
    Route::get('/test',[ProductController::class,'post']);
    Route::get('/men',[ProductController::class,'men']);
    Route::get('/women',[ProductController::class,'women']);

    Route::view('/register', 'customer/register');
    Route::view('/staff', 'staff/staff_Register');   
    Route::get('search',[ProductController::class,'search']);    
    Route::post('/register',[UserController::class,'register']);
    Route::post('/login',[UserController::class,'login']);
    //Route::post('/register',[StaffController::class,'register']);
    //Route::post('/login',[StaffController::class,'login']);
    
    
  