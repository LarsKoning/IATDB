<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location_availability extends Model
{
    use HasFactory;

    protected $primaryKey = 'location';

    public $timestamps = false;

    protected $table = 'location_availability';
}
