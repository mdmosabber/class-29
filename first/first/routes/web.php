<?php

Route::get('/',[
    'uses' => 'NewShopController@index',
    'as' => '/'
]);

Route::get('/category-product',[
    'uses' => 'NewShopController@categoryProduct',
    'as'   => 'category-product'
]);

Route::get('/mail',[
    'uses' => 'NewShopController@mailProduct',
    'as'   => 'mail'
]);

Route::get('/category-men',[
   'uses'   =>'NewShopController@categoryMen',
    'as'    =>'category-men'
]);

Route::get('/category/add',[
    'uses'  => "CategoryController@index",
    'as'    =>'add-category'
]);

Route::post('category/save',[
    'uses'  =>'CategoryController@saveCatgoryInfo',
    'as'    =>'new-category'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
