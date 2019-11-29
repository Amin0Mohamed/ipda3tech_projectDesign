<?php


    Route::group(['prefix' => LaravelLocalization::setLocale()], function()
    {
        Route::prefix('dashboard')->name('dashboard.')->group(function(){
           Route::group(['middleware'=>'auth'], function () {

               Route::get('/index', 'DashboardController@index')->name('index');

               Route::resource('users', 'UserController');
               Route::resource('pages', 'PagesController');
               Route::resource('clients', 'ClientController');
               Route::resource('photos', 'PhotosController');
               Route::resource('posts', 'PostsController');
               Route::resource('projects', 'ProjectsController');
               Route::resource('services', 'ServicesController');
               Route::resource('settings', 'SettingsController');
           });

        });//end the dashboard
    });






