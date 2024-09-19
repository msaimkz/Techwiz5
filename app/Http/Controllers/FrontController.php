<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Gallery;

class FrontController extends Controller
{
    public function index(){

        $blogs = Blog::where('status',1)->latest()->limit(5)->get();

        return view('index',compact('blogs'));
    }

    public function gallery(){

        $galleries = Gallery::where('status',1)->with(['images','subcategory'])->get();

        return view('gallery',compact('galleries'));
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

    public function blogDetail(Request $request, $id){

        $blog = Blog::find($id);

        return view('detail',compact('blog'));
    }

    public function design(){

        return view('design');
    }

    public function category(){

        return view('category.livingroom');
    }

    
}
