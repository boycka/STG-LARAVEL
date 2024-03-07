<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use App\imports\UsersImport;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $Admine = Administrateur::paginate(100);
        return view('Admin.index');
    }

    // public function import()
    // {
    //     Excel::import(new Usersimport, request()->file('file'));

    //     return redirect('/');
    // }






    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdministrateurController $administrateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdministrateurController $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdministrateurController $administrateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdministrateurController $administrateur)
    {
        //
    }
}
