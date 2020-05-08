<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class makePostController extends Controller
{
    function makePost(Request $request) {
        if(Auth::check()){
            $posts = new \App\Posts;
            $posts->user_id = $request->id;
            $posts->image = $request->image;
            $posts->title = $request->title;
            $posts->body = $request->body;


            $posts->save();

            return redirect('/backend');
        }
    }
}
