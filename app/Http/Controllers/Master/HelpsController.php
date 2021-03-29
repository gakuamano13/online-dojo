<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Help;
use Validator;
use Auth;

class HelpsController extends Controller
{
                    //表示
                    public function index()
                    {
                        $helps = Help::orderBy('created_at', 'desc')->paginate(3);
                        return view('master/helps/helps', [
                            'helps' => $helps
                        ]);
                    }


                    //登録
                    public function store(Request $request)
                    {
                        //バリデーション
                        $validator = Validator::make($request->all(), [
                            'helps_title' => 'required|max:255',
                        ]);
                        //バリデーション:エラー
                        if ($validator->fails()) {
                            return redirect('/helptop')
                                ->withInput()
                                ->withErrors($validator);
                        }

                        //以下に登録処理を記述（Eloquentモデル）
                        $helps = new Help;
                        $helps->helps_title = $request->helps_title;
                        $helps->helps_text = $request->helps_text;
                        $helps->helps_flag = $request->helps_flag;
                        $helps->save();
                        return redirect('/helptop');


                    }


                    //更新画面
                    public function edit(Help $helps)
                    {
                        return view('master/helps/helpsedit', ['help' => $helps]);
                    }


                    //更新処理
                    public function update(Request $request)
                    {
                        //バリデーション
                        $validator = Validator::make($request->all(), [
                            'id' => 'required',
                            'helps_title' => 'required|max:255',
                        ]);
                        //バリデーション:エラー
                        if ($validator->fails()) {
                            return redirect('/helptop')
                                ->withInput()
                                ->withErrors($validator);
                        }

                        //以下に登録処理を記述（Eloquentモデル）
                        $helps = Help::find($request->id);
                        $helps->helps_title = $request->helps_title;
                        $helps->helps_text = $request->helps_text;
                        $helps->helps_flag = $request->helps_flag;
                        $helps->save();
                        return redirect('/helptop');
                    }


                    //削除処理
                    public function destroy(Help $help)
                    {
                        $help->delete();       //追加
                        return redirect('/helptop');  //追加
                    }
}
