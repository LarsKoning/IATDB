<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;
use App\Models\review;
use Auth;

class AddReviewController extends Controller
{
    public function index($address)
    {
        return view('addReview', [
            'address' => $address,
        ]);
    }

    public function store(Request $request, $location)
    {
        $NR = new review;
        $NR->review = $request->review;
        $NR->rating = $request->rating;
        $NR->location = $location;
        $NR->save();

        return redirect('location')->with('status', 'Home had been inserted');
    }
}
