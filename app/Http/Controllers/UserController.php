<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() {
        return view('korisnici.register');
    }
    public function store(Request $request) {
        $polinja = $request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|confirmed|min:6'
        ]);
        $polinja['password']=bcrypt($polinja['password']);
        $user = User::create($polinja);
        auth()->login($user);
        return redirect('/')->with('message','Korisnikot se registrira i najavi');
    }
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/')->with('message','Korisnikot e odjaven');
    }
    public function login() {
        return view('korisnici.login');
    }
    public function authenticate(Request $request) {
        $poleLogin = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);
        if(auth()->attempt($poleLogin)) {
            $request->session()->regenerate();
            return redirect('/')->with('message','Uspeshno se najavivte.');
        }
        return back()->withErrors(['email'=>'Nevalidni parametri'])->onlyInput('email');
    }
}
