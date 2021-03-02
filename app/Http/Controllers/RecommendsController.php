<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recommend;
use Validator;
use Auth;

class RecommendsController extends Controller
{
            //表示
            public function index()
            {
                $recommends = Recommend::orderBy('created_at', 'desc')->paginate(3);
                return view('master/recommends/recommends', [
                    'recommends' => $recommends
                ]);
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
                    return redirect('/recommendtop')
                        ->withInput()
                        ->withErrors($validator);
                }
                
                //以下に登録処理を記述（Eloquentモデル）
                $recommends = new Recommend;
                $recommends->title = $request->title;
                $recommends->lessons_id = $request->lessons_id;
                $recommends->text = $request->text;
                $recommends->flag = $request->flag;
                $recommends->save(); 
                return redirect('/recommendtop');
        
        
            } 
        
        
            //更新画面
            public function edit(Recommend $recommends)
            {
                return view('master/recommends/recommendsedit', ['recommend' => $recommends]);
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
                    return redirect('/recommendtop')
                        ->withInput()
                        ->withErrors($validator);
                }
                
                //以下に登録処理を記述（Eloquentモデル）
                $recommends = Recommend::find($request->id);
                $recommends->title = $request->title;
                $recommends->lessons_id = $request->lessons_id;
                $recommends->text = $request->text;
                $recommends->flag = $request->flag;
                $recommends->save(); 
                return redirect('/recommendtop');
            } 
        
        
            //削除処理
            public function destroy(Recommend $recommend)
            {
                $recommend->delete();       //追加
                return redirect('/recommendtop');  //追加
            }

}
