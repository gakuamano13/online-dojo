<?php

use App\Lesson;
use Illuminate\Http\Request;

// user側の処理↓    //

Route::name('lesson.')
    ->group(function () {
        Route::get('/', 'User\TopPageController@index')->name('index');
        Route::get('/lesson', 'User\TopPageController@show')->name('show');
        Route::get('/lesson/{id}', 'User\TopPageController@detail')->name('detail');
        Route::get('/lesson/{id}/session', 'User\SessionController@index')->name('session');
        Route::get('/about', 'User\AboutController@index')->name('index');
    });

Route::name('user.')
    ->group(function () {
        Route::get('/mypage', 'User\MyPageController@index')->name('mypage');
    });

Route::get('/mastertop', function () {
        return view('mastertop');
    });

// user側の処理↑    //

// master側の処理 ↓ //

Route::get('/master','Master\MasterController@index');

Route::get('meeting', function () {
    return view('master/meeting');
});


Route::get('/lists','Master\ListsController@index');

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
Route::get('/coursetop', 'Master\CoursesController@index');
//更新画面
Route::post('/coursesedit/{courses}','Master\CoursesController@edit' );
//更新処理
Route::post('/courses/update', 'Master\CoursesController@update');
//登録
Route::post('/courses', 'Master\CoursesController@store');
//削除
Route::delete('/course/{course}','Master\CoursesController@destroy');


//表示
Route::get('/teachertop', 'Master\TeachersController@index');
//更新画面
Route::post('/teachersedit/{teachers}','Master\TeachersController@edit' );
//更新処理
Route::post('/teachers/update', 'Master\TeachersController@update');
//登録
Route::post('/teachers', 'Master\TeachersController@store');
//削除
Route::delete('/teacher/{teacher}','Master\TeachersController@destroy');


//表示
Route::get('/navitop', 'Master\NavisController@index');
//更新画面
Route::post('/navisedit/{navis}','Master\NavisController@edit' );
//更新処理
Route::post('/navis/update', 'Master\NavisController@update');
//登録
Route::post('/navis', 'Master\NavisController@store');
//削除
Route::delete('/navi/{navi}','Master\NavisController@destroy');


//表示
Route::get('/studenttop', 'Master\StudentsController@index');
//更新画面
Route::post('/studentsedit/{students}','Master\StudentsController@edit' );
//更新処理
Route::post('/students/update', 'Master\StudentsController@update');
//登録
Route::post('/students', 'Master\StudentsController@store');
//削除
Route::delete('/student/{student}','Master\StudentsController@destroy');


//表示
Route::get('/recommendtop', 'Master\RecommendsController@index');
//更新画面
Route::post('/recommendsedit/{recommends}','Master\Master\RecommendsController@edit' );
//更新処理
Route::post('/recommends/update', 'Master\Master\RecommendsController@update');
//登録
Route::post('/recommends', 'Master\Master\RecommendsController@store');
//削除
Route::delete('/recommend/{recommend}','Master\Master\RecommendsController@destroy');


//表示
Route::get('/noticetop', 'Master\NoticesController@index');
//更新画面
Route::post('/noticesedit/{notices}','Master\NoticesController@edit' );
//更新処理
Route::post('/notices/update', 'Master\NoticesController@update');
//登録
Route::post('/notices', 'Master\NoticesController@store');
//削除
Route::delete('/notice/{notice}','Master\NoticesController@destroy');


//表示
Route::get('/helptop', 'Master\HelpsController@index');
//更新画面
Route::post('/helpsedit/{helps}','Master\HelpsController@edit' );
//更新処理
Route::post('/helps/update', 'Master\HelpsController@update');
//登録
Route::post('/helps', 'Master\HelpsController@store');
//削除
Route::delete('/help/{help}','Master\HelpsController@destroy');


//表示
Route::get('/bookingtop', 'Master\BookingsController@index');
//更新画面
Route::post('/bookingsedit/{bookings}','Master\BookingsController@edit' );
//更新処理
Route::post('/bookings/update', 'Master\BookingsController@update');
//登録
Route::post('/bookings', 'Master\BookingsController@store');
//削除
Route::delete('/booking/{booking}','Master\BookingsController@destroy');


//表示
Route::get('/liketop', 'Master\LikesController@index');
//更新画面
Route::post('/likesedit/{likes}','Master\LikesController@edit' );
//更新処理
Route::post('/likes/update', 'Master\LikesController@update');
//登録
Route::post('/likes', 'Master\LikesController@store');
//削除
Route::delete('/like/{like}','Master\LikesController@destroy');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
