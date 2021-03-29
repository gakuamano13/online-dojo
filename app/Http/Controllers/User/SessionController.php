<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lesson;

class SessionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($id)
    {
        return view('lesson.session')->with('lesson', Lesson::find($id));
    }
}
