<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        return view('Admin.Category.category');
    }

    public function create(){

        return view('Admin.Category.create');
    }
}
