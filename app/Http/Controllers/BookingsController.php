<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Validator;
use Auth;

class BookingsController extends Controller
{
    //表示
    public function index()
    {
        $bookings = Booking::orderBy('created_at', 'desc')->paginate(3);
        return view('master/bookings/bookings', [
            'bookings' => $bookings
        ]);
    }


    //登録
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'bookings_students_id' => 'required',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/bookingtop')
                ->withInput()
                ->withErrors($validator);
        }
        
        //以下に登録処理を記述（Eloquentモデル）
        $bookings = new Booking;
        $bookings->bookings_students_id = $request->bookings_students_id;
        $bookings->bookings_datetime = $request->bookings_datetime;
        $bookings->bookings_lessons_id = $request->bookings_lessons_id;
        $bookings->bookings_courses_id = $request->bookings_courses_id;
        $bookings->bookings_flag = $request->bookings_flag;
        $bookings->save(); 
        return redirect('/bookingtop');


    } 


    //更新画面
    public function edit(Booking $bookings)
    {
        return view('master/bookings/bookingsedit', ['booking' => $bookings]);
    }


    //更新処理
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'bookings_students_id' => 'required',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/bookingtop')
                ->withInput()
                ->withErrors($validator);
        }
        
        //以下に登録処理を記述（Eloquentモデル）
        $bookings = Booking::find($request->id);
        $bookings->bookings_students_id = $request->bookings_students_id;
        $bookings->bookings_datetime = $request->bookings_datetime;
        $bookings->bookings_lessons_id = $request->bookings_lessons_id;
        $bookings->bookings_courses_id = $request->bookings_courses_id;
        $bookings->bookings_flag = $request->bookings_flag;
        $bookings->save(); 
        return redirect('/bookingtop');
    } 


    //削除処理
    public function destroy(Booking $booking)
    {
        $booking->delete();       //追加
        return redirect('/bookingtop');  //追加
    }
}
