<?php

/*---------------------------frontendone start-----------------------*/

Route::get('/', 'frontend\PageController@index');
Route::get('/about', 'frontend\PageController@about');
Route::get('/contact', 'frontend\PageController@contact');

Route::get('/threeblog', 'HomeController@blog');

Route::get('/blog/{id}/show', 'HomeController@showBlog');


Route::get('/blog', 'frontend\PageController@blog');
Route::get('/book', 'frontend\PageController@book');


Route::get('/project', 'HomeController@project');

Route::get('/project/{id}/show', 'HomeController@showProject');


Route::get('/why', 'frontend\PageController@why');;


Route::get('/career', 'HomeController@career');

Route::get('/career/{id}/show', 'HomeController@showCareer');

Route::get('/career/apply', function () {
    return view('frontend.career.apply');
});


Route::get('/price', function () {
    return view('frontend.price');
});
Route::get('/pricedetail', function () {
    return view('frontend.pricedetail');
});
/*  Service*/

Route::get('/safety', 'frontend\PageController@safety');
Route::get('/inno', 'frontend\PageController@inno');
Route::get('/pro', 'frontend\PageController@pro');
Route::get('/design', 'frontend\PageController@design');
Route::get('/support', 'frontend\PageController@support');
Route::get('/fast', 'frontend\PageController@fast');
/*end Service*/


/*----------Auth Start----------*/

Auth::routes();

Route::post('/users/register', 'Auth\RegisterController@register');


Route::get('users/logout', 'Auth\LoginController@logout');

Route::post('/users/login', 'Auth\LoginController@login');

/*----------Auth End-------------*/

/*----------------Contact and Service and Career Form Start------------------*/

Route::post('contact', 'backend\ContactMessageController@store');
Route::post('book', 'backend\ServiceMessageController@store');
Route::post('career/apply', 'backend\CareerMessageController@store');

/*----------------Contact and Service Form Start------------------*/


/*---------------------------frontendone end-----------------------*/


/*---------------------------backend start-----------------------*/

Route::group(array('middleware' => 'auth'), function () {
    Route::post('/comment/create', 'CommentController@store');

    Route::post('backend/comment/create', 'CommentController@adminstore');


    Route::get('admin/comment/{id}/delete', 'CommentController@destroy');
});

Route::group(array('prefix' => 'admin', 'namespace' => 'backend', 'middleware' => 'manager'), function () {
    Route::get('/', 'HomeController@index');

    Route::get('/project', 'ProjectController@index');
    Route::get('/completedproject', 'ProjectController@completeIndex');
    Route::get('/currentproject', 'ProjectController@currentIndex');
    Route::get('/futureproject', 'ProjectController@futureIndex');

    Route::get('/project/create', 'ProjectController@create');
    Route::post('/project/create', 'ProjectController@store');
    Route::get('/project/{id}/edit', 'ProjectController@edit');
    Route::post('/project/{id}/edit', 'ProjectController@update');
    Route::get('/project/{id}/show', 'ProjectController@show');
    Route::get('/project/{id}/delete', 'ProjectController@destroy');

    Route::get('/price', 'PriceController@index');
    Route::get('/price/create', 'PriceController@create');
    Route::post('/price/create', 'PriceController@store');
    Route::get('/price/{id}/edit', 'PriceController@edit');
    Route::post('/price/{id}/edit', 'PriceController@update');
    Route::get('/price/{id}/show', 'PriceController@show');
    Route::get('/price/{id}/delete', 'PriceController@destroy');

    Route::get('/blog', 'BlogController@index');
    Route::get('/blog/create', 'BlogController@create');
    Route::post('/blog/create', 'BlogController@store');
    Route::get('blog/{id}/edit', 'BlogController@edit');
    Route::post('blog/{id}/edit', 'BlogController@update');
    Route::get('blog/{id}/show', 'BlogController@show');
    Route::get('blog/{id}/delete', 'BlogController@destroy');

    /********************Career*************************/

    Route::get('/career', 'CareerController@index');
    Route::get('/career/create', 'CareerController@create');
    Route::post('/career/create', 'CareerController@store');
    Route::get('career/{id}/edit', 'CareerController@edit');
    Route::post('career/{id}/edit', 'CareerController@update');
    Route::get('career/{id}/show', 'CareerController@show');
    Route::get('career/{id}/delete', 'CareerController@destroy');

    /*******************end Career**********************/

    Route::get('/servicemessage', 'ServiceMessageController@index');
    Route::get('/servicemessage/{id}/show', 'ServiceMessageController@show');
    Route::get('/servicemessage/{id}/delete', 'ServiceMessageController@destroy');

    Route::get('/contactmessage', 'ContactMessageController@index');
    Route::get('/contactmessage/{id}/show', 'ContactMessageController@show');
    Route::get('/contactmessage/{id}/delete', 'ContactMessageController@destroy');

    Route::get('/careermessage', 'CareerMessageController@index');
    Route::get('/careermessage/{id}/show', 'CareerMessageController@show');
    Route::get('/careermessage/{id}/delete', 'CareerMessageController@destroy');

    Route::get('/user', 'UserController@index');
    Route::get('/user/{id}/edit', 'UserController@edit');
    Route::post('/user/{id}/edit', 'UserController@update');
    Route::get('/user/{id}/delete', 'UserController@destroy');

    Route::get('/role', 'RoleController@index');
    Route::get('/role/create', 'RoleController@create');
    Route::post('/role/create', 'RoleController@store');
    Route::get('/role/{id}/edit', 'RoleController@edit');
    Route::post('/role/{id}/edit', 'RoleController@update');
    Route::get('/role/{id}/delete', 'RoleController@destroy');
});

/*---------------------------backend end-----------------------*/


Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/home', function () {
    return view('frontendone.index');
});