<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function addArticle(){
    
        return view('annunci.addArticle');
    }

    public function showCategory($slug){
        $category= Category::where('slug', $slug)->firstOrFail();
        return view('annunci.showCategory', compact('category'));
    }

    public function showOutwear(){
       
        $coats =  Article::where('is_accepted',true)->where('category_id', 1 )->orderBy('created_at', 'DESC')->get();
        $jackets =  Article::where('is_accepted',true)->where('category_id', 2 )->orderBy('created_at', 'DESC')->get();
        $articles = $coats->merge($jackets);
        // dd($articles);
        // return view('outwear', compact('coats', 'jackets'));
        return view('maincategory.outwear', compact('articles'));
    }

    public function showAccessories(){
       
        $hats =  Article::where('is_accepted',true)->where('category_id', 3 )->orderBy('created_at', 'DESC')->get();
        $glasses =  Article::where('is_accepted',true)->where('category_id', 4 )->orderBy('created_at', 'DESC')->get();
        $sunglasses =  Article::where('is_accepted',true)->where('category_id', 5 )->orderBy('created_at', 'DESC')->get();
        $earrings =  Article::where('is_accepted',true)->where('category_id', 6 )->orderBy('created_at', 'DESC')->get();
        $necklaces =  Article::where('is_accepted',true)->where('category_id', 7 )->orderBy('created_at', 'DESC')->get();
        $bracelets =  Article::where('is_accepted',true)->where('category_id', 8 )->orderBy('created_at', 'DESC')->get();
        $belts =  Article::where('is_accepted',true)->where('category_id', 9 )->orderBy('created_at', 'DESC')->get();
        $bags =  Article::where('is_accepted',true)->where('category_id', 10 )->orderBy('created_at', 'DESC')->get();
        $articles = $hats->merge($glasses)->merge($sunglasses)->merge($earrings)->merge($necklaces)->merge($bracelets)->merge($belts)->merge($bags);
        // return view('accessories', compact('hats','glasses', 'sunglasses', 'earrings', 'necklaces', 'bracelets', 'belts', 'bags'));
        return view('maincategory.accessories', compact('articles'));
    }

    public function showClothing(){
       
        $sweaters =  Article::where('is_accepted',true)->where('category_id', 11 )->orderBy('created_at', 'DESC')->get();
        $tshirts =  Article::where('is_accepted',true)->where('category_id', 12 )->orderBy('created_at', 'DESC')->get();
        $tops =  Article::where('is_accepted',true)->where('category_id', 13 )->orderBy('created_at', 'DESC')->get();
        $shirts =  Article::where('is_accepted',true)->where('category_id', 14 )->orderBy('created_at', 'DESC')->get();
        $trousers =  Article::where('is_accepted',true)->where('category_id', 15 )->orderBy('created_at', 'DESC')->get();
        $jeans =  Article::where('is_accepted',true)->where('category_id', 16 )->orderBy('created_at', 'DESC')->get();
        $skirts =  Article::where('is_accepted',true)->where('category_id', 17 )->orderBy('created_at', 'DESC')->get();
        $articles = $sweaters->merge($tshirts)->merge($shirts)->merge($trousers)->merge($jeans)->merge($skirts);
        return view('maincategory.clothing', compact('articles'));
        // return view('clothing', compact('sweaters', 'tshirts', 'tops', 'shirts' ,'trousers', 'jeans', 'skirts'));
    }

    public function showFootwear(){
       
        $sneakers =  Article::where('is_accepted',true)->where('category_id', 18 )->orderBy('created_at', 'DESC')->get();
        $boots =  Article::where('is_accepted',true)->where('category_id', 19 )->orderBy('created_at', 'DESC')->get();
        $heels =  Article::where('is_accepted',true)->where('category_id', 20 )->orderBy('created_at', 'DESC')->get();
        $articles = $sneakers->merge($boots)->merge($heels);
        // return view('footwear', compact('sneakers', 'boots', 'heels'));
        return view('maincategory.footwear', compact('articles'));

    }



    public function welcome(){
        $articles = Article::where('is_accepted',true)->take(4)->orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('articles'));
    }

    public function showAll(){
        $articles = Article::where('is_accepted',true)->orderBy('created_at', 'DESC')->paginate(6);
        return view('indexCategory' , compact('articles'));
    }
    public function detArticle($slug){
        $article= Article::where('slug', $slug)->firstOrFail();
        $categoryConnected = Article::where("category_id", $article->category_id)->get();
        return view ('annunci.detArticle', compact('article',"categoryConnected"));
    }

    public function faq(){
    
        return view('faq');
    }

    public function aboutUs(){
    
        return view('aboutUs');
    }

    // Funzione vista ricerca
    public function searchArticle(Request $request){
        $request = $request->searched;
        $articles = Article::search($request)->where('is_accepted',true)->where('is_accepted', true)->paginate(6);
        return view('annunci.search', compact('articles', 'request'));
    }

    // funzione per la localizzazione
    public function setLanguage($lang){
        // dd($lang);
       
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
