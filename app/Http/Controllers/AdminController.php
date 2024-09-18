<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    
    
 public function dashboard(){

    return view('Admin.dashboard');
 }

 public function profile(){

    return view('Admin.Profile.profile');
 }

}


