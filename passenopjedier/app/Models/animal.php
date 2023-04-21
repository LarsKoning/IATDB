<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    use HasFactory;

    protected $table = 'animals';
    protected $primaryKey = 'animalID';

    public $timestamps = false;

    public function searchMedia(){
        return $this->hasMany('\App\Models\animal_media', "animal", "animalID");
    }
    
    public function whatKind(){
        return $this->belongsTo('\App\Models\sort_of_animals', "sort", "sort");
    }

    public function ownedBy(){
        return $this->belongsTo('\App\Models\User', "owner", "id");
    }
}
