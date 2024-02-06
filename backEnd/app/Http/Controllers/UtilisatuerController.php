<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class UtilisatuerController extends Controller
{
    public function loginView(){
        return view('login');
    }

    public function loginLogic(Request $request) {
        $login = $request->login;
        $password = $request->password;
        $credentials = ['login'=>$login, 'password'=>$password];
        // dd($credentials);
        // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // dd(Utilisateur::findOrFail(Auth::id()));
            return to_route("adminV");
        }
        return to_route('loginView')->with('tasjil','cette login nexiste pas') ;
    }

    public function logoutLogic(){
        FacadesSession::flush();
        Auth::logout();
        return redirect()->route('loginView');
    }
}
