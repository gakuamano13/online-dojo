<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Validator;
use Auth;

class CoursesController extends Controller
{
    //表示
    public function index()
    {
        $courses = Course::orderBy('created_at', 'desc')->paginate(3);
        return view('master/courses/courses', [
            'courses' => $courses
        ]);
    }


    //登録
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'courses_date' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/coursetop')
                ->withInput()
                ->withErrors($validator);
        }

        //以下に登録処理を記述（Eloquentモデル）
        $courses = new Course;
        $courses->courses_date = $request->courses_date;
        $courses->courses_time = $request->courses_time;
        $courses->courses_week = $request->courses_week;
        $courses->courses_lessons_id = $request->courses_lessons_id;
        $courses->courses_flag = $request->courses_flag;
        $courses->save();
        return redirect('/coursetop');


    }


    //更新画面
    public function edit(Course $courses)
    {
        return view('master/courses/coursesedit', ['course' => $courses]);
    }


    //更新処理
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'courses_date' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/coursetop')
                ->withInput()
                ->withErrors($validator);
        }

        //以下に登録処理を記述（Eloquentモデル）
        $courses = Course::find($request->id);
        $courses->courses_date = $request->courses_date;
        $courses->courses_time = $request->courses_time;
        $courses->courses_week = $request->courses_week;
        $courses->courses_lessons_id = $request->courses_lessons_id;
        $courses->courses_flag = $request->courses_flag;
        $courses->save();
        return redirect('/coursetop');
    }


    //削除処理
    public function destroy(Course $course)
    {
        $course->delete();       //追加
        return redirect('/coursetop');  //追加
    }
}
