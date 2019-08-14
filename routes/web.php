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

//前台功能路由
Route::get('/', "IndexCT@index");
Route::get('/news', "MoreCT@index");
Route::get('/login', function () {
  return view('index',["main"=>"login"]);
});


//後台功能路由
Route::get('/admin', "TitleCT@index");
Route::get('/admin/title', "TitleCT@index");
Route::get('/admin/ad', "AdCT@index");
Route::get('/admin/mvim', "MvimCT@index");
Route::get('/admin/image', "ImageCT@index");
Route::get('/admin/total', "TotalCT@index");
Route::get('/admin/bottom', "BottomCT@index");
Route::get('/admin/news', "NewsCT@index");
Route::get('/admin/admin', "AdminCT@index");
Route::get('/admin/menu', "MenuCT@index");



//後台更新圖片的請求路徑

Route::get('/admin/update/title/{id}', "TitleCT@updateImg");
Route::get('/admin/update/mvim/{id}', "MvimCT@updateImg");
Route::get('/admin/update/image/{id}', "ImageCT@updateImg");



//後台新增資料
Route::get('/admin/add/title', "TitleCT@create");
Route::get('/admin/add/ad', "AdCT@create");
Route::get('/admin/add/mvim', "MvimCT@create");
Route::get('/admin/add/image', "ImageCT@create");
Route::get('/admin/add/news', "NewsCT@create");
Route::get('/admin/add/admin', "AdminCT@create");
Route::get('/admin/add/menu', "MenuCT@create");


//api的路由
Route::post('/api/add/title', "TitleCT@store");
Route::post('/api/add/ad', "AdCT@store");
Route::post('/api/add/mvim', "MvimCT@store");
Route::post('/api/add/image', "ImageCT@store");
Route::post('/api/add/news', "NewsCT@store");
Route::post('/api/add/admin', "AdminCT@store");
Route::post('/api/add/menu', "MenuCT@store");


Route::post('/api/update/title/{id}', "TitleCT@storeImg");
Route::post('/api/update/mvim/{id}', "MvimCT@storeImg");
Route::post('/api/update/image/{id}', "ImageCT@storeImg");

Route::post('/api/edit/title', "TitleCT@update");
Route::post('/api/edit/ad', "AdCT@update");
Route::post('/api/edit/mvim', "MvimCT@update");
Route::post('/api/edit/image', "ImageCT@update");
Route::post('/api/edit/total', "TotalCT@update");
Route::post('/api/edit/bottom', "BottomCT@update");
Route::post('/api/edit/news', "NewsCT@update");
Route::post('/api/edit/admin', "AdminCT@update");
Route::post('/api/edit/menu', "MenuCT@update");

