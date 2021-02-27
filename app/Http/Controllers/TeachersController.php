<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Validator;
use Auth;

class TeachersController extends Controller
{
    //表示
    public function index()
    {
        $teachers = Teacher::orderBy('created_at', 'desc')->paginate(3);
        return view('teachers/teachers', [
            'teachers' => $teachers
        ]);
    }


    //登録
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'email' => 'required|min:3|max:255',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/teachertop')
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
        $teachers = new Teacher;
        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->photo = $filename;
        $teachers->save(); 
        return redirect('/teachertop');


    } 


    //更新画面
    public function edit(Teacher $teachers)
    {
        return view('teachers/teachersedit', ['teacher' => $teachers]);
    }


    //更新処理
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'email' => 'required|min:3|max:255',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/teachertop')
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
        $teachers = Teacher::find($request->id);
        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->photo = $filename;
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
