<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\animal;
use App\Models\animal_media;
use App\Models\sort_of_animal;
use Auth;

class AddAnimalController extends Controller
{
    public function index()
    {
        $SOA = sort_of_animal::all();
        return view('addAnimal', ['SOA' => $SOA,]);
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
            $file = $request->file('filename');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('assets/Animals');
            $file->move($destinationPath, $fileName);
            $NAM = new animal_media;
            $NAM->media = $fileName;
            $NAM->animal = $NA->animalID;
            $NAM->save();
        }

        
        return redirect('myAnimals')->with('status', 'Animal has been inserted');
    }
}
