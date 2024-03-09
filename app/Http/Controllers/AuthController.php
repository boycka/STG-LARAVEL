<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage;

class AuthController extends Controller
{
    //
    public function login(){
        if(!empty(Auth::check())){
            if(Auth::user()->user_type == 'Admin'){
                return redirect('Admin/index');
            }
            else if(Auth::user()->user_type == 'Etudiant'){
                return redirect('Etudiant/index');
            }
            else if(Auth::user()->user_type == 'Professeur'){
                return redirect('Professeur/index');
            }
        }
        return view('auth.login');
    }

    public function Authlogin(Request $request){
        $remember = !empty($request->remember) ?true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember)) {
            if(Auth::user()->user_type == 'Admin'){
                return redirect('Admin/index');
            }
            else if(Auth::user()->user_type == 'Etudiant'){
                return redirect('Etudiant/index');
            }
            else if(Auth::user()->user_type == 'Professeur'){
                return redirect('Professeur/index');
            }
            return redirect('Admin.index');
        }else{
            return redirect()->back()->with('error', 'Veuillez saisir l’adresse e-mail et le mot de passe corrects');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url(''));
    }

}
