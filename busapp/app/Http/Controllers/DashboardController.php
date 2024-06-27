<?php

namespace App\Http\Controllers;
use App\Models\Passenger;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');

        // Retrieve all passengers from the database
        $passengers = Passenger::all();

        // Pass the passengers data to the view
        return view('bus_a', compact('passengers'));
    }
}
