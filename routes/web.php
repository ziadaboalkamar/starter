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
//$data = ["ziad","claudia"];
//Route::get('/', function () {
//    return view('welcome',compact('data'));
//});

Route::get('/landing', function () {
    return view('landinge')->with('name','Ziad Abo Alkamr');
});


Route::get('/about', function () {
    return view('aboutus');
});
//
//
//Route::get('/test1', function () {
//    return "Welcome their";
//});
//
////route parameter
//
//
//Route::get('/test2/{id}', function ($id) {
//    return $id;
//})->name('a');
//Route::get('/test3/{id?}', function () {
//    return "welcome";
//
//
//})->name('b');


// name space
//Route::namespace('Front')->group(function (){
//
////all route only access controller or method in folder name front
//    Route::get('users','UserController@ShowAdminName');
//});

//perfix
//Route:: prefix('users')->group(function (){
//    Route::get('show','UserController@ShowAdminName');
//    Route::delete('delete','UserController@ShowAdminName');
//    Route::get('edit','UserController@ShowAdminName');
//    Route::put('update','UserController@ShowAdminName');
//});

//Route::group(['prefix' => 'users','middleware' => 'auth'],function (){
//    Route::get('/',function (){
//       return "it's work";
//    });
//    Route::get('show','UserController@ShowAdminName');
//    Route::delete('delete','UserController@ShowAdminName');
//    Route::get('edit','UserController@ShowAdminName');
//    Route::put('update','UserController@ShowAdminName');
//});

//middlwear
//Route:: prefix('users')->group(function (){
//    Route::get('show','UserController@ShowAdminName');
//    Route::delete('delete','UserController@ShowAdminName');
//    Route::get('edit','UserController@ShowAdminName');
//    Route::put('update','UserController@ShowAdminName');
//});

//Route::get('check' , function (){
//   return 'middleware';
//})->middleware('auth');


Route::get('first' ,'FirstController@showString');
Route::group(['namespace'=>'Front'],function (){
    Route::get('secound', 'SecoundController@showString')->middleware('auth');
    Route::get('secound1', 'SecoundController@showString1')  ;
    Route::get('secound2', 'SecoundController@showString2')   ;
    Route::get('secound3', 'SecoundController@showString3');
});

//Route::get('Login',function (){
//  return 'this rote you must login';
//})->name('login');

Route:: resource("news","News");


// لعمل controlle resourse نكتب:
//php artisan make:controller News --resource

Auth::routes(['verify'=>true]);

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



