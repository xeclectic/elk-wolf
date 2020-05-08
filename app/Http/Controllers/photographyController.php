<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class photographyController extends Controller
{
    public function index()
    {
        return view('photography');
    }
}
