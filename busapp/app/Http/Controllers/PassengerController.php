<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PassengerData;

class PassengerController extends Controller
{
    public function updatePassengerData(Request $request)
    {
        $validated = $request->validate([
            'rfid_data' => 'nullable|string',
            'passenger_count' => 'nullable|integer',
        ]);

        $passengerData = new PassengerData();
        if ($validated['rfid_data'] !== null) {
            $passengerData->rfid_data = $validated['rfid_data'];
        }
        if ($validated['passenger_count'] !== null) {
            $passengerData->passenger_count = $validated['passenger_count'];
        }
        $passengerData->save();

        return response()->json(['message' => 'Data updated successfully'], 200);
    }

    public function index()
    {
        $passengerData = PassengerData::all();
        return view('passenger.index', compact('passengerData'));
    }
}
