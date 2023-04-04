<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    use HasFactory;

    protected $table = 'animals';

    public function searchMedia(){
        return $this->hasMany('\App\Models\AnimalsMedia', "animal", "animalID");
    }
    
    public function whatKind(){
        return $this->belongsTo('\App\Models\KindOfAnimals', "sort", "sort");
    }

    public function ownedBy(){
        return $this->belongsTo('\App\Models\User', "owner", "id");
    }
}
