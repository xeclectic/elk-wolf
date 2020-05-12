<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class makePostController extends Controller
{
    function makePost(Request $request) {
        if(Auth::check()){
            if($request->hasFile('image')){
                $imagename = $request->image->getClientOriginalName();
                $request->image->storeAs('public', $imagename);

                $posts = new \App\Posts;
            $posts->user_id = $request->id;
            $posts->image = $imagename;
            $posts->title = $request->title;
            $posts->description = $request->description;
            $posts->body = $request->body;


            $posts->save();

            return redirect('/backend');
            }
        }
    }
}
