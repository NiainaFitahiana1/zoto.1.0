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
        Schema::create('boites', function (Blueprint $table) {
            $table->id();
            $table->string("numero");
            $table->string("nom")->nullable("");
            $table->string("reference");
            $table->string("montant");
            $table->string("banque");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boites');
    }
};
