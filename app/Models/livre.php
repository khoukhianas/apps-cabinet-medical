<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livre extends Model
{
    use HasFactory;
    protected $fillable =['id','Titre','Auteur','Quantite','Categorie','Image','Description'];

    public function locations(){

        return $this->hasMany(Location::class);
    }
}
