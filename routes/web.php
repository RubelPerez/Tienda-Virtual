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

Route::middleware(['auth', 'admin'])->group(function () {
   //Mostrar
Route::get('/admin/products', 'ProductController@index');
//insertar
Route::get('/admin/products/create', 'ProductController@create');
Route::post('/admin/products','ProductController@store');
//editar
Route::get('/admin/products/{id}/edit', 'ProductController@edit');
Route::post('/admin/products/{id}/edit','ProductController@update');
//delete
Route::get('/admin/products/{id}/ver','ProductController@ver');
Route::delete('/admin/products/{id}','ProductController@destroy');
//details
Route::get('/admin/products/{id}/details', 'ProductController@details');

});
Route::get('/','WelcomeController@welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//crud product





