<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announce;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AnnounceForm extends Component
{
    public $name;
    public $price;
    public $location;
    public $description;
    public $category;

    public function storeAnnounce(){
        $category = Category::find($this->category);
        $user=Auth::user();
        $this->validate();
        $category->announces()->create([
            'name'=>$this->name,
            'price'=>$this->price,
            'location'=>$this->location,
            'description'=>$this->description,
            'user_id'=>$user->id
            
        ]);
        session()->flash('message', 'Annuncio da revisiorare!');
        redirect (route('indexAnnounce'));
    }
    
    protected $rules=[
        'name'=>'required | min:4',
        'price'=>'required | numeric | digits_between:0,8',
        'location'=>'required',
        'description'=>'required | min:8',
        'category'=>'required',
    ];

    protected $validationAttributes = [
        'name'=> 'nome',
        'price'=> 'prezzo',
        'location'=> 'posizione',
        'description'=> 'descrizione',
        'category'=> 'categoria',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'name.min' => 'Devi inserire almeno 4 caratteri',
        'description.min' => 'Devi inserire almeno 8 caratteri',
        'digits_between' => 'Il campo :attribute puo contenere al massimo 8 cifre',
        'numeric' => 'Il campo :attribute deve essere un numero'
    ];

    protected function cleanForm(){
        $this->name = '';
        $this->category = '';
        $this->price = '';
        $this->location = '';
        $this->description = '';
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.announce-form');
        
    }
}
