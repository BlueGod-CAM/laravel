<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function index(User $user){

        return view("profile");
    }

    public function store(User $user){
        auth()->user()->follow();
    }
}
