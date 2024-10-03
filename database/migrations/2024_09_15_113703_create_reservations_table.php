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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("article_id")->required(); 
            $table->foreign('article_id')->references("id")->on("articles")->onUpdate("cascade")->onDelete('cascade');
            
            $table->unsignedBigInteger("voyage_id")->required(); 
            $table->foreign('voyage_id')->references("id")->on("voyages")->onUpdate("cascade")->onDelete('cascade');
            
            $table->unsignedBigInteger("user_id")->required();
            $table->foreign('user_id')->references("id")->on("users")->onUpdate("cascade")->onDelete('cascade');
            
            $table->unsignedBigInteger("company_user_id")->required();
            $table->foreign('company_user_id')->references("id")->on("users")->onUpdate("cascade")->onDelete('cascade');
            
            $table->integer('guest')->required(); 
            
            $table->date('date_depart')->nullable(); // Nullable
            $table->string('lieu_depart')->required(); // Nullable
            $table->integer('statut');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
