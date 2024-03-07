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
        Schema::create('matieres', function (Blueprint $table) {
            $table->string('Code_matiere');
            $table->foreignID('Code_mod')->constrained('modules')->cascadeOnDelete();
            $table->string('Code_mod');
            $table->string('Libelle');
            $table->timestamps();
            $table->primary('Code_matiere');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
