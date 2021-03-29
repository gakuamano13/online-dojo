<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lesson;
use App\Teacher;
use Validator;
use Auth;

class ListsController extends Controller
{
    public function index()
    {
        $lists = DB::table('lessons')
        ->leftJoin('teachers', 'lessons.teachers_id', '=', 'teachers.id')
        ->leftJoin('navis', 'lessons.navis_id', '=', 'navis.id')
        ->orderBy('lessons.created_at', 'desc')
        ->paginate(5);

        return view('master/lists', [
            'lessons' => $lists,
        ]);
    }
}
