<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;
use App\Mail\BecomeRevisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ProfileForm extends Component
{   
    public $age;
    public $address;
    public $description;
    public $userAge;
    public $userAddress;
    public $userDescription;
    public $user_id;

    public function storeProfile(){
/*      $profile=Profile::all();
 */
        $userID=Auth::user()->id;
        $userRev=Auth::user()->is_revisor;
        
        

        $profile_user_id = Profile::where('user_id', $userID)->pluck('user_id')->first();
/*          dd($profile_user_id, $userID, $userRev);
 */        $this->validate();

        if(Auth::user()->is_revisor == 1){
            return redirect(route('profileRevisor'))->with('message', 'Sei già revisore, richiesta rifiutata!');
        }elseif($profile_user_id){
            return redirect(route('profileRevisor'))->with('message', 'Hai già inviato la richiesta, aspetta una risposta!');
        }else{
            Profile::create([
                'age'=>$this->age,
                'address'=>$this->address,
                'description'=>$this->description,
                'user_id'=>$userID,
            ]);

            Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
            return redirect(route('profileRevisor'))->with('message', 'Complimenti! Richiesta inviata con successo!');
        }




/*         if((Auth::user()->is_revisor == 0)){
            Profile::create([
                'age'=>$this->age,
                'address'=>$this->address,
                'description'=>$this->description,
                'user_id'=>$userID,
            ]);

            Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
            return redirect(route('profileRevisor'))->with('message', 'Complimenti! Richiesta inviata con successo!');
        }else{
            if($profile_user_id && Auth::user()->is_revisor == 1){
                return redirect(route('profileRevisor'))->with('message', 'Hai già inviato la richiesta, aspetta una risposta!');
            }else{
                return redirect(route('profileRevisor'))->with('message', 'Sei già revisore, richiesta rifiutata!');
            }
        }
 */    }


/* 
            return redirect(route('profileRevisor'))->with('message', 'Sei già revisore, richiesta rifiutata!');
        }elseif($profile_user_id === $userID){
            return redirect(route('profileRevisor'))->with('message', 'Hai già inviato la richiesta, aspetta una risposta!');
        }else{
        } */

/*     public function becomeRevisor(){
        if(Auth::user()->is_revisor != true){
            Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
            return redirect(route('profileRevisor'))->with('message', 'Complimenti! Richiesta inviata con successo!');
        }else{
            return redirect(route('profileRevisor'))->with('message', 'Sei già revisore, richiesta rifiutata!');
        }
    }
 */
    protected $rules=[
        'age'=>'required | numeric |',
        'address'=>'required',
        'description'=>'required | min:8',
    ];

    protected $validationAttributes = [
        'age'=> 'età',
        'address'=> 'indirizzo',
        'description'=> 'descrizione',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'age.max' => 'Stentiamo a credere che lei abbia più di 99 anni. In caso contrario, inserisca 99 e spieghi nella descrizione la sua situazione, verrà contattato da noi per risolvere la situazione manualmente',
        'description.min' => 'Devi inserire almeno 8 caratteri',
        'digits_between' => 'Il campo :attribute puo contenere al massimo 8 cifre',
        'numeric' => 'Il campo :attribute deve essere un numero'
    ];


    public function render()
    {
        return view('livewire.profile-form');
    }
}
