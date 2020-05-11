<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class editPostController extends Controller
{
    public function editPost(Request $request, $id){
        if(Auth::check()){
            $post = \App\Posts::find($id);

            return view('editPosts', ['post' => $post]);
        }
    }
    public function updateTweet(Request $request, $id){
        if(Auth::check()){
            $posts=\App\Posts::find($id);
            $posts->user_id = $request->id;
            $posts->title = $request->title;
            $posts->body = $request->body;

            return redirect('/home');
        }
    }
}
