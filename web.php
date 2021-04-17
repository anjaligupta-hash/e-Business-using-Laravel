<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Productcontroller;




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
//working with blade templates
Route::get ('blade', function()
    {
        return view('test3', ['name'=>'anjali']);

});
Route::get('loops',[LoopsController::class,'index']);
Route::get('switchController',[LoopsController::class,'index']);

/*Route::get('homepage',function(){
    return view('home');
});
Route::get('aboutpage',function(){
    return view('about');
});
Route::get('productpage',function(){
    return view('product');
});*/
/*Route::get('homepage',[MenuController::class,'home']);
Route::get('aboutpage',[MenuController::class,'about']);
Route::get('productpage',[MenuController::class,'product']);


//session using form
Route::view('login','login');
Route::post('login',[loginController::class,'storesession']);
/*Route::get('profile',function()
{
    if(Isession()->has('data')
    {

    }
    return view('profile');


    
    
});


);
Route::get('logout',function(){
    session()->forget('data');
    return redirect('login');
});
//form validation*/

//upload file
//Route::get('user/{id}')

//project-----
Route::get('/login',function(){
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);