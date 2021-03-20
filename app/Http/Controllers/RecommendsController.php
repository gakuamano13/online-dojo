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
                    'recommends_title' => 'required|max:255',
                ]);
                //バリデーション:エラー 
                if ($validator->fails()) {
                    return redirect('/recommendtop')
                        ->withInput()
                        ->withErrors($validator);
                }
                
                //以下に登録処理を記述（Eloquentモデル）
                $recommends = new Recommend;
                $recommends->recommends_title = $request->recommends_title;
                $recommends->recommends_lessons_id = $request->recommends_lessons_id;
                $recommends->recommends_text = $request->recommends_text;
                $recommends->recommends_flag = $request->recommends_flag;
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
                    'recommends_title' => 'required|max:255',
                ]);
                //バリデーション:エラー 
                if ($validator->fails()) {
                    return redirect('/recommendtop')
                        ->withInput()
                        ->withErrors($validator);
                }
                
                //以下に登録処理を記述（Eloquentモデル）
                $recommends = Recommend::find($request->id);
                $recommends->recommends_title = $request->recommends_title;
                $recommends->recommends_lessons_id = $request->recommends_lessons_id;
                $recommends->recommends_text = $request->recommends_text;
                $recommends->recommends_flag = $request->recommends_flag;
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
