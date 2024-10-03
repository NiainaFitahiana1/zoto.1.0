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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("article_id")->required(); 
            $table->foreign('article_id')->references("id")->on("articles")->onUpdate("cascade")->onDelete('cascade');
            
            $table->unsignedBigInteger("user_id")->required();
            $table->foreign('user_id')->references("id")->on("users")->onUpdate("cascade")->onDelete('cascade');
            
            $table->unsignedBigInteger("company_user_id")->required();
            $table->foreign('company_user_id')->references("id")->on("users")->onUpdate("cascade")->onDelete('cascade');
            
            $table->integer('guest')->required(); 
            $table->enum('type_article', ['voyage', 'location', 'colis'])->required(); 
            
            $table->date('date_reservation')->nullable(); // Nullable
            $table->string('lieu_depart')->required(); // Nullable
            $table->date('date_depart')->nullable(); // Nullable
            $table->date('date_retour')->nullable(); // Nullable
            
            $table->decimal('montant_total', 10, 2)->nullable(); // Nullable
            $table->string('reference_envoi_argent')->nullable(); // Nullable
            $table->enum('moyen_paiement', ['mobile_money', 'carte_bancaire', 'virement_bancaire'])->nullable(); // Nullable
            $table->enum('statut_reservation', ['en_attente', 'confirmée', 'annulée'])->nullable(); // Nullable
            
            $table->datetime('date_paiement')->nullable(); // Nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
