<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\animal;
use App\Models\animal_media;
use Auth;

class AddAnimalController extends Controller
{
    public function index()
    {
        return view('addAnimal');
    }
    public function store(Request $request)
    {
        $NA = new animal;
        $NA->name = $request->name;
        $NA->owner = Auth::user()->id;
        $NA->age = $request->age;
        $NA->sort = $request->sort;
        $NA->note = $request->note;
        $NA->save();
        
        if ($request->hasFile('filename')) {
            $NAM = new animal_media;
            $NAM->media = $request->file('filename')->store('/assets/Animals', 'public');
            $NAM->animal = $NA->animalID;
            $NAM->save();
        }

        
        return redirect('myAnimals')->with('status', 'Animal has been inserted');
    }
}
