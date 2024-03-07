<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->integer('N_appose');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Niveau');
            $table->string('Filiere');
            $table->string('Groupe');
            $table->string('Email')->unique();
            $table->string('Telephone');
            $table->string('Password');
            $table->primary('N_appose');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
