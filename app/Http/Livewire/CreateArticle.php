<?php

namespace App\Http\Livewire;

use App\Jobs\ResizeImage;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

use App\Http\Livewire\File;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Jobs\WaterMark;

class CreateArticle extends Component
{
    use WithFileUploads;

    public $category;
    public $price;
    public $title;
    public $description;
    public $city;
    public $article;
    public $temporary_images;
    public $images = [];
    public $image;
    public $descriptionLength = 0;

    protected $rules = [
        'category' => 'required',
        'price' => 'required|numeric|min:0.1',
        "title" => "required|min:3",
        "description" => "required|min:20|max:300",
        "city" => "required",
        'images.*' => 'image|max:2048|required',
        'temporary_images.*' => 'image|max:2048|required',
        'images'=>'max:5|required',
        'temporary_images'=>'max:5|required'

    ];

    protected $messages = [
        'category.required' => 'Inserire una categoria',
        'price.required' => 'Inserire un prezzo',
        'price.numeric' => 'Inserire un prezzo valido',
        'price.min' => 'Inserire un prezzo minimo di 0.1',
        "title.required" => "Inserire il nome dell'articolo",
        "title.min" => "Il nome deve avere almeno 3 caratteri",
        'description.required' => 'Inserire una descrizione',
        'description.min' => 'Descrizione di almeno 20 caratteri',
        'description.max' => 'Descrizione di massimo 300 caratteri',

        "city.required" => "Inserire la città",
        "images.image" => "L'immagine deve essere in formato jpg, jpeg o png",
        "temporary_images.*.image" => "L'immagine deve essere in formato jpg, jpeg, png",
        "images.max" => "L'immagine deve essere grande massimo 2MB",
        "temporary_images.*.max" => "L'immagine deve essere grande massimo 2MB",
        'images.max'=>'Massimo 5 foto',
        'temporary_images.max'=>'Massimo 5 foto',
        'images.required' => "Devi inserire almeno un'immagine",
        'temporary_images.required' => "Devi inserire almeno un'immagine",


    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate(['temporary_images.*' => 'image'])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
                // $this->images = [];
                // $this->temporary_images = [];
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
            unset($this->temporary_images[$key]);

        }
    }

    public function updatedDescription()
    {
        $this->descriptionLength = strlen($this->description);
    }


    public function store()
    {
        $this->validate();
        // $category = Category::find($this->category);

        $this->article =  Category::find($this->category)->articles()->create($this->validate());
        if (count($this->images)) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(["path" => $image->store($newFileName, "public")]);
                
                // LISTA DEI JOB
                RemoveFaces::withChain([

                    // Job che fa il resize delle immagini
                   new ResizeImage($newImage->path, 400,300),
                    // Job che verifica la sicurezza delle immagini
                   new GoogleVisionSafeSearch($newImage->id),
                   new GoogleVisionLabelImage($newImage->id),
                   new WaterMark($newImage->id)
                ])->dispatch($newImage->id);
            }

        }

        $this->article->user()->associate(Auth::user());
        $this->article->save();


        session()->flash('message', 'Articolo aggiunto con successo. Sarà pubblicato dopo la revisione');
        $this->clean();
    }

    public function clean()
    {
        $this->category = '';
        $this->price = '';
        $this->title = '';
        $this->description = '';
        $this->city = '';
        $this->images = [];
        $this->temporary_images = [];
    }




    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-article', compact('categories'));
    }
}