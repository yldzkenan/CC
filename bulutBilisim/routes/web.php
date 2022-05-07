<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\GranteeController;




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

Route::get('/login', function () {
    return view('login');
});


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');
Route::post("/register",[UserController::class,'register']);

Route::post("/login",[UserController::class,'login']);





Route::get('/granteelog', function () {
    return view('granteelog');
});

Route::get('/granteelogout', function () {
    Session::forget('grantee');
    return redirect('granteelog');
});
Route::post("/granteelog",[GranteeController::class,'login']);

Route::get('/grantee', function () {
    return view('grantee');
});

Route::get('/granteelogout', function () {
    Session::forget('grantee');
    return redirect('granteelog');
});



//
Route::get("/grantee/ekle/{id}",[GranteeController::class,'help_talep']);
Route::post("/grantee/ekle/{id}",[GranteeController::class,'help_talep_post']);
Route::get("myhelps",[GranteeController::class,'myHelps']);
Route::get("grantee2",[GranteeController::class,'talepSayfasi']);


//--------?
Route::get('/kullanicisayfasi', function () {
    return view('profileuser');
});

Route::post("/kullanicisayfasi/duzenle/{id}",[DonateController::class,'KullaniciDuzenle_post']);

Route::get('/kullanicisayfasi2', function () {
    return view('profilegrantee');
});

Route::post("/kullanicisayfasi/duzenle/{id}",[DonateController::class,'KullaniciDuzenle_post2']);

//
//Route::get("/grantee",[AdminController::class,'donates']);

Route::view('/granteelogreg','granteelogreg');
Route::post("/granteelogreg",[GranteeController::class,'register']);


Route::get("/",[DonateController::class,'index']);
Route::get("/detail/{id}",[DonateController::class,'detail']);

Route::post("add_to_cart",[DonateController::class,'addToCart']);

Route::get("cartlist",[DonateController::class,'cartList']);
Route::get("removecart/{id}",[DonateController::class,'removeCart']);
Route::get("ordernow",[DonateController::class,'orderNow']);
Route::post("orderplace",[DonateController::class,'orderPlace']);
Route::get("myorders",[DonateController::class,'myOrders']);



