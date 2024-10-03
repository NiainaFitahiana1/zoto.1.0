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
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string("ville");
            $table->string("bureau");
            $table->string("numero");
            $table->string("ville_2")->nullable();
            $table->string("bureau_2")->nullable();
            $table->string("numero_2")->nullable();
            $table->string("prix")->nullable();
            $table->string("pmax")->nullable();
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
        Schema::dropIfExists('colis');
    }
};
