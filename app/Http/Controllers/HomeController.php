<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function addPost()
    {
        return view('new_post');
    }
}