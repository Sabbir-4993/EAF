<?php

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

Route::get('/', function () { return view('frontend.pages.index'); });
Route::get('/recipes', function () { return view('frontend.pages.recipes'); });
Route::get('/recipes/recipe_details', function () { return view('frontend.pages.recipe_details'); });
Route::get('/how-to-order', function () { return view('frontend.pages.howtoorder'); });
Route::get('/partners', function () { return view('frontend.pages.partners'); });
Route::get('/about', function () { return view('frontend.pages.about'); });
Route::get('/contact', function () { return view('frontend.pages.contact'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
