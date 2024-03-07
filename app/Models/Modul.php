<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected  $fillable = ['Code_mod','Libelle','Code_semestre'];

    protected $primaryKey = 'Code_mod';

    public function Matiere()
    {
        return $this->hasMany(Matiere::class, 'Code_matiere');
    }

    public function Semestre()
    {
        return $this->belongsTo(Semestre::class, 'Code_semestre');
    }

}
