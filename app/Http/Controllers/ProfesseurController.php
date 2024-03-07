<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    public function index(){
        $Professeur = Professeur::all();
        return view('Professeur.index',['Professeur'=>$Professeur]);
    }

    public function create(){
        return view('Professeur.create');
    }

    public function store(request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
        ]);
        Professeur::create($request->post());
        return redirect()->route('Professeur.index');
    }

    public function edit(Professeur $Professeur){
        return view('Professeur.edit',['Professeur'=>$Professeur]);
    }

    public function update(Professeur $Professeur,request $request){
        $data = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
        ]);

        $Professeur->update($data);
        return redirect()->route('Professeur.index');
    }

    public function destroy(Professeur $Professeur){
        $Professeur->delete($Professeur);

        return redirect()->route('Professeur.index');
    }

    public function show(Professeur $Professeur){
        return view('Professeur.show',['Professeur'=>$Professeur]);
    }
}
