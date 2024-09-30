<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function Demo(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:225',
            'email'=> 'required|email|max:225|unique:users',
            'password'=> 'required|string|min:8'
            // 'password'=> 'required|string|min:8|confirmed'
        ]);

        // dd($request);
        User::create($validate);
        return redirect(route('contact'));

    }

}
