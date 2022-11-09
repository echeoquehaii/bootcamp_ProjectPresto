<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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

    public function announce(){
        $announces = Announce::all();
        return view('announces.announce', compact('announces'));
    }

    public function categoryShow(Category $category){
        return view('announces.categoryShow', compact('category'));
    }
}
