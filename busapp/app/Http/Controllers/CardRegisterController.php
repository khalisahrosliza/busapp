<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails; // Correct model import

class CardRegisterController extends Controller
{
    public function index()
    {
        return view('cardregister'); // Ensure this view exists
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'card_id' => 'required|string',
            'std_id' => 'required|string', // This field is missing from the migration
            'faculty' => 'required|string',
            'gender' => 'required|string',
            'residential' => 'required|string',
        ]);

        // Create a new user record
        UserDetails::create([
            'card_id' => $request->card_id,
            'std_id' => $request->std_id,
            'faculty' => $request->faculty,
            'gender' => $request->gender,
            'residential' => $request->residential,
        ]);

        return redirect()->back()->with('success', 'User added successfully');
    }
}
