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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string("voiture");
            $table->integer("jour_max");
            $table->integer("prix_1");
            $table->json('photos')->nullable();
            $table->integer("prix_2");
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
        Schema::dropIfExists('locations');
    }
};
