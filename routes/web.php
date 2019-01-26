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
    return redirect('blog');
});
Route::get('/news','newsController@index')->name('news');
Route::get('/blog','blogController@index')->name('blog');
Route::get('/blog/search','blogController@searchView')->name('blog-searchView');
Route::post('/blog/search','blogController@se')->name('blog-se');


Route::get('/game','gameController@index')->name('game');
route::get('/game/{id}','gameController@detail')->name('game-detail');


Route::get('/company','companyController@index')->name('company');

Route::get('/support','supportController@index')->name('support');
Route::post('/support','supportController@save')->name('support-save');
Route::get('/support/yes','supportController@save');



route::get('/blog/{id}','blogController@detail')->name('blog-detail');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/game','gameAdminController@index')->name('game-admin');
Route::get('/home/news','newsAdminController@index')->name('news-admin');
Route::get('/home/feedback','feedbackAdminController@index')->name('feedback-admin');
route::get('/home/feedback/{id}','feedbackAdminController@detail')->name('feedback-detail');
route::post('/home/feedback','feedbackAdminController@delete')->name('feedback-delete');
Route::get('/home/employees', 'employeesController@index')->name('employees-admin');
route::post('/home/employees','employeesController@delete')->name('employees-delete');
route::get('/home/employeesDetail/{id}','employeesController@change')->name('employees-change');
route::post('/home/employeesDetail/{id}','employeesController@edit')->name('employees-edit');
route::get('/home/employeesCreate','employeesController@create')->name('employees-create');
route::post('/home/employeesCreate','employeesController@save')->name('employees-save');
route::get('/home/news/{id}','newsAdminController@change')->name('news-change');
route::post('/home/news/{id}','newsAdminController@edit')->name('news-edit');

route::get('/home/newsCreate','newsAdminController@create')->name('news-create');
route::post('/home/newsCreate','newsAdminController@save')->name('news-save');

route::get('/home/gameCreate','gameAdminController@create')->name('game-create');
route::post('/home/gameCreate','gameAdminController@save')->name('game-save');

route::get('/home/game/{id}','gameAdminController@change')->name('game-change');
route::post('/home/game/{id}','gameAdminController@edit')->name('game-edit');














