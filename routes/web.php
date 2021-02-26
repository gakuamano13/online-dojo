<?php


use App\Lesson;
use Illuminate\Http\Request;

//表示
Route::get('/', 'LessonsController@index');

//更新画面
Route::post('/lessonsedit/{lessons}','LessonsController@edit' );

//更新処理
Route::post('/lessons/update', 'LessonsController@update');

//登録
Route::post('/lessons', 'LessonsController@store');

//削除
Route::delete('/lesson/{lesson}','LessonsController@destroy');


Route::get('/list', function () {
    return view('list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
