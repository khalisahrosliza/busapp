<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerData extends Model
{
    use HasFactory;

    protected $fillable = ['rfid_data', 'passenger_count'];
}
