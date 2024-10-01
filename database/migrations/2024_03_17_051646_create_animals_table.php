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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('origine');
            $table->string('robe');
            $table->string('date_nais');
            $table->string('date_arriv');
            $table->string('description');
            $table->string('race');
            $table->string('capacite_prod');
            $table->string('photo');
            $table->string('etat_lactation');
            $table->string('etat_maladie')->default('non');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
