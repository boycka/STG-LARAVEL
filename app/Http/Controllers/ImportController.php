<?php

namespace App\Http\Controllers;

use App\Imports\EtudiantImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function show (){
        return view('Admin.Etudiant');
    }
    public function store (Request $request) {

        $file = $request->file('file');
        Excel::import(new EtudiantImport, $file);
        return back()->withStatus('Excel file imported successfully');

    }
}
