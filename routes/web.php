<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\staffcontroller;
use App\Http\Controllers\inventarycontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[logincontroller::class,'index']);


// route::get('/',[logincontroller::class,'register']);
// route::post('user_register',[logincontroller::class,'save']);
route::get('user',[logincontroller::class,'user']);
route::post('login', [LoginController::class, 'login']);
route::get('email',[logincontroller::class,'email']);
route::post('email_verify',[logincontroller::class,'email_verify']);
route::get('otp',[logincontroller::class,'Otp']);
route::post('otp_verify',[logincontroller::class,'verify']);
route::post('change',[logincontroller::class,'change']);

    //  <..............ADMIN....................>  //
route::get('admin',[admincontroller::class,'index']);
route::get('employee',[admincontroller::class,'employee']);
route::post('addemployee',[admincontroller::class,'addemployee']);
route::get('menu',[admincontroller::class,'menu']);
route::post('addmenu',[admincontroller::class,'addmenu']);
route::get('category',[admincontroller::class,'category']);
route::post('addcategory',[admincontroller::class,'addcategory']);
route::get('image',[admincontroller::class,'image']);

//  <..............STAFF....................>  //
route::get('order',[staffcontroller::class,'order']);
route::get('dinein',[staffcontroller::class,'Dinein']);
route::post('dinein_order',[staffcontroller::class,'dinein_orders']);
Route::group(['middleware' => ['web']], function () {
    route::post('/Store',[staffcontroller::class,'Store']);
});

route::post('/Store',[staffcontroller::class,'Store']);
route::get('/menu/{menu_id}', [staffcontroller::class, 'filter'])->name('menu.show');
route::get('/menuitem/{product_name}', [staffcontroller::class, 'payment'])->name('menuitem');


//  <..............   Inventary Management     ....................>  //
    route::get('addinventry',[inventarycontroller::class,'addproduct']);
    route::post('products',[inventarycontroller::class,'products']);
    route::get('view',[inventarycontroller::class,'view_products']);
    route::get('update',[inventarycontroller::class,'update']);
    route::get('edit_details/{id}',[inventarycontroller::class,'edit']);
    route::post('updateproducts',[inventarycontroller::class,'updateproduct']);
    route::get('delete/{id}',[inventarycontroller::class,'delete']);
