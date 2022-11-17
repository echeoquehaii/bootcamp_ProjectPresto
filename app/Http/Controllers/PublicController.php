<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PublicController extends Controller
{
   

    public function welcome(){
        $announces = Announce::where("is_accepted", true)->get()->reverse()->take(4);
        return view ('welcome', compact ('announces'));
    }

    public function register(){
        return view ('auth.register');
    }

    public function login(){
        return view ('auth.login');
    }

}
