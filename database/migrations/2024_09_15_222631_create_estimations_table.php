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
        Schema::create('estimations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->required();
            $table->foreign('user_id')->references("id")->on("users")->onUpdate("cascade")->onDelete('cascade');
            $table->unsignedBigInteger("coli_id")->required();
            $table->foreign('coli_id')->references("id")->on("colis")->onUpdate("cascade")->onDelete('cascade');
            $table->string('description')->nullable();
            $table->string('question')->nullable();
            $table->integer('statut');
            $table->string('reponse');
            $table->string('tarif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimations');
    }
};
