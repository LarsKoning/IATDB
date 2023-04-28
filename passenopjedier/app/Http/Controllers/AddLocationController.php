<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;
use App\Models\location_media;
use App\Models\location_availability;
use App\Models\sort_of_animal;
use Auth;

class AddLocationController extends Controller
{
    public function index()
    {
        $SOA = sort_of_animal::all();
        return view('addLocation', ['SOA' => $SOA,]);
    }
    public function store(Request $request)
    {
        $NL = new location;
        $NL->address = $request->address;
        $NL->city = $request->city;
        $NL->owner = Auth::user()->id;
        $NL->save();

        foreach($request->available as $available) {
            $NLA = new location_availability;
            $NLA->for = $available;
            $NLA->location = $request->address;
            $NLA->save();
        }
        
        if ($request->hasFile('filename')) {
            $file = $request->file('filename');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('assets/Locations');
            $file->move($destinationPath, $fileName);
            $NLM = new location_media;
            $NLM->media = $fileName;
            $NLM->location = $request->address;
            $NLM->save();
        }

        else{
            $NLM = new location_media;
            $NLM->location = $request->address;
            $NLM->save();
        }


        return redirect('dashboard')->with('status', 'Home had been inserted');
    }
}
