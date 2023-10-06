<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VinoController extends Controller
{
    public function index() {
        $vrednost=['godina','cena','tip'];
        $filters=request($vrednost);
        $search=request('search');
        return view('vina.index', [
            'vina' => Vino::latest()->filter($filters,$search)->paginate(2)
        ]);
    }
    public function show(Vino $vino) {
        return view('vina.show',[
            'vino' => $vino
        ]);
    }
    public function create() {
        return view('vina.kreiraj');
    }
    public function store(Request $request) {
        $formaPole = $request->validate([
            'ime' => ['required',Rule::unique('vino','ime')],
            'godina' => 'required',
            'cena' => 'required',
            'opis' => 'required',
            'vinarija' => 'required',
            'grad' => 'required',
            'adresa' => 'required',
            'tip' => 'required',
            'email' => ['required','email'],
            'strana' => 'required'
        ]);
        if($request->hasFile('slika')) {
            $formaPole['slika'] = $request->file('slika')->store('sliki','public');
        }
        $formaPole['user_id']=auth()->user()->id;
        Vino::create($formaPole);
        //flash messages
        return redirect('/')->with('message','Uspeshno dodadeno vino!');
    }
    public function edit(Vino $vino) {
        return view('vina.izmeni',['vino'=>$vino]);
    }
    public function update(Request $request, Vino $vino) {
        if($vino->user_id != auth()->id()) {
            abort(403,'Neavtorizirana akcija');
        }
        $formaPole = $request->validate([
            'ime' => ['required'],
            'godina' => 'required',
            'cena' => 'required',
            'opis' => 'required',
            'vinarija' => 'required',
            'grad' => 'required',
            'adresa' => 'required',
            'tip' => 'required',
            'email' => ['required','email'],
            'strana' => 'required'
        ]);
        if($request->hasFile('slika')) {
            $formaPole['slika'] = $request->file('slika')->store('sliki','public');
        }
        $vino->update($formaPole);
        //flash messages
        return back()->with('message','Uspeshno izmeneto vino!');
    }
    public function destroy(Vino $vino) {
        if($vino->user_id != auth()->id()) {
            abort(403,'Neavtorizirana akcija');
        }
        $vino->delete();
        return redirect('/')->with('message','Uspeshno izbrishano vino.');
    }
    public function manage() {
        return view('vina.manage',['vina' => auth() -> user() -> vina() -> get()]);
    }
    
}
