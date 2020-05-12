<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;

class deletePostController extends Controller
{
    public function deletePost($id) {
        if(Auth::check()){
        $post = \App\Posts::find($id);
        $post -> delete();

        return redirect('/home');

        }
    }
}
