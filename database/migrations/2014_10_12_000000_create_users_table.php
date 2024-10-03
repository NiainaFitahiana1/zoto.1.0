<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_telephone')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_siege')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('telephone')->unique();
            $table->string('adresse');
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger("role_id");
            $table->foreign("role_id")->references("id")->on("roles")->onUpdate('cascade')->onDelete("cascade");
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'telephone' => '0336142848',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'adresse' => 'II Vi Adreese',
            'role_id' => 3, // Assurez-vous que ce rôle existe dans la table roles
            'password' => Hash::make('123456789'), // Hachez le mot de passe pour la sécurité
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
