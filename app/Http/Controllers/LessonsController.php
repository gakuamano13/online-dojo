<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lesson;
use App\Teacher;
use Validator;
use Auth;


class LessonsController extends Controller
{


    //表示
    public function index()
    {

        $lessons = DB::table('lessons')
        ->leftJoin('teachers', 'lessons.teachers_id', '=', 'teachers.teachers_id')
        ->leftJoin('navis', 'lessons.navis_id', '=', 'navis.navis_id')
        ->orderBy('lessons.created_at', 'desc')
        ->paginate(3);

        return view('master/lessons/lessons', [
            'lessons' => $lessons,
        ]);

        // dd($lessons);
        
    }


    //登録
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/lessontop')
                ->withInput()
                ->withErrors($validator);
        }

        //file 取得
        $file = $request->file('photo');
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
        $lessons->title = $request->title;
        $lessons->text = $request->text;
        $lessons->price = $request->price;
        $lessons->date = $request->date;
        $lessons->week = $request->week;
        $lessons->url = $request->url;
        $lessons->pass = $request->pass;
        $lessons->video = $request->video;
        $lessons->teachers_id = $request->teachers_id;
        $lessons->navis_id = $request->navis_id;
        $lessons->photo = $filename;
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
            'title' => 'required|max:255',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/lessontop')
                ->withInput()
                ->withErrors($validator);
        }

        //file 取得
        $file = $request->file('photo');
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
        $lessons->title = $request->title;
        $lessons->text = $request->text;
        $lessons->price = $request->price;
        $lessons->date = $request->date;
        $lessons->week = $request->week;
        $lessons->url = $request->url;
        $lessons->pass = $request->pass;
        $lessons->video = $request->video;
        $lessons->teachers_id = $request->teachers_id;
        $lessons->navis_id = $request->navis_id;
        $lessons->photo = $filename;
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
