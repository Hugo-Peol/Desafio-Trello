<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        $data['password'] = Hash::make($data['password']);
        
        $user = User::create($data);

        Auth::login($user);
        return to_route('home');
    }

   
}
