<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Lesson;

class MyPageController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}
