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
        Schema::create('administration', function (Blueprint $table) {
            $table->string('Mat_admin');
            $table->primary('Mat_admin');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Email');
            $table->string('Password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administration');
    }
};
