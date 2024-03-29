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

    public function myAnimals(){
        $user = Auth::user();
        $animals = $user->myAnimals;

        return view('myAnimals', [
            'user' => $user,
            'animals' => $animals,
        ]);
    }

    public function addSearch($id){

        return view('addSearch', [
            'id' => $id,
        ]);
    }

    public function store(Request $request, $id) {
        $NS = new search;
        $NS->owner = Auth::user()->id;
        $NS->for = $id;
        $NS->from = $request->from;
        $NS->to = $request->to;
        $NS->payment = $request->payment;
        $NS->save();


        return redirect('dashboard')->with('status', 'Animal has been inserted into search');
    }


    public function showContact($id){
        $user = Auth::user();
        $search = search::where('id', $id)->first();
        $animal = $search->searchingFor()->first();


        return view('form', [
            'user' => $user,
            'id' => $id,
            'search' => $search,
            'animal' => $animal,
        ]);
    }

    public function edit($id){
        $user = Auth::user();
        $animal = animal::where('animalID', $id)->first();
        return view('editAnimal', [
            'user' => $user,
            'id' => $id,
            'animal' => $animal,
        ]);
    }

    public function update(Request $request, $id){
        $animal = animal::where('animalID', $id)->first();
        $animal->name = $request->input('name');
        $animal->age = $request->input('age');
        $animal->sort = $request->input('sort');
        $animal->note = $request->input('note');
        $animal->update();

        return redirect('/dashboard')->with('status', "animal updated");
    }

    public function delete($id){
        $search = search::find($id);
        $search->delete();
        return redirect('dashboard');
    }
}
