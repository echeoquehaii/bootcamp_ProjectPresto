<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announce;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Jobs\AddWatermark;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AnnounceForm extends Component
{
    use WithFileUploads;

    public $name;
    public $price;
    public $location;
    public $description;
    public $category;
    public $temporary_images;
    public $images = [];
    public $announce;

    public function storeAnnounce()
    {

        /*  FUNZIONE FUNZIONANTE PER LE IMMAGINI INCREDIBBBILMENTE   */

        $user = Auth::user();
        $this->validate();
        $this->announce = Category::find($this->category)->announces()->create([
            'name' => $this->name,
            'price' => $this->price,
            'location' => $this->location,
            'description' => $this->description,
            'user_id' => $user->id
        ]);

        if (count($this->images)) {
            foreach ($this->images as $image) {
                /*  $this->announce->images()->create(['path'=>$image->store('images', 'public')]);  */
                $newFileName = "announces/{$this->announce->id}";
                $newImage = $this->announce->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400, 300),
                    new GoogleVisionSafeSearch($newImage->id),  
                    new GoogleVisionLabelImage($newImage->id),  
/*                  new AddWatermark($newImage->id),   */
                ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        session()->flash('message', trans('ui.attesaRevisione'));
        redirect(route('indexAnnounce'));



        /*  VECCHIA FUNZIONE STORE     */
        /*  
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
                session()->flash('message', 'Annuncio in attesa di revisione');
                redirect (route('indexAnnounce'));
            }

        */

        /*  FUNZIONE DI AULAB  */
        /*      $this->announce = Category::find($this->category)->announces()->create($this->validate());
                $this->announce->user()->associate(Auth::user());
                $this->announce->save();
        */
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    protected $rules = [
        'name' => 'required|min:4',
        'price' => 'required|numeric|digits_between:0,8',
        'location' => 'required',
        'description' => 'required|min:8',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024'

    ];

    protected $validationAttributes = [
        'name' => 'nome',
        'price' => 'prezzo',
        'location' => 'posizione',
        'description' => 'descrizione',
        'category' => 'categoria',
        'images' => 'immagini',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'name.min' => 'Devi inserire almeno 4 caratteri',
        'description.min' => 'Devi inserire almeno 8 caratteri',
        'digits_between' => 'Il campo :attribute puo contenere al massimo 8 cifre',
        'numeric' => 'Il campo :attribute deve essere un numero',
        'images.image' => 'L\'immagine dev\'essere un file immagine',
        'images.max' => 'L\'immagine dev\'essere al massimo di 1mb',
    ];

    protected function cleanForm()
    {
        $this->name = '';
        $this->category = '';
        $this->price = '';
        $this->location = '';
        $this->description = '';
        $this->image = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.announce-form');
    }
}
