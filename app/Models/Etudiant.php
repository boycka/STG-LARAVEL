<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Etudiant extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'Etudiant';
    protected  $fillable = ['Password','Telephone','Email','Groupe','Filiere','Niveau','Prenom','Nom','N_appose'];

    protected $primaryKey = 'N_appose';

    public function Professeur()
    {
        return $this->hasMany(Professeur::class, 'Mat_prof');
    }

    // public function Matiere(){
    //     return $this->belongsTo(Matiere::class, 'Code_matiere');
    // }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
