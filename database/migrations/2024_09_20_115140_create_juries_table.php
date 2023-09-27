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
        Schema::create('juries', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->unsignedBigInteger('enseignants_id')->unsigned();
            $table->foreign('enseignants_id')->references('id')->on('enseignants')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('maitre_stages_id')->unsigned();
            $table->foreign('maitre_stages_id')->references('id')->on('maitre_stages')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('presidents_id')->unsigned();
            $table->foreign('presidents_id')->references('id')->on('presidents')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('directeur_memoires_id')->unsigned();
            $table->foreign('directeur_memoires_id')->references('id')->on('directeur_memoires')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juries');
    }
};
