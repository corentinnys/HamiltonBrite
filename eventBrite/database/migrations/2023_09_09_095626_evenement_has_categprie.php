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
        Schema::create('evenement_has_categorie', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('categorie');
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('categorie')->references('id')->on('categorie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
