<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{ 
    use HasFactory;

    protected $table = 'sites';

    protected $fillable = [
        
      'longitude',
      'latitude',
      'id_site',
      'dossier',
      'proprietaire',
      'emplacement',
      'type',
      'objet', 
      'statut',
      'autorisation',
      'camouflage',
      'localite',
      'observation',
      'description',
      'date'

    ];

}
