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
        Schema::create('reclamers', function (Blueprint $table) {
            $table->id();



            $table->string('Objet_rec');
            $table->string('Remarque');
            $table->date('Date_rec');
            $table->date('annee_universitaire');
            $table->timestamps();
            $table->foreignId('etudiant_id')->constrained('etudiants')->cascadeOnDelete();
	        $table->foreignId('professeur_id')->constrained('professeurs')->cascadeOnDelete();
            $table->foreignId('matiere_id')->constrained('matieres')->cascadeOnDelete();
            //$table->primary(['Mat_prof','Code_matiere']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamers');
    }
};

