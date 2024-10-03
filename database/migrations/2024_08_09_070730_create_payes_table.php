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
        Schema::create('payes', function (Blueprint $table) {
            $table->id();
            $table->string("reference");
            $table->string("nom_banque");
            $table->string("envoyeur");
            $table->string("destines");
            $table->integer("etat");
            $table->unsignedBigInteger("article_id");
            $table->foreign("article_id")->references("id")->on("articles")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payes');
    }
};
