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
Auth::routes();
Route::get('/admin','AdminController@home')->name('admin.home');
Route::get('/couresubject','CourseController@subject')->name('admin.course.subject');
Route::post('/addcouresubject','CourseController@addsubject')->name('admin.course.subject.add');
Route::get('/delsubject/{id}','CourseController@delsubject')->name('admin.course.subject.remove');
Route::get('/subjectstatus/{id}','CourseController@subjectstatus')->name('admin.course.subject.status');
Route::get('/allcourse','CourseController@allcourse')->name('admin.course.all');
Route::get('/addcourse','CourseController@addcourse')->name('admin.course.add');
Route::post('/storecourse','CourseController@storecourse')->name('admin.course.store');
Route::get('coursview/{id}','CourseController@coursview')->name('admin.course.view');
Route::get('/coursedel/{id}','CourseController@coursedel')->name('admin.course.delete');
Route::get('/courseedit/{id}','CourseController@courseedit')->name('admin.course.edit');
Route::post('/courseupdate/{id}','CourseController@courseupdate')->name('admin.course.update');
Route::get('/subjectstatus/{id}','CourseController@subjectstatus')->name('admin.course.subject.status');
Route::get('/coursestatus/{id}','CourseController@coursestatus')->name('admin.course.status');


Route::get('/addmember','AdminController@addmember')->name('admin.team.member.add');
Route::post('/storemember','AdminController@storemember')->name('admin.team.member.store');
Route::post('/teammember','AdminController@teammember')->name('admin.team.member.all');

Route::resource('/team','TeamController');
Route::resource('/contact','ContactController');
Route::resource('/slider','SliderController');
Route::post('/sliderposition','SliderController@sliderposition');
Route::get('/sliderstatus/{id}','SliderController@sliderstatus')->name('admin.slider.status');

Route::resource('/page','PageController');


Route::get('/index','PublicController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
