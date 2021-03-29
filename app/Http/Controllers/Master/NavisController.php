<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Navi;
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
            'navis_email' => 'required|max:255',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/navitop')
                ->withInput()
                ->withErrors($validator);
        }

        //file 取得
        $file = $request->file('navis_photo');
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
        $navis->navis_name = $request->navis_name;
        $navis->navis_email = $request->navis_email;
        $navis->navis_flag = $request->navis_flag;
        $navis->navis_login_id = $request->navis_login_id;
        $navis->navis_pass = $request->navis_pass;
        $navis->navis_tel = $request->navis_tel;
        $navis->navis_photo = $filename;
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
            'navis_email' => 'required|max:255',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/navitop')
                ->withInput()
                ->withErrors($validator);
        }

        //file 取得
        $file = $request->file('navis_photo');
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
        $navis->navis_name = $request->navis_name;
        $navis->navis_email = $request->navis_email;
        $navis->navis_flag = $request->navis_flag;
        $navis->navis_login_id = $request->navis_login_id;
        $navis->navis_pass = $request->navis_pass;
        $navis->navis_tel = $request->navis_tel;
        $navis->navis_photo = $filename;
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
