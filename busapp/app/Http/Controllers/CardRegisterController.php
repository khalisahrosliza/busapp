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

    //ni baru tambah
    public function readCardId()
    {
        // Communicate with the RFID reader and get the card ID
        // This is a placeholder example. You'll need to implement the actual RFID reader logic.
        $cardId = $this->getCardIdFromReader();

        return response()->json(['card_id' => $cardId]);
    }
//ni baru tambah
    private function getCardIdFromReader()
    {
        // Implement the logic to communicate with the RFID reader and return the card ID.
        // For example, this could be an API call to a service that interacts with the RFID reader.
        return '1234567890'; // Example card ID
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


