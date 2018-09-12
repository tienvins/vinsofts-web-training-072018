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

Route::get('/', function () {
    return view('welcome');
});
Route::get('trong', function(){
	return 'echo "hello trong"';
});
Route::get('tronga', function(){
	return 'alo alo';
});
Route::get('demo_route',function(){
	return view('demo');
});
Route::post('submit',function(){

});	
//truyền trên vào bằng get
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
// tên bằng rỗng
Route::get('users/{name?}', function ($name = null) {
    return $name;
});
//tên mặc định bằng john 
Route::get('userd/{name?}', function ($name = 'John') {
    return $name;
});
Route::get('userss/abc','ShowProfile@abc');
Route::get('userss/{id}', 'ShowProfile');
// Route::get('profile', 'UserController@show')->middleware('auth');
Route::get('controller/{stn}/{sth}','MyController@getController');
Route::get('thamso/{ten}','MyController@tesst');
// request
Route::get('myrequest','MyController@getURL');

//NHan du lieuj controller
Route::get('getForm',function(){
	return view('postForm');
});
Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
//blade
Route::get('blade',function(){
	return view('ad');
});