<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\animal;
use App\Models\location_availability;
use App\Models\location_media;
use App\Models\sort_of_animal;
use App\Models\location;
use App\Models\review;
use App\Models\search;
use App\Models\User;
use Auth;


class MainController extends Controller
{
    public function show(){
        $animals = animal::all();
        $SOA = sort_of_animal::all();
        $locations = location::all();
        $searching = search::all();
        $user = Auth::user();


        return view('dashboard', [
            'animals' => $animals,
            'SOA' => $SOA,
            'locations' => $locations,
            'searching' => $searching,
            'user' => $user,
        ]);
    }
}
