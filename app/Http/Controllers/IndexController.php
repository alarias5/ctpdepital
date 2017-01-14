<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nav;

class IndexController extends Controller
{
    public function index()
    {
     $nav = Nav::all();
     return view('home', ['nav' =>$nav]);
    }
}
