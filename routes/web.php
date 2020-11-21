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
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/test','TestController@test');
Route::group(['namespace'=>'Auth'],function(){
    Route::get('dang-ky','RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky','RegisterController@postRegister')->name('post.register');
    Route::get('dang-nhap','LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','LoginController@postLogin')->name('post.login');
    Route::get('dang-xuat','LoginController@getLogout')->name('get.logout');
    Route::get('lay-lai-mat-khau','ForgotPasswordController@getFormResetPassword')->name('get.form.reset.password');
    Route::post('lay-lai-mat-khau','ForgotPasswordController@senCodeResetPassword');
    Route::get('password/reset','ForgotPasswordController@resetPassword')->name('get.link.reset.password');
    Route::post('password/reset','ForgotPasswordController@saveResetPassword');
});
Route::get('/','HomeController@index')->name('home');
Route::get('danh-muc/{slug}-{id}','CategoryController@getListProduct')->name('get.list.product');
Route::get('san-pham/{slug}-{id}','ProductDetailController@productDetail')->name('get.detail.product');
Route::group(['prefix'=>'cart','middleware'=>'CheckLoginUser'],function(){
    Route::get('thanh-toan','ShoppingCartController@getFormPay')->name('get.form.pay');
    Route::post('thanh-toan','ShoppingCartController@saveInfoShoppingCart');
    Route::get('historycustomer','HistoryCustomerController@index')->name('get.history.customer');
    Route::get('historycustomer/{id}','HistoryCustomerController@viewOrder')->name('history.get.view.order');
    Route::get('deletetransaction/{id}','HistoryCustomerController@deleteTransaction')->name('history.delete.transaction');
    Route::get('revecieproduct/{id}','HistoryCustomerController@revecieProduct')->name('history.revecie.product');
    Route::get('favorite-product/{id}','HistoryCustomerController@favoriteProduct')->name('get.favorite.product');
    Route::get('/list/favorite-product','HistoryCustomerController@listFavoriteProduct')->name('get.list.favorite.product');
    Route::get('/list/favorite-product/delete/{id}','HistoryCustomerController@deleteFavoriteProduct')->name('get.delete.favorite.product');
});
Route::prefix('shopping')->group(function () {
    Route::get('/add/{id}','ShoppingCartController@addProduct')->name('add.shopping.cart');
    Route::get('/danh-sach','ShoppingCartController@getListShoppingCart')->name('get.list.shopping.cart');
    Route::get('/delete/{key}','ShoppingCartController@deleteProductItem')->name('get.delete.shopping.cart');
    Route::post('/update','ShoppingCartController@editProductItem')->name('get.edit.shopping.cart');
});
Route::group(['prefix'=>'ajax','middleware'=>'CheckLoginUser'],function(){
    Route::post('danh-gia/{id}','RatingController@saveRating')->name('post.rating.product');
});
Route::prefix('article')->group(function () {
    Route::get('/danhsach','ArticleController@getListArticle')->name('get.list.article');
    Route::get('/{slug}/{id}','ArticleController@getDetailArticle')->name('get.detail.article');

});
Route::get('searh','ProductDetailController@searh')->name('get.product.searh');
Route::get('contact','HomeController@contact')->name('get.contact');
Route::get('/.env','HomeController@index');
Route::get('/manytomany','TestController@testmany');