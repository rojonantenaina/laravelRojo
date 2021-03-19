<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = ['nomPersonnel','prenomPersonnel','dateNais','lieuNais','pere','mere','sexe','CIN','situation','nbEnfant','adresse','mail','telephone'];
}
