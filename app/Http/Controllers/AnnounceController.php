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

    public function indexAnnounce(){
        $announces = Announce::orderBy('created_at', 'desc')->where('is_accepted', true)->paginate(6);
        return view('announces.indexAnnounce', compact('announces'));
    }

    public function categoryShow(Category $category){
/*  $variabile = Announce::paginate(1);  */

    return view('announces.categoryShow', compact('category'));
    }

    public function detAnnounce(Announce $announce){
        return view('announces.detAnnounce', compact('announce'));
    }

    public function searchAnnounces (Request $request){
/*         dd($request->searched);
 */        $announces = Announce::search($request->searched)->where('is_accepted', true)->paginate(6);

        return view('announces.indexAnnounce', compact('announces'));
    }
}