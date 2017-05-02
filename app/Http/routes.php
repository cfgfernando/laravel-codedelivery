<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth.checkrole', 'as'=>'admin.'], function (){

    Route::get('categories', ['as'=>'categories.index', 'uses'=>'CategoriesController@index']);
    Route::get('categories/create', ['as'=>'categories.create', 'uses'=>'CategoriesController@create']);
    Route::get('categories/edit/{id}', ['as'=>'categories.edit', 'uses'=>'CategoriesController@edit']);
    Route::post('categories/update/{id}', ['as'=>'categories.update', 'uses'=>'CategoriesController@update']);
    Route::get('categories/delete/{id}', ['as'=>'categories.delete', 'uses'=>'CategoriesController@delete']);
    Route::post('categories/store', ['as'=>'categories.store', 'uses'=>'CategoriesController@store']);
    Route::get('categories/destroy/{id}', ['as'=>'categories.destroy', 'uses'=>'CategoriesController@destroy']);


    Route::get('products', ['as'=>'products.index', 'uses'=>'ProductsController@index']);
    Route::get('products/create', ['as'=>'products.create', 'uses'=>'ProductsController@create']);
    Route::get('products/edit/{id}', ['as'=>'products.edit', 'uses'=>'ProductsController@edit']);
    Route::post('products/update/{id}', ['as'=>'products.update', 'uses'=>'ProductsController@update']);
    Route::get('products/delete/{id}', ['as'=>'products.delete', 'uses'=>'ProductsController@delete']);
    Route::post('products/store', ['as'=>'products.store', 'uses'=>'ProductsController@store']);
    Route::get('products/destroy/{id}', ['as'=>'products.destroy', 'uses'=>'ProductsController@destroy']);

});




/* TESTE DE COMMIT */