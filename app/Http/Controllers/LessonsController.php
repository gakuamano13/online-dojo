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

    // public function setTeacher() {
    //     return this.teachers == Teacher::find($this->teachers_id);
    //     }

    //   $lists = DB::table('lessons')
    //   ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //   ->select('users.*', 'contacts.phone', 'orders.price')
    //   ->get();

        // public function mixlist(){
        //     $lists = DB::table('teachers')
        //     -> join('lessons', 'teachers.id', '=', 'lessons.teachers_id')
        //     -> get();
        // }






    //表示
    public function index()
    {
        $lessons = Lesson::orderBy('created_at', 'desc')->paginate(3);

        $teachers = DB::table('lessons')
        ->join('teachers', 'lessons.teachers_id', '=', 'teachers.id')
        ->get();

        return view('master/lessons/lessons', [
            'lessons' => $lessons,
            'teachers' => $teachers
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
        $lessons->url = $request->url;
        $lessons->pass = $request->pass;
        $lessons->video = $request->video;
        $lessons->teachers_id = $request->teachers_id;
        $lessons->teachers_name = $request->teachers_name;
        $lessons->teachers_photo = $request->teachers_photo;
        $lessons->navis_id = $request->navis_id;
        $lessons->navis_name = $request->navis_name;
        $lessons->navis_photo = $request->navis_photo;
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
            'title' => 'required|min:3|max:255',
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
        $lessons->url = $request->url;
        $lessons->pass = $request->pass;
        $lessons->video = $request->video;
        $lessons->teachers_id = $request->teachers_id;
        $lessons->teachers_name = $request->teachers_name;
        $lessons->teachers_photo = $request->teachers_photo;
        $lessons->navis_id = $request->navis_id;
        $lessons->navis_name = $request->navis_name;
        $lessons->navis_photo = $request->navis_photo;
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
