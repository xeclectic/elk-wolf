<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model

{
    Protected $table = "posts";
    Public $timestamp = false;

    function User (){
        return $this->belongsTo('App\User');
    }

    function Categories(){
        return $this->belongsTo('App\Categories');
        // has many or belongs to?
    }
}
