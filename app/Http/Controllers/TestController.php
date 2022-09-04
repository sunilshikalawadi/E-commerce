<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index($location = null)
    {
        $title = 'Home';
        $data = compact('location', 'title');
        return view('main')->with($data);
    }
}
