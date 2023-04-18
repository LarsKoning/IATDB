<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sort_of_animal extends Model
{
    protected $table = 'sort_of_animals';

    public function allAnimals(){
        return $this->hasMany('\App\Models\animal', "sort", "sort");
    }
}
