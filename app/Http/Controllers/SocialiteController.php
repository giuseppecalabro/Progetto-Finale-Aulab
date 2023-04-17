<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class SocialiteController extends Controller
{
    // FUNZIONE REDIRECT AL PROVIDER
    public function redirect($provider)
    {

        return Socialite::driver($provider)->redirect();
    }

    // FUNZIONE DI CALLBACK DAL PROVIDER
    public function callback($provider)
    {
        try {
            $socialiteUser = Socialite::driver($provider)->user();

            $user = User::where([

                'provider' => $provider,

                'provider_id' => $socialiteUser->getId()

            ])->first();

            if (!$user) {

                $validator = Validator::make(

                    ['email' => $socialiteUser->getEmail()],

                    ['email' => ['unique:users,email']],

                    ['email.unique' => 'La mail è stata già usata']

                );

                $new_user = User::create([

                    'name' => $socialiteUser->getName(),

                    'email' => $socialiteUser->getEmail(),

                    'provider' => $provider,

                    'provider_id' => $socialiteUser->getId(),
                    
                    'imgprofile' => $socialiteUser->getAvatar(),

                    'email_verified_at' => now()

                ]);
                // dd($new_user);
                Auth::login($new_user);

                return view('annunci.addArticle');
            } else {

                Auth::login($user);
                // return redirect('/register')->with('status', 'Ti sei gia registrato con questa email. Effettua il login con email e password');
                return view('annunci.addArticle');
            }

        } catch (\Exception $e) {
            // dd($e);
            return redirect('/login')->with('status', 'L\'email è stata già usata. Prova ad accedere con un\'altra email!');
        }

        // if ($user->email === $socialiteUser->email) {
        //     # code...

        //     return view('annunci.addArticle');
        // } else {
        //     return view('auth.completeRegister');
        // }
    }

    // FUNZIONE PER AGGIORNARE PASSWORD
    public function store(Request $request)
    {
        // Validazione password
        $request->validate([
            'password' => 'required|confirmed|min:9',
        ]);

        // Prendi l'user loggato
        $user = Auth::user();

        // Aggiorna la password dell'utente loggato
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Reindirizzamento alla home
        return Redirect::to('/addArticle')->with('status', 'Password aggiornata con successo');
    }
}
