<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        return view('master/mastertop');
    }

}
