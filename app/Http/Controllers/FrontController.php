<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class FrontController extends Controller
{
    public function index(){

        $blogs = Blog::where('status',1)->latest()->limit(5)->get();

        return view('index',compact('blogs'));
    }

    public function gallery(){

        return view('gallery');
    }

    public function contact(){

        return view('contact');
    }

    public function about(){

        return view('about');
    }

    public function blog(){
        $blogs = Blog::where('status',1)->latest()->get();

        return view('blog',compact('blogs'));
    }

    public function blogDetail(){

        return view('detail');
    }

    public function design(){

        return view('design');
    }

    public function category(){

        return view('category.livingroom');
    }

    
}
