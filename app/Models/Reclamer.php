<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamer extends Model
{
    protected  $fillable = ['N_appose','Mat_prof','Code_matiere','Objet_rec','Remarque','Date_rec','annee_universitaire'];

    use HasFactory;
    public function Etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'N_appose');
    }

    public function Professeur()
    {
        return $this->belongsTo(Professeur::class, 'Mat_prof');
    }
}
