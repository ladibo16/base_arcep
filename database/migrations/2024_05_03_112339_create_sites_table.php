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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('localite_id');
            $table->integer('longitude');
            $table->integer('latitude');
            $table->string('id_site');
            $table->string('dossier');
            $table->string('proprietaire');
            $table->string('emplacement');
            $table->string('type');
            $table->string('objet');
            $table->string('statut');
            $table->string('autorisation');
            $table->string('camouflage');
            $table->string('localite');
            $table->mediumText('observation');
            $table->mediumText('description');
            $table->date('date');

    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
