<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\animal;
use App\Models\search;
use Auth;

class AnimalController extends Controller
{
    public function showSpecific($id){
        $user = Auth::user();
        $search = search::where('id', $id)->first();
        $animal = $search->searchingFor()->first();
        $allMedia =  $animal->searchMedia;

        return view('animalDetails', [
            'user' => $user,
            'id' => $id,
            'search' => $search,
            'animal' => $animal,
            'allMedia' => $allMedia,
        ]);
    }

    public function showContact($id){
        $user = Auth::user();
        $search = Searching::where('id', $id)->first();
        $animal = $search->searchingFor()->first();


        return view('form', [
            'user' => $user,
            'id' => $id,
            'search' => $search,
            'animal' => $animal,
        ]);
    }
}
