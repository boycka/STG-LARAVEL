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
        Schema::create('professeurs', function (Blueprint $table) {
            $table->integer('Mat_prof');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Email')->unique();
            $table->string('Niveau');
            $table->string('Filiere');
            $table->string('Telephone');
            $table->string('Password');
            $table->primary('Mat_prof');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professeurs');
    }
};
