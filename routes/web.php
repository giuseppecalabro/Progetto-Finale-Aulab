<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
// ROTTA AGGIUNGI ARTICOLO
Route::get('/addArticle', [PublicController::class, 'addArticle'])->middleware('auth')->name('addArticle');
// ROTTA MOSTRA ARTICOLI PER CATEGORIA
Route::get('/{slug}', [PublicController::class, 'showCategory'])->name('showCategory');
// ROTTA PER TUTTE LE CATEGORIE
Route::get('/category/all', [PublicController::class, 'showAll'])->name('allArticle');
// ROTTA PER TUTTE LE OUTWEAR
Route::get('/category/outwear', [PublicController::class, 'showOutwear'])->name('outwear');
// ROTTA PER TUTTE LE CLOTHING
Route::get('/category/clothing', [PublicController::class, 'showClothing'])->name('clothing');
// ROTTA PER TUTTE LE ACCESSORIES
Route::get('/category/accessories', [PublicController::class, 'showAccessories'])->name('accessories');
// ROTTA PER TUTTE LE FOOTWEAR
Route::get('/category/footwear', [PublicController::class, 'showFootwear'])->name('footwear');



// ROTTA PER VISIONE DETTAGLIO
Route::get('/article/{slug}', [PublicController::class, 'detArticle'])->name('detArticle');
// ROTTA PER FAQ
Route::get('/presto/faq', [PublicController::class, 'faq'])->name('faq');
// ROTTA PER ABOUT US
Route::get('/presto/aboutus', [PublicController::class, 'aboutUs'])->name('aboutUs');
// ROTTA PER CHIEDERE DI LAVORARE
Route::get('/presto/lavoraconnoi' , [RevisorController::class, 'becomeRevisor'])->middleware(['auth', 'verified'])->name('becomeRevisor');
// ROTTA PER RENDERE REVISORE
Route::get('/revisore/{user}' , [RevisorController::class, 'makeRevisor'])->middleware('auth')->name('makeRevisor');
// ROTTA PER HOME REVISORE
Route::get('/revisor/home',[RevisorController::class, 'indexRevisor'])->middleware('isRevisor')->name('indexRevisor');
// ROTTA PER ACCETTARE L'ANNUNCIO DAL REVISORE
Route::patch('/accepted/{article}',[RevisorController::class, 'acceptArticle'])->middleware('isRevisor')->name('acceptArticle');
// ROTTA PER RIFIUTARE L'ANNUNCIO DAL REVISORE
Route::patch('/reject/{article}',[RevisorController::class, 'rejectArticle'])->middleware('isRevisor')->name('rejectArticle');
// ROTTA PER VISUALIZZAZIONE DI TUTTI GLI ARTICOLI CONFERMATI E RIFIUTATI
Route::get('/revisor/confirmation', [RevisorController::class, 'confirmationRevisor'])->middleware('isRevisor')->name('confirmationRevisor');

// ROTTA PER RICERCA ARTICOLI
Route::get('/ricerca/articolo', [PublicController::class, 'searchArticle'])->name('searchArticle');

// ROTTA PER LA LOCALIZZAZIONE DEL SITO
Route::post('/lang/{lang}', [PublicController::class, 'setLanguage'])->name('setLanguage');

Route::get('/lang/{lang?}', function ($lang = null) {
    if (isset($lang) && in_array($lang, config('app.available_locales'))) {
        app()->setLocale($lang);
    }
    return view('welcome');
});

// ROTTA PER RICHIESTA VERIFICA EMAIL
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
// ROTTA CHE VERIFICA EMAIL
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/addArticle');
})->middleware(['auth', 'signed'])->name('verification.verify');
// ROTTA PER CHIEDERE NUOVAMENTE LA VERIFICA EMAIL
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// ROTTE LOGIN PER GITHUB / GOOGLE
Route::get('/auth/{provider}/redirect', [SocialiteController::class, 'redirect'])->where('provider', 'github|google');
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'callback'])->where('provider', 'github|google');
// Route::get('/auth/completeregister', [SocialiteController::class, 'completeRegister'])->name('completeRegister');
// ROTTA PER l'AGGIUNTA PASSWORD DA EVENTUALE PAGINA PROFILO
Route::patch('/auth/createpassword', [SocialiteController::class, 'store'])->name('createpassword');

// ROTTE PER IL PROFILO UTENTE
// Rotta per la pagina profilo
Route::get('/user/profile', [UserProfileController::class, 'showProfile'])->middleware('auth')->name('profile');
// Rotta update immagine profilo
Route::patch('/update/imgprofile', [UserProfileController::class, 'updateImgProfile'])->middleware('auth')->name('updateImgProfile');
// Rotta primo inserimento dati profilo
Route::put('/update/savedatails', [UserProfileController::class, 'store'])->middleware('auth')->name('saveDetails');
// Rotta update dettagli profilo
Route::patch('/update/updatedatails', [UserProfileController::class, 'update'])->middleware('auth')->name('updateDetails');
// Rotta i miei articoli
Route::get('/user/myarticles', [UserProfileController::class, 'showMyArticle'])->middleware('auth')->name('showmyarticle');
// Rotta elimina articolo
Route::delete('/delete/{article}', [UserProfileController::class, 'deleteArticle'])->middleware('auth')->name('deleteArticle');
