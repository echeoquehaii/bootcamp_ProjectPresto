<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announce;
use Illuminate\Support\Facades\Auth;

class AnnounceForm extends Component
{
    public $name;
    public $price;
    public $location;
    public $description;
    public $selCategory;


    public function createAnnounce(){
        $user=Auth::user();
        $this->validate();
        $announce=Announce::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'location'=>$this->location,
            'description'=>$this->description,
            'vendor'=>$user->id
            
        ]);
        if($announce){
            $announce->category()->attach($this->selCategory);
        }
        
        
    }


    protected $rules=[
        'name'=>'required | min:3',
        'price'=>'required',
        'location'=>'required',
        'description'=>'required',
    ];







    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.announce-form');
    }
}
