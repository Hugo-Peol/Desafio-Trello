<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        
        return view('login.index');
    }

    public function store(Request $request)
    {
        
        if (!Auth::attempt($request->only(['email', 'password']))){
            return redirect()->back()->withErrors(['Usuário ou senha inválids']);
        }
        return to_route('home');
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }
}
