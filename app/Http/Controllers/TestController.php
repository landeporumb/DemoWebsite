<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home()
    {
        return view('contents.home');
    }

    public function test()
    {
        return view('contents.test');
    }

    public function elements()
    {
        return view('contents.elements');
    }

    public function promotions()
    {
        return view('contents.promotions');
    }

    public function contact()
    {
        return view('contents.contact');
    }
}
