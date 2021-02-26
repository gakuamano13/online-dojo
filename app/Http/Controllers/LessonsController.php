<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use Validator;
use Auth;


class LessonsController extends Controller
{

    //表示
    public function index()
    {
        $lessons = Lesson::orderBy('created_at', 'desc')->get();
        return view('lessons', [
            'lessons' => $lessons
        ]);
    }


    //登録
    public function store(Request $request)
    {
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
        $lessons->text = $request->text;
        $lessons->save(); 
        return redirect('/');
    } 


    //更新画面
    public function edit(Lesson $lessons)
    {
        return view('lessonsedit', ['lesson' => $lessons]);
    }


    //更新処理
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'title' => 'required|min:3|max:255',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        $lessons = Lesson::find($request->id);
        $lessons->title = $request->title;
        $lessons->text = $request->text;
        $lessons->save(); 
        return redirect('/');
    } 


    //削除処理
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();       //追加
        return redirect('/');  //追加
    }




}
