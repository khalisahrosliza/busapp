<?php

// app/Models/Passenger.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    // Define the table if it's not the plural of the model name
    protected $table = 'passengers';

    // Define the fillable properties if using mass assignment
    protected $fillable = [
        'std_id', 'faculty', 'gender', 'residential'
    ];
}

