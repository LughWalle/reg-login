<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = ['email'=>$request->email, 'password'=>$request->password];
        if(Auth::attempt($credentials)){
            return redirect()->intended('painel');
        }else{
            return redirect()->back()->with('msg', 'Acesso negado para essas credenciais');
        }
    }
    public function painel(){
        return view('auth.painel');
    }
}
