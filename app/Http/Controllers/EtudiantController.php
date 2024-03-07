<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $Etudiants=Etudiant::all();
        // return view('Etudiant.index',['Etudiant'=>$Etudiants]);
        return view('Etudiant.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'groupe'=>'required',
            'filiere'=>'required',
            'niveau'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'password'=>'required',
        ]);

        Etudiant::create($request->post());

        return redirect()->route('Etudiant.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $Etudiant)
    {
        return view('Etudiant.show', ['Etudiant'=>$Etudiant]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $Etudiant)
    {
        return view('Etudiant.edit',['Etudiant'=>$Etudiant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $Etudiant)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'groupe'=>'required',
            'filiere'=>'required',
            'niveau'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'password'=>'required'
        ]);

        $Etudiant->fill($Etudiant->post())->save();
        return redirect()->route('Etudiant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $Etudiant)
    {
        $Etudiant->delete();
        return redirect()->route('Etudiant.index');
    }
}
