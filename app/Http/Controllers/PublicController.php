<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){
        return view ('welcome');
    }

    public function register(){
        return view ('auth.register');
    }

    public function login(){
        return view ('auth.login');
    }

    public function createAnnounce(){
        return view('announces.createAnnounce');
    }
}
