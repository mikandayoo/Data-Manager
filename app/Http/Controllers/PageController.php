<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexPage () {
        return view('index');
    }
    public function inputPage () {
        return view('inputpage');
    }
    public function outputPage () {
        return view('outputpage');
    }
}
