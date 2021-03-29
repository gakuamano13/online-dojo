<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use Validator;
use Auth;

class LikesController extends Controller
{
    //表示
    public function index()
    {
        $likes = Like::orderBy('created_at', 'desc')->paginate(3);
        return view('master/likes/likes', [
            'likes' => $likes
        ]);
    }


    //登録
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'likes_students_id' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/liketop')
                ->withInput()
                ->withErrors($validator);
        }

        //以下に登録処理を記述（Eloquentモデル）
        $likes = new Like;
        $likes->likes_students_id = $request->likes_students_id;
        $likes->likes_teachers_id = $request->likes_teachers_id;
        $likes->likes_navis_id = $request->likes_navis_id;
        $likes->likes_lessons_id = $request->likes_lessons_id;
        $likes->likes_courses_id = $request->likes_courses_id;
        $likes->likes_flag = $request->likes_flag;
        $likes->save();
        return redirect('/liketop');


    }


    //更新画面
    public function edit(Like $likes)
    {
        return view('master/likes/likesedit', ['like' => $likes]);
    }


    //更新処理
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'likes_students_id' => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/liketop')
                ->withInput()
                ->withErrors($validator);
        }

        //以下に登録処理を記述（Eloquentモデル）
        $likes = Like::find($request->id);
        $likes->likes_students_id = $request->likes_students_id;
        $likes->likes_teachers_id = $request->likes_teachers_id;
        $likes->likes_navis_id = $request->likes_navis_id;
        $likes->likes_lessons_id = $request->likes_lessons_id;
        $likes->likes_courses_id = $request->likes_courses_id;
        $likes->likes_flag = $request->likes_flag;
        $likes->save();
        return redirect('/liketop');
    }


    //削除処理
    public function destroy(Like $like)
    {
        $like->delete();       //追加
        return redirect('/liketop');  //追加
    }
}
