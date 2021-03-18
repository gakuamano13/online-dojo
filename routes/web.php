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


Route::get('/lists','ListsController@index');

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


//表示
Route::get('/studenttop', 'StudentsController@index');
//更新画面
Route::post('/studentsedit/{students}','StudentsController@edit' );
//更新処理
Route::post('/students/update', 'StudentsController@update');
//登録
Route::post('/students', 'StudentsController@store');
//削除
Route::delete('/student/{student}','StudentsController@destroy');


//表示
Route::get('/recommendtop', 'RecommendsController@index');
//更新画面
Route::post('/recommendsedit/{recommends}','RecommendsController@edit' );
//更新処理
Route::post('/recommends/update', 'RecommendsController@update');
//登録
Route::post('/recommends', 'RecommendsController@store');
//削除
Route::delete('/recommend/{recommend}','RecommendsController@destroy');


//表示
Route::get('/noticetop', 'NoticesController@index');
//更新画面
Route::post('/noticesedit/{notices}','NoticesController@edit' );
//更新処理
Route::post('/notices/update', 'NoticesController@update');
//登録
Route::post('/notices', 'NoticesController@store');
//削除
Route::delete('/notice/{notice}','NoticesController@destroy');


//表示
Route::get('/helptop', 'HelpsController@index');
//更新画面
Route::post('/helpsedit/{helps}','HelpsController@edit' );
//更新処理
Route::post('/helps/update', 'HelpsController@update');
//登録
Route::post('/helps', 'HelpsController@store');
//削除
Route::delete('/help/{help}','HelpsController@destroy');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
