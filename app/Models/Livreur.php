<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact',
        'nom_societe',
        'presentation',
        'image_profil',
        'image_couverture',
        'localisation',
        'site_web',
        'facebook',
        'instagram',
        'whatsapp',
        'fixe1',
        'fixe2',
        'mobile1',
        'mobile2',
        'map',
        'map_link',
        'servicePicture1',
        'servicename1',
        'servicePicture2',
        'servicename2',
        'servicePicture3',
        'servicename3',
        'images',


        'lundi_heure_debut',
        'lundi_heure_fin',
        'mardi_heure_debut',
        'mardi_heure_fin',
        'mercredi_heure_debut',
        'mercredi_heure_fin',
        'jeudi_heure_debut',
        'jeudi_heure_fin',
        'vendredi_heure_debut',
        'vendredi_heure_fin',
        'samedi_heure_debut',
        'samedi_heure_fin',
        'dimanche_heure_debut',
        'dimanche_heure_fin',
    ];
}
