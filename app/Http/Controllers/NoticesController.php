<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Validator;
use Auth;

class NoticesController extends Controller
{
                //表示
                public function index()
                {
                    $notices = Notice::orderBy('created_at', 'desc')->paginate(3);
                    return view('master/notices/notices', [
                        'notices' => $notices
                    ]);
                }
            
            
                //登録
                public function store(Request $request)
                {
                    //バリデーション
                    $validator = Validator::make($request->all(), [
                        'notices_title' => 'required|max:255',
                    ]);
                    //バリデーション:エラー 
                    if ($validator->fails()) {
                        return redirect('/noticetop')
                            ->withInput()
                            ->withErrors($validator);
                    }
                    
                    //以下に登録処理を記述（Eloquentモデル）
                    $notices = new Notice;
                    $notices->notices_title = $request->notices_title;
                    $notices->notices_text = $request->notices_text;
                    $notices->notices_flag = $request->notices_flag;
                    $notices->save(); 
                    return redirect('/noticetop');
            
            
                } 
            
            
                //更新画面
                public function edit(Notice $notices)
                {
                    return view('master/notices/noticesedit', ['notice' => $notices]);
                }
            
            
                //更新処理
                public function update(Request $request)
                {
                    //バリデーション
                    $validator = Validator::make($request->all(), [
                        'id' => 'required',
                        'notices_title' => 'required|max:255',
                    ]);
                    //バリデーション:エラー 
                    if ($validator->fails()) {
                        return redirect('/noticetop')
                            ->withInput()
                            ->withErrors($validator);
                    }
                    
                    //以下に登録処理を記述（Eloquentモデル）
                    $notices = Notice::find($request->id);
                    $notices->notices_title = $request->notices_title;
                    $notices->notices_text = $request->notices_text;
                    $notices->notices_flag = $request->notices_flag;
                    $notices->save(); 
                    return redirect('/noticetop');
                } 
            
            
                //削除処理
                public function destroy(Notice $notice)
                {
                    $notice->delete();       //追加
                    return redirect('/noticetop');  //追加
                }

}
