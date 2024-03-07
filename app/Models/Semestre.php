<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;

    protected  $fillable = ['Code_semestre','Libelle'];

    protected $primaryKey = 'Code_semestre';

    public function Module()
    {
        return $this->hasMany(Model::class, 'Code_mod');
    }

}
