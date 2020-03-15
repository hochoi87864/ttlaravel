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

use Modules\Admin\Http\Controllers\AdminCategoryController;
Route::get('admin/login','AdminController@getLogin');
Route::post('admin/login','AdminController@postLogin')->name("admin.login");
Route::get('admin/logout','AdminController@getLogout')->name('admin.logout');
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function() {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/page','AdminController@page');
    Route::group(['prefix'=>'category'],function(){
        Route::get('/','AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create','AdminCategoryController@store');
        Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{id}','AdminCategoryController@update');
        Route::get('/{action}/{id}','AdminCategoryController@action')->name('admin.get.acion.category');
    });
    Route::group(['prefix'=>'product'],function(){
        Route::get('/','AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create','AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create','AdminProductController@store');
        Route::get('/update/{id}','AdminProductController@edit')->name('admin.get.edit.product');
        Route::post('/update/{id}','AdminProductController@update');
        Route::get('/{action}/{id}','AdminProductController@action')->name('admin.get.acion.product');
    });
    Route::group(['prefix'=>'article'],function(){
        Route::get('/','AdminArticleController@index')->name('admin.get.list.article');
        Route::get('/create','AdminArticleController@create')->name('admin.get.create.article');
        Route::post('/create','AdminArticleController@store');
        Route::get('/update/{id}','AdminArticleController@edit')->name('admin.get.edit.article');
        Route::post('/update/{id}','AdminArticleController@update');
        Route::get('/{action}/{id}','AdminArticleController@action')->name('admin.get.acion.article');
    });
    Route::group(['prefix'=>'transaction'],function(){
        Route::get('/','AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/view/{id}','AdminTransactionController@viewOrder')->name('admin.get.view.order');
        Route::get('/handle/{id}','AdminTransactionController@HandleTransaction')->name('admin.handle.transaction');
        Route::get('/{action}/{id}','AdminTransactionController@action')->name('admin.get.acion.transaction');

    });
    Route::group(['prefix'=>'rate'],function(){
        Route::get('/','AdminRatingController@index')->name('admin.get.list.rating');
        Route::get('/{action}/{id}','AdminRatingController@action')->name('admin.get.acion.rating');
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('/','AdminUserController@index')->name('admin.get.list.user');
        Route::get('/create','AdminUserController@create')->name('admin.get.create.user');
        Route::post('/create','AdminUserController@store');
        Route::get('/update/{id}','AdminUserController@edit')->name('admin.get.edit.user');
        Route::post('/update/{id}','AdminUserController@update');
        Route::get('/{action}/{id}','AdminUserController@action')->name('admin.get.acion.user');
    });
    Route::group(['prefix'=>'slide'],function(){
        Route::get('/','AdminSlideController@index')->name('admin.get.list.slide');
        Route::get('/create','AdminSlideController@create')->name('admin.get.create.slide');
        Route::post('/create','AdminSlideController@store');
        Route::get('/update/{id}','AdminSlideController@edit')->name('admin.get.edit.slide');
        Route::post('/update/{id}','AdminSlideController@update');
        Route::get('/{action}/{id}','AdminSlideController@action')->name('admin.get.acion.slide');
    });
    Route::group(['prefix'=>'statistical'],function(){
        Route::get('/','AdminStatisticalController@index')->name('admin.get.statistical');
        Route::get('/list','AdminStatisticalController@getStatistical')->name('admin.get.list.statistical');
    });
});
