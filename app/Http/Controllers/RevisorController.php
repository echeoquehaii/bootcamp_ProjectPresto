<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announce;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    
    public function indexRevisor(){ 
        $announce_to_check = Announce::where('is_accepted', null)->first();
        return view('revisor.indexRevisor', compact ('announce_to_check'));
    }

    public function acceptAnnounce(Announce $announce){
        $announce->setAccepted(true);
        return redirect()->back()->with('message', trans('ui.annuncioAccettato'));
    }

    public function rejectAnnounce(Announce $announce){
        $announce->setAccepted(false);
        return redirect()->back()->with('message', trans('ui.annuncioRifiutato'));
    }

    public function profileRevisor(){
        return view('revisor.profileRevisor');
    }

/*     public function becomeRevisor(){
        if(Auth::user()->is_revisor != true){
            Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
            return redirect()->back()->with('message', 'Complimenti! Richiesta inviata con successo!');
        }else{
            return redirect()->back()->with('message', 'Sei già revisore, richiesta rifiutata!');
        }
    }
 */
    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', trans('ui.diventatoRevisore'));
    }

  
}
