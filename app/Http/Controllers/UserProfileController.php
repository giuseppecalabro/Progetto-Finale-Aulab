<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Userdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{

    public $firstname;
    public $surname;
    public $phone;
    public $address;
    public $postcode;
    public $city;
    public $country;
    public $imgprofile;
    public $state;

    protected $rules = [
        'firstname' => 'required',
        'surname' => 'required',
        "phone" => "required",
        "address" => "required",
        'postcode' => 'required|numeric',
        'city' => 'required',
        'country'=>'required',
        'state'=>'required',
        'imgprofile' => 'image|max:2048'

    ];

    protected $messages = [
        'firstname.required' => 'Inserire il nome',
        'surname.required' => 'Inserire il cognome',
        'phone.required' => 'Inserire il numero di telefono',
        "address.required" => "Inserire l'indirizzo",
        "postcode.required" => "Inserire il codice postale",
        'postcode.numeric' => 'il codice postale deve essere di soli numeri',
        'city.required' => 'Inserire la città',
        'country.required' => 'Inserire il Paese',
        "state.required" => "Inserire la provincia",
        "imgprofile.image" => "L'immagine deve essere in formato jpg, jprg, png o webp",
        "imgprofile.max" => "L'immagine deve essere grande massimo 2MB",
    ];

    public function showProfile(){
       
        $user = Auth::user();
        // dd($user);
        return view('profile.userProfile', compact('user'));
    }

    public function updateImgProfile(Request $request){
        
        $request->validate([
            'imgprofile' => 'required|image|max:2048'
        ]);
        

        $imgProfileName = Auth::user()->id.'_'.time().'.'.$request->imgprofile->getClientOriginalExtension();
        $request->imgprofile->move(public_path('/imgProfile'), $imgProfileName);

        Auth()->user()->update(['imgprofile'=>"/imgProfile/".$imgProfileName]);

        return back()->with('success_img', 'Immagine profilo aggiornata.');
    }

    
    public function store(Request $request){
        
        $request->validate([
            'firstname' => 'required',
            'surname' => 'required',
            "phone" => "required",
            "address" => "required",
            'postcode' => 'required|numeric',
            'city' => 'required',
            'country'=>'required',
            'state'=>'required',
    
        ]);
        
        
        $user = Auth::user();
        $user->userdetail()->create([
            'user_id' => Auth::user()->id,
            'firstname' => $request->firstname,
            'surname' => $request->surname,
            "phone" => $request->phone,
            "address" => $request->address,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'country'=>$request->country,
            'state'=>$request->state  
        ]);
   
        return back()->with('success_save', 'Dati personali aggiunti.');
    }
    
    public function update(Request $request){
        
        $request->validate([
            'firstname' => 'required',
            'surname' => 'required',
            "phone" => "required",
            "address" => "required",
            'postcode' => 'required|numeric',
            'city' => 'required',
            'country'=>'required',
            'state'=>'required',
    
        ]);

        $user = Auth::user();
        $user->userdetail()->update([
            'firstname' => $request->firstname,
            'surname' => $request->surname,
            "phone" => $request->phone,
            "address" => $request->address,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'country'=>$request->country,
            'state'=>$request->state  
        ]);
        // dd($user, $request);

        return back()->with('success_save', 'Dati personali aggiornati.');
    }

    public function showMyArticle(){
        $user = Auth::user();
        $articles = Article::where('user_id', $user->id)->orderBy('created_at', 'DESC')->paginate(4);
        
        return view('profile.userArticle', compact('articles', 'user'));
    }

    public function deleteArticle(Article $article){

        
        $article->delete();

        return back()->with('success_delete', 'Articolo Eliminato.');

    }

    public function showChangePassword(){
        return view('auth.reset-password');
    }

}
