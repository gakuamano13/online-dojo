<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Validator;
use Auth;

class StudentsController extends Controller
{
        //表示
        public function index()
        {
            $students = Student::orderBy('created_at', 'desc')->paginate(3);
            return view('master/students/students', [
                'students' => $students
            ]);
        }


        //登録
        public function store(Request $request)
        {
            //バリデーション
            $validator = Validator::make($request->all(), [
                'students_email' => 'required|min:3|max:255',
            ]);
            //バリデーション:エラー
            if ($validator->fails()) {
                return redirect('/studenttop')
                    ->withInput()
                    ->withErrors($validator);
            }

            //file 取得
            $file = $request->file('students_photo');
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
            $students = new Student;
            $students->students_name = $request->students_name;
            $students->students_email = $request->students_email;
            $students->students_flag = $request->students_flag;
            $students->students_login_id = $request->students_login_id;
            $students->students_pass = $request->students_pass;
            $students->students_tel = $request->students_tel;
            $students->students_photo = $filename;
            $students->save();
            return redirect('/studenttop');


        }


        //更新画面
        public function edit(Student $students)
        {
            return view('master/students/studentsedit', ['student' => $students]);
        }


        //更新処理
        public function update(Request $request)
        {
            //バリデーション
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'students_email' => 'required|min:3|max:255',
            ]);
            //バリデーション:エラー
            if ($validator->fails()) {
                return redirect('/studenttop')
                    ->withInput()
                    ->withErrors($validator);
            }

            //file 取得
            $file = $request->file('students_photo');
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
            $students = Student::find($request->id);
            $students->students_name = $request->students_name;
            $students->students_email = $request->students_email;
            $students->students_flag = $request->students_flag;
            $students->students_login_id = $request->students_login_id;
            $students->students_pass = $request->students_pass;
            $students->students_tel = $request->students_tel;
            $students->students_photo = $filename;
            $students->save();
            return redirect('/studenttop');
        }


        //削除処理
        public function destroy(Student $student)
        {
            $student->delete();       //追加
            return redirect('/studenttop');  //追加
        }

}
