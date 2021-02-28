<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navi;
use Validator;
use Auth;

class NavisController extends Controller
{
    //表示
    public function index()
    {
        $navis = Navi::orderBy('created_at', 'desc')->paginate(3);
        return view('master/navis/navis', [
            'navis' => $navis
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
            return redirect('/navitop')
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
        $navis = new Navi;
        $navis->name = $request->name;
        $navis->email = $request->email;
        $navis->photo = $filename;
        $navis->save(); 
        return redirect('/navitop');


    } 


    //更新画面
    public function edit(Navi $navis)
    {
        return view('master/navis/navisedit', ['navi' => $navis]);
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
            return redirect('/navitop')
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
        $navis = Navi::find($request->id);
        $navis->name = $request->name;
        $navis->email = $request->email;
        $navis->photo = $filename;
        $navis->save(); 
        return redirect('/navitop');
    } 


    //削除処理
    public function destroy(Navi $navi)
    {
        $navi->delete();       //追加
        return redirect('/navitop');  //追加
    }
}
