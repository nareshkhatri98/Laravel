<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function HandleDashboard()
    {
        $users = User::all(); 
        return view('userDashboard', compact('users')); 
    }
    public function HandleEdit($id)
    {
        return view('EditUser');
    }
}