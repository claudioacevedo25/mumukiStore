<?php

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

use App\Http\Controllers\ProductController;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/faq', function(){
    return view('faq');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/account', function(){
    return view('account');
});
Route::post("/account/edit/{id}",'userController@editUser');

Route::get('/cart', function(){
    return view('cart');
});





Route::get('/product','ProductController@index')->name('product.index');;

Route::post('/product','ProductController@create')->name('product.create');
Route::get('/product/list','ProductController@listaProducto');
Route::get('/search','ProductController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

Route::get('edit/{id}','ProductController@edit');
Route::post('delete/{id}','ProductController@delete');
Route::post('edit/{id}','ProductController@editPost');


// Route::post('account/edit/{id}','Auth\RegisterController@editAccount')->name('active.user');
// Route::get('account/edit/{id}', 'Auth\RegisterController@editAccount')->name('active.user-get');
