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



Route::get('/' , 'PagesController@index');
//Route::get('/home', 'PagesController@index')->name('home');

Route::get('/about' , 'PagesController@about');
Route::get('/contact' , 'PagesController@contact');
Route::get('/browse_recipe' , 'PagesController@browse_recipe');
Route::get('/recommended_recipe' , 'PagesController@recommended_recipe');

Auth::routes();


Route::get('/my_recipes' , 'RecipeController@index');
Route::get('/recipe/create' , 'RecipeController@create');
Route::get('/recipe/edit/{id}' , 'RecipeController@edit');
Route::get('/recipe/{id}' , 'RecipeController@show');

Route::get('/my_reviews', 'ReviewsController@index');

