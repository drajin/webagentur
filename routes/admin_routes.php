<?php

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'
], function(){

    Route::get('/',function(){
       return view('admin.dashboard');
    });

    Route::resource('posts','AdminPostsController');
    Route::resource('tags','AdminTagsController', ['except' => ['create']]);

});
