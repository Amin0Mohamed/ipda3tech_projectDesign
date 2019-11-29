<?php
use Illuminate\Support\Facades\Route;


//Route::auth();
//
//Route::group(['middleware'=>'auth'], function () {


    Route::get('/', 'Ipda3Controller@index');
    Route::get('/article', 'Ipda3Controller@artical');
    Route::get('/project', 'Ipda3Controller@project');
    Route::get('/our_work', 'Ipda3Controller@ourWork');
    Route::get('/product_details/{product_id}', 'Ipda3Controller@product_detail');
    Route::get('/all_information/{post_id}', 'Ipda3Controller@all_info');

    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');






