<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function check (Request $request) {
        if(Auth::attempt($request->only('login','password'))) {
            $request->session()->regenerate();
            return redirect()->route('homepage'); 
        }
        return redirect()->route('login');
    }

    public function logout (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function login () {
        // User::create([
        //     'name' => "Alisher",
        //     'surname'=>'Baymuratov',
        //     'ochs'=>'Esenbaevich',
        //     'login'=>"aqtuba_apj",
        //     'password' => Hash::make('alisher_aqtuba'),
        // ]);
        return view('welcome');
    }
}
