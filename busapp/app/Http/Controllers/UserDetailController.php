<?php
namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    public function index()
    {
        dump('This is User Detail page');
        return view('dashboard');
    }
}
