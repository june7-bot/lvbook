<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    public function index(Request $request){
        $articles =  Auth::user()->articles()->get();
        $name = Auth::user()->name;

        return view('user.mypage', compact('articles', 'name'));
    }
}
