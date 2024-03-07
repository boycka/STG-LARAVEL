<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    protected  $fillable = ['Code_matiere','Libelle','Code_mod'];

    protected $primaryKey = 'Code_matiere';

    public function Professeur()
    {
        return $this->belongsToMany(Professeur::class, 'Mat_prof');
    }

    public function Etudiant()
    {
        return $this->hasMany(Etudiant::class, 'N_appose');
    }

    public function Module()
    {
        return $this->belongsTo(Model::class, 'Code_mod');
    }
}
