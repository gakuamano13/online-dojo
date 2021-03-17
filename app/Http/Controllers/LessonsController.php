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
        $lessons = Lesson::orderBy('created_at', 'desc')->paginate(3);
        return view('master/lessons/lessons', [
            'lessons' => $lessons
        ]);
    }

    //表示
    // public function index()
    // {
    //     $lessons = DB::table('lessons')
    //     ->leftJoin('teachers', 'lessons.teachers_id', '=', 'teachers.id')
    //     ->leftJoin('navis', 'lessons.navis_id', '=', 'navis.id')
    //     ->orderBy('lessons.created_at', 'desc')
    //     ->paginate(3);

    //     return view('master/lessons/lessons', [
    //         'lessons' => $lessons,
    //     ]);
    // }


    //登録
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'lessons_title' => 'required|max:255',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/lessontop')
                ->withInput()
                ->withErrors($validator);
        }

        //file 取得
        $file = $request->file('lessons_photo');
        //file が空かチェック
        if( !empty($file) ){
        //ファイル名を取得
        $filename = $file->getClientOriginalName();
        //AWSの場合どちらかになる事がある”../upload/” or “./upload/”
        $move = $file->move('./upload/',$filename); //public/upload/...
        }else{
        $filename = "";
        }

        //以下に登録処理を記述（Eloquentモデル）
        $lessons = new Lesson;
        $lessons->lessons_title = $request->lessons_title;
        $lessons->lessons_text = $request->lessons_text;
        $lessons->lessons_price = $request->lessons_price;
        $lessons->lessons_date = $request->lessons_date;
        $lessons->lessons_week = $request->lessons_week;
        $lessons->lessons_url = $request->lessons_url;
        $lessons->lessons_pass = $request->lessons_pass;
        $lessons->lessons_video = $request->lessons_video;
        $lessons->teachers_id = $request->teachers_id;
        $lessons->navis_id = $request->navis_id;
        $lessons->lessons_photo = $filename;
        $lessons->save(); 
        return redirect('/lessontop');


    } 


    //更新画面
    public function edit(Lesson $lessons)
    {
        return view('master/lessons/lessonsedit', ['lesson' => $lessons]);
    }


    //更新処理
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'lessons_title' => 'required|max:255',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/lessontop')
                ->withInput()
                ->withErrors($validator);
        }

        //file 取得
        $file = $request->file('lessons_photo');
        //file が空かチェック
        if( !empty($file) ){
        //ファイル名を取得
        $filename = $file->getClientOriginalName();
        //AWSの場合どちらかになる事がある”../upload/” or “./upload/”
        $move = $file->move('./upload/',$filename); //public/upload/...
        }else{
        $filename = "";
        }

        //以下に登録処理を記述（Eloquentモデル）
        $lessons = Lesson::find($request->id);
        $lessons->lessons_title = $request->lessons_title;
        $lessons->lessons_text = $request->lessons_text;
        $lessons->lessons_price = $request->lessons_price;
        $lessons->lessons_date = $request->lessons_date;
        $lessons->lessons_week = $request->lessons_week;
        $lessons->lessons_url = $request->lessons_url;
        $lessons->lessons_pass = $request->lessons_pass;
        $lessons->lessons_video = $request->lessons_video;
        $lessons->teachers_id = $request->teachers_id;
        $lessons->navis_id = $request->navis_id;
        $lessons->lessons_photo = $filename;
        $lessons->save(); 
        return redirect('/lessontop');
    } 


    //削除処理
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();       //追加
        return redirect('/lessontop');  //追加
    }




}
