<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function indexRevisor()
    {
        $article_to_check = Article::where("is_accepted", null)->get();
        return view("revisor.index", compact("article_to_check"));
    }

    // FUNZIONE PER ACCETTARE L'ARTICOLO
    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with("message", "Annuncio accettato");
    }
    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with("message", "Annuncio rifiutato");
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with("message", "Invio richiesta riuscito");
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ['email' => $user->email]);
        return redirect('/')->with("message", "L'utente è diventato revisore");
    }

    public function confirmationRevisor()
    {
        $articles_accepted = Article::where("is_accepted", 1)->get();
        $articles_rejected = Article::where("is_accepted", 0)->get();
        $articles = $articles_accepted->merge($articles_rejected)->toQuery()->paginate(12);
        return view ("revisor.confirmationRevisor", compact("articles"));
    }
}