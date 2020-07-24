<?php

namespace App\Http\Controllers;

use App\social;
use App\User;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index(){
        $posts=social::with("user")->latest()->get();

        return view("home",compact("posts"));
    }

    public function store(Request $request){
        $request->validate([
           "content"=>"required",
        ]);

        $post=new social();
        $post->user_id=auth()->user()->id;
        $post->status=$request->status;
        $post->content=\request("content");
        $post->save();

        return redirect("/index");

    }
}
