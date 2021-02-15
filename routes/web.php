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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'cart',
    'as' => 'cart.',
    'middleware' => 'auth',
], function() {
    Route::get('/', 'CartController@index')->name('index');
    Route::get('/add/{id}', 'CartController@add')->name('add');
    Route::get('/remove/{id}', 'CartController@remove')->name('remove');
    Route::get('/clear', 'CartController@clear')->name('clear');
    Route::get('/confirm', 'CartController@confirm')->name('confirm');
    Route::post('/updates', 'CartController@updates')->name('updates');
});


Route::group([
    'prefix' => 'admin/item', // http://xxxx/admin/item の admin/item を共通
    'namespace' => 'Admin', // Admin\ItemController の Admin\ を共通化
    'as' => 'admin.item.',
], function () {
    Route::get('/', 'ItemController@index')->name('index');
    Route::get('create/', 'ItemController@create')->name('create');
    Route::post('add/' , 'itemController@add')->name('add');
    Route::get('edit/{id}', 'ItemController@edit')->name('edit');
    Route::post('update/{id}', 'ItemController@edit')->name('update');
});
