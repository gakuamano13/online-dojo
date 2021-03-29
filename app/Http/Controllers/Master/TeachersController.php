<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Validator;
use Auth;

class TeachersController extends Controller
{
    //表示
    public function index()
    {
        $teachers = Teacher::orderBy('created_at', 'desc')->paginate(3);
        return view('master/teachers/teachers', [
            'teachers' => $teachers
        ]);
    }


    //登録
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'teachers_email' => 'required|max:255',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/teachertop')
                ->withInput()
                ->withErrors($validator);
        }

        //file 取得
        $file = $request->file('teachers_photo');
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
        $teachers = new Teacher;
        $teachers->teachers_name = $request->teachers_name;
        $teachers->teachers_email = $request->teachers_email;
        $teachers->teachers_flag = $request->teachers_flag;
        $teachers->teachers_login_id = $request->teachers_login_id;
        $teachers->teachers_pass = $request->teachers_pass;
        $teachers->teachers_tel = $request->teachers_tel;
        $teachers->teachers_photo = $filename;
        $teachers->save();
        return redirect('/teachertop');


    }


    //更新画面
    public function edit(Teacher $teachers)
    {
        return view('master/teachers/teachersedit', ['teacher' => $teachers]);
    }


    //更新処理
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'teachers_email' => 'required|max:255',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/teachertop')
                ->withInput()
                ->withErrors($validator);
        }

        //file 取得
        $file = $request->file('teachers_photo');
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
        $teachers = Teacher::find($request->id);
        $teachers->teachers_name = $request->teachers_name;
        $teachers->teachers_email = $request->teachers_email;
        $teachers->teachers_flag = $request->teachers_flag;
        $teachers->teachers_login_id = $request->teachers_login_id;
        $teachers->teachers_pass = $request->teachers_pass;
        $teachers->teachers_tel = $request->teachers_tel;
        $teachers->teachers_photo = $filename;
        $teachers->save();
        return redirect('/teachertop');
    }


    //削除処理
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();       //追加
        return redirect('/teachertop');  //追加
    }

}
