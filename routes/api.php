<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProduitsControlle;

use App\Http\Controllers\CategoriesController;



Route::get('/', function () {
    return view('welcome');
});
Route::post('/users','UserController@store');

Route::POST('/user/login','UserController@login');

Route::get('/produits','ProduitsController@index');
Route::get('/produits/edit/{id}','ProduitsController@edit');

Route::delete('produits/delete/{id}','ProduitsController@destroy');
Route::post('/produits/add','ProduitsController@store');


Route::get('/categories','CategoriesController@index');
Route::patch('/produit/update/{id}','ProduitsController@update');


