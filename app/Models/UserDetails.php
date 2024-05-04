<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = ['card_id', 'faculty', 'gender', 'residential'];

    use HasFactory;
}
