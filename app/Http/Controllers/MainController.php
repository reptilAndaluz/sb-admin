<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\view\view;

class MainController extends Controller
{
    function index() {
        return view('index');
    }
}
