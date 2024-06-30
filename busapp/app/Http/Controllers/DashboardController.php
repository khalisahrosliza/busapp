<?php

// namespace App\Http\Controllers;
// use App\Models\Passenger;

// use Illuminate\Http\Request;

// class DashboardController extends Controller
// {
//     public function index()
//     {
//         return view('dashboard');

//         // Retrieve all passengers from the database
//         $passengers = Passenger::all();

//         // Pass the passengers data to the view
//         return view('bus_a', compact('passengers'));
//     }
// }
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $genders = DB::table('user_details')
            ->select('gender', DB::raw('count(*) as count'))
            ->groupBy('gender')
            ->get();

        $facultys = DB::table('user_details')
            ->select('faculty', DB::raw('count(*) as count'))
            ->groupBy('faculty')
            ->get();

        $residentials = DB::table('user_details')
            ->select('residential', DB::raw('count(*) as count'))
            ->groupBy('residential')
            ->get();

        $trafficData = DB::table('user_details')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->get();

        return view('bus_a', compact('genders', 'facultys', 'residentials', 'trafficData'));
    }
}
