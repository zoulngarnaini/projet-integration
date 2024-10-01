<?php

use App\Models\Animal;
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
        Schema::create('laits', function (Blueprint $table) {
            $table->id();
            $table->string('quantite_total');
            $table->string('quantite_veau');
            $table->string('quantite_famille');
            $table->date('date');
            $table->foreignIdFor(Animal::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laits');
    }
};
