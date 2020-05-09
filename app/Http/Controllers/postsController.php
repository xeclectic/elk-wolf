<?php

namespace App\Http\Controllers;
use App\Posts;

use Illuminate\Http\Request;

class postsController extends Controller
{
    public function show(){
        $post=\App\Posts::all();
        return view('home', ['post' => $post]);
    }

}
