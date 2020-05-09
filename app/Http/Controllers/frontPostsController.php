<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontPostsController extends Controller
{
    function getPosts(){
        $post=\App\Posts::all();
        return response()->json(['posts' => $post]);
    }
}
