<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommuteController extends Controller
{
    public function index()
    {
        return view('commute.commuteList');
    }

    public function date()
    {
        return view('commute.date');
    }


}
