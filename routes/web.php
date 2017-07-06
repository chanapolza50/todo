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

Route::get('cal-{num1}-{num2}', 'HomeControll@cal');

Route::get('user', 'UserControll@index');

route::get('user/show/{id}','UserControll@show');
route::auth();//

route::get('/home','HomeControll@home');







//Route::get('user', function () {
//    dd(\App\User::all());
//});

//Route::get('/a', function () {
//    $arr=[1,2,3,];
//    dd($arr);
//
//});

RecorderTest:



//Route::get('cal-{num1}-{num2}', function ($num1,$num2) {
//    return $num1+$num2;
//});



//Route::get('about', function () {
//    return "Hello Form About page!";
//});
//Route::post('contact', function () {
//    return "Hello Form Contact page!";
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
