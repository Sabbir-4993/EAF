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

Route::get('/', 'FrontPagesController@index')->name('index');
Route::get('/about', 'FrontPagesController@about')->name('about');
Route::get('/contact', 'FrontPagesController@contact')->name('contact');
Route::get('/recipes', 'FrontPagesController@recipes')->name('recipes');
Route::get('/recipes/recipe_details', 'FrontPagesController@recipe_details')->name('recipe_details');
Route::get('/how-to-order', 'FrontPagesController@howtoorder')->name('howtoorder');
Route::get('/partners', 'FrontPagesController@partners')->name('partners');
Route::get('/partner-with-us', 'FrontPagesController@partner_with_us')->name('partner_with_us');
Route::get('/partner-with-us/add_restaurant', 'FrontPagesController@add_restaurant')->name('add_restaurant');
Route::get('/blog', 'FrontPagesController@blog')->name('blog');
Route::get('/blog/details', 'FrontPagesController@blog_details')->name('blog.details');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'as'=>'admin.', 'prefix'=>'admin', 'namespace' => 'Admin', 'middleware' => ['auth','admin'] ],
    function(){
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    });

Route::group([ 'as'=>'admin.', 'prefix'=>'admin', 'middleware' => ['auth','admin'] ],
    function(){
        Route::resource('/blog', 'BlogController');
    });

Route::group([ 'as'=>'user.', 'prefix'=>'user', 'namespace' => 'User', 'middleware' => ['auth','user'] ],
    function(){
        Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
//        Route::get('/', 'DashboardController@index')->name('index');
//        Route::get('/about', 'DashboardController@about')->name('about');
//        Route::get('/contact', 'DashboardController@contact')->name('contact');
//        Route::get('/recipes', 'DashboardController@recipes')->name('recipes');
//        Route::get('/recipes/recipe_details', 'DashboardController@recipe_details')->name('recipe_details');
//        Route::get('/how-to-order', 'DashboardController@howtoorder')->name('howtoorder');
//        Route::get('/partners', 'DashboardController@partners')->name('partners');
    });
