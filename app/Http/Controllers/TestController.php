<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function test()
    {
        return view('test');
    }
}
