<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PublicController extends Controller
{
    public function __construct()
    {
        $categories=Category::all();
        View::share('categories', $categories);
    }

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
