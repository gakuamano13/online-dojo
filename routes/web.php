<?php


use App\Lesson;
use Illuminate\Http\Request;

//表示
Route::get('/', function () {
    $lessons = Lesson::orderBy('created_at', 'asc')->get();
    return view('lessons', [
        'lessons' => $lessons
    ]);
});

    //add
    Route::post('/lessons', function (Request $request) {

        //バリデーション
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3|max:255',
        ]);
    
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        $lessons = new Lesson;
        $lessons->title = $request->title;
        $lessons->text = 'test';
        $lessons->save(); 
        return redirect('/');

    
    
    
    });

    //del
    Route::delete('/lesson/{lesson}', function (Lesson $lesson) {
        $lesson->delete();       //追加
        return redirect('/');  //追加
    });


Route::get('/list', function () {
    return view('list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
