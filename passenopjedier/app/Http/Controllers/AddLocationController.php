<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;
use App\Models\location_media;
use Auth;

class AddLocationController extends Controller
{
    public function index()
    {
        return view('addLocation');
    }
    public function store(Request $request)
    {
        $NL = new location;
        $NL->address = $request->address;
        $NL->city = $request->city;
        $NL->owner = Auth::user()->id;
        
        $NLM = new location_media;
        $NLM->location = $request->address;

        $NL->save();
        $NLM->save();

        return redirect('addLocation')->with('status', 'Home had been inserted');
    }
}
