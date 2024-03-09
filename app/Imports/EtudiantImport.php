<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\Etudiant;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EtudiantImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {

            return new Etudiant ([
                'N_appose'=>$row[0],
                'Nom' => $row[1] ,
                'Prenom' => $row[2] ,
                'Niveau' => $row[3] ,
                'Filiere' => $row[4],
                'Groupe' => $row[5],
                'Telephone' => $row[6],

            ]);

    }
}
