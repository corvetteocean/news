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

Route::get('/', 'NewsController@index');

Route::get('/admin', 'AdminController@index');

//Route::get('/', function () {
//    //$news = DB::table('news')->get();
//    $news = App\news::GetAllNews();
//    return view('pages.home', compact('news'));
//});

//Route::get('hello', function () {
//    $name = 'Jack';
//    $tasks = [
//        'add task',
//        'find task',
//        'review task',
//    ];
//    return view('hello', compact('tasks'), compact('name')
//    );
//});
