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
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('clients', function () {
    return view('clients');
});
Route::get('fellowship', function () {
    return view('fellowship');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('hire_form', function () {
    return view('hire_form');
});

Route::get('/zohoverify/', function () {
    return view('zohoverify/verifyforzoho.html');
});
Route::get('/zohoverify', function() {
  return File::get(public_path() . '/zohoverify/zohoverify.html');
  return File::get(public_path() . '/to new folder name/index.html');


});
Route::get('pricing',function(){
    return view('pricing');
});
Route::get('career',function(){
    return view('career');
});
Route::get('digital-skills-training', function () {
    return view('digital-skills-training');
});
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return $exitCode;
});


Route::get('home', 'HomeController@index');
