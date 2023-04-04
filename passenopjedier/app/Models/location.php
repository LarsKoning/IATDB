<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;

    protected $table = 'location';

    public function whatAnimals(){
        return $this->hasMany('\App\Models\LocationAvailability', "location", "address");
    }

    public function searchMedia(){
        return $this->hasMany('\App\Models\LocationMedia', "location", "address");
    }

    public function findReviews(){
        return $this->hasMany('\App\Models\Reviews', "location", "address");
    }

    public function mediaUser(){
        return $this->belongsTo('\App\Models\User', "owner", "id");
    }

    public function ownedBy(){
        return $this->belongsTo('\App\Models\User', "owner", "id");
    }
}
