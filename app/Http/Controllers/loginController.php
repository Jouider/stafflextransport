<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class loginController extends Controller
{
    public function show(){
        return view('login.show');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email' => $email, 'password' => $password];
        if(Auth::attempt($credentials)){
            // Connecter
            $request->session()->regenerate();
            return redirect()->intended(route('homepage'));
        }else{
            // Pas Connecter 
            return back()->withErrors([
                'email' => 'Email ou mot de passe incorrect.'
            ])->onlyInput('email');
        }
    }
    public function logout(){
        FacadesSession::flush();
        Auth::logout();
        return to_route('auth.login')->with('success',  'Vous etes bien Deconnecte. ');
    }
}
