<?php

Auth::routes();
//company

Route::get('/', 'HomeController@index');
Route::get('techs', 'TechController@index');
Route::get('contact', 'CompanyController@contact');
Route::post('contact', 'CompanyController@storeContact');
Route::get('about', 'CompanyController@about');
Route::get('posts', 'PostController@index');
Route::get('posts/{slug}', 'PostController@show');
Route::get('projects', 'ProjectController@index');
Route::get('projects/{slug}', 'ProjectController@show');
Route::get('projects/download/{file}', 'ProjectController@downloadFile');
Route::post('create/post/comment', 'CommentController@storePostComment');
Route::post('create/project/comment', 'CommentController@storeProjectComment');
Route::post('subscribe', 'CompanyController@subscribe');

Route::get('user/profile','UserController@index');

Route::group(['middleware'=>['auth','userrole']],function(){
    //config rotue
    Route::get('clear-all', 'admin\AdminConfigController@clearAll');
    Route::get('cache-all', 'admin\AdminConfigController@cacheAll');
    //company routes
    Route::get('dashboard', 'admin\AdminCompanyController@dashboard');
    Route::get('admin', 'admin\AdminCompanyController@redirect');

    Route::get('admin-company', 'admin\AdminCompanyController@index');
    Route::post('create/company', 'admin\AdminCompanyController@store');
    Route::post('update/company', 'admin\AdminCompanyController@update');
    Route::get('delete/company/{id}', 'admin\AdminCompanyController@destroy');
    //post routes
    Route::get('admin-posts', 'admin\AdminPostController@index');
    Route::post('create/post', 'admin\AdminPostController@store');
    Route::post('update/post', 'admin\AdminPostController@update');
    Route::get('delete/post/{id}', 'admin\AdminPostController@destroy');
    //project routes
    Route::get('admin-projects', 'admin\AdminProjectController@index');
    Route::post('create/project', 'admin\AdminProjectController@store');
    Route::post('update/project', 'admin\AdminProjectController@update');
    Route::get('delete/project/{id}', 'admin\AdminProjectController@destroy');
    //app routes
    Route::get('admin-app', 'admin\AdminAppController@index');
    Route::post('create/app', 'admin\AdminAppController@store');
    Route::put('update/app/{id}', 'admin\AdminAppController@update');
    Route::get('delete/app/{id}', 'admin\AdminAppController@destroy');
    //techs routes
    Route::get('admin-techs', 'admin\AdminTechController@index');
    Route::post('create/tech', 'admin\AdminTechController@store');
    Route::post('update/tech', 'admin\AdminTechController@update');
    Route::get('delete/tech/{id}', 'admin\AdminTechController@destroy');
    //tech info routes
    Route::get('admin-techinfo', 'admin\AdminTechinfoController@index');
    Route::post('create/techinfo', 'admin\AdminTechinfoController@store');
    Route::post('update/techinfo/update', 'admin\AdminTechinfoController@update');
    Route::get('delete/techinfo/{id}', 'admin\AdminTechinfoController@destroy');
    //team routes
    Route::get('admin-team', 'admin\AdminTeamController@index');
    Route::post('create/team', 'admin\AdminTeamController@store');
    Route::post('update/team', 'admin\AdminTeamController@update');
    Route::get('delete/team/{id}', 'admin\AdminTeamController@destroy');
    //contact routes
    Route::get('admin-contacts', 'admin\AdminContactController@index');
    Route::post('create/contact', 'admin\AdminContactController@store');
    Route::post('update/contact', 'admin\AdminContactController@update');
    Route::get('delete/contact/{id}', 'admin\AdminContactController@destroy');
    //contact routes
    Route::get('admin-users', 'admin\AdminUserController@index');
    Route::post('create/user', 'admin\AdminUserController@store');
    Route::post('update/user', 'admin\AdminUserController@update');
    Route::get('delete/user/{id}', 'admin\AdminUserController@destroy');

});
