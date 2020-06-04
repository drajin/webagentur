<?php

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'
], function(){

    Route::get('/', 'AdminPostsController@dashboard')->name('dashboard');
    //Comments
    Route::get('comments/{comment}/edit', 'AdminCommentsController@edit')->name('comments.edit');
    Route::put('comments/{comment}/edit', 'AdminCommentsController@update')->name('comments.update');
    Route::get('comments/{comment}/delete','AdminCommentsController@delete')->name('comments.delete');
    Route::delete('comments/{comment}/delete','AdminCommentsController@destroy');

    //Posts
    Route::resource('posts','AdminPostsController');
    //Tags
    Route::resource('tags','AdminTagsController', ['except' => ['create']]);

});
