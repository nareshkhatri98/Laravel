<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/about', function (){
    return view('about');
});

Route:: get('/contact', function(){
    return view('contact');
})->name('login');



Route:: get('/register', function(){
    return view('register');
});



// routs for register the user
Route:: post('/register',[userController:: class, 'Demo'] ) ->name("UserRegister");

// routes for redirect the login page..

Route:: post('/contact',[ContactController:: class, 'Contact']) ->name('contact') ;


// routes for login
Route:: post('/dashboard1', [LoginController:: class, 'Login' ])->name('UserLogin');

// routes for dashboard
Route::get('/dashboard', function(){
    return view('userDashboard');
})->name('userDashboard')->middleware('auth');

// routes for dashboard
Route::get('/dashboard',[DashboardController:: class, 'HandleDashboard'] )->name('HandleDashboard')->middleware('auth');


// routes for edit
Route::get('user/{id}edit', function (){
    return view('EditUser');
});
