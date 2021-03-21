<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lesson;

class TopPageController extends Controller
{
    public function index()
    {
        return view('lesson.index')->with('lessons', Lesson::get());
    }

    public function show($id)
    {
        return view('lesson.show')->with('lesson', Lesson::find($id));
    }
}
