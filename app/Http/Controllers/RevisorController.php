<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    
    public function indexRevisor(){ 
        $announce_to_check = Announce::where('is_accepted', null)->first();
        return view('revisor.indexRevisor', compact ('announce_to_check'));
    }

}
