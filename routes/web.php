<?php


use App\Lesson;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/mastertop', function () {
    return view('mastertop');
});
Route::get('meeting', function () {
    return view('master/meeting');
});


//表示
Route::get('/lessontop', 'LessonsController@index');
//更新画面
Route::post('/lessonsedit/{lessons}','LessonsController@edit' );
//更新処理
Route::post('/lessons/update', 'LessonsController@update');
//登録
Route::post('/lessons', 'LessonsController@store');
//削除
Route::delete('/lesson/{lesson}','LessonsController@destroy');


//表示
Route::get('/teachertop', 'TeachersController@index');
//更新画面
Route::post('/teachersedit/{teachers}','TeachersController@edit' );
//更新処理
Route::post('/teachers/update', 'TeachersController@update');
//登録
Route::post('/teachers', 'TeachersController@store');
//削除
Route::delete('/teacher/{teacher}','TeachersController@destroy');


//表示
Route::get('/navitop', 'NavisController@index');
//更新画面
Route::post('/navisedit/{navis}','NavisController@edit' );
//更新処理
Route::post('/navis/update', 'NavisController@update');
//登録
Route::post('/navis', 'NavisController@store');
//削除
Route::delete('/navi/{navi}','NavisController@destroy');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
