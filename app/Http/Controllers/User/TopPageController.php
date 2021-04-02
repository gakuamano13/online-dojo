<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lesson;
use Illuminate\Support\Facades\DB;

class TopPageController extends Controller
{
    public function index()
    {
        // dd($users);

        if(auth()->check() && auth()->user()->role == 'user')
        {
            $users = DB::table('users')->first();
            return view('lesson.index', ['users' => $users])->with('lessons', Lesson::get());
        }
        else
        {
            return view('lesson.index');
        }

        // return response()->json([
        //     'users' => $users
        // ]);

    }

    public function show()
    {
        if(auth()->check())
        {
            return view('lesson.show')->with('lessons', Lesson::get());
        }
        else
        {
            return view('lesson.index');
        }

    }

    public function detail($id)
    {
        return view('lesson.detail')->with('lesson', Lesson::find($id));
    }
}
