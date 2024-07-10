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
        Schema::create('livreurs', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('nom_societe');
            $table->string('presentation');
            $table->string('image_profil')->nullable();
            $table->string('image_couverture')->nullable();

            $table->string('localisation');
            $table->string('site_web');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->string('fixe1');
            $table->string('fixe2');
            $table->string('mobile1');
            $table->string('mobile2');
            $table->string('map');
            $table->string('map_link');

            $table->string('servicePicture1')->nullable();
            $table->string('servicename1');
            $table->string('servicePicture2')->nullable();
            $table->string('servicename2');
            $table->string('servicePicture3')->nullable();
            $table->string('servicename3');


            $table->string('images')->nullable();

            $table->string('lundi_heure_debut');
            $table->string('lundi_heure_fin');
            $table->string('mardi_heure_debut');
            $table->string('mardi_heure_fin');
            $table->string('mercredi_heure_debut');
            $table->string('mercredi_heure_fin');
            $table->string('jeudi_heure_debut');
            $table->string('jeudi_heure_fin');
            $table->string('vendredi_heure_debut');
            $table->string('vendredi_heure_fin');
            $table->string('samedi_heure_debut');
            $table->string('samedi_heure_fin');
            $table->string('dimanche_heure_debut');
            $table->string('dimanche_heure_fin');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livreurs');
    }
};
