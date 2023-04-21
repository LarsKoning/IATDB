<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\animal;
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
        return redirect('dashboard')->with('status', 'Animal has been inserted');
    }
}
