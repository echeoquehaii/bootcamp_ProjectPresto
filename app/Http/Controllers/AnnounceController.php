<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnounceController extends Controller
{
    public function createAnnounce(){
        return view('announces.createAnnounce');
    }

    public function announce(){
        $announces = Announce::paginate(2);
        return view('announces.announce', compact('announces'));
    }

    public function categoryShow(Category $category){
        return view('announces.categoryShow', compact('category'));
    }

    public function detAnnounce(Announce $announce){
        return view('announces.detAnnounce', compact('announce'));
    }
    
   
}
