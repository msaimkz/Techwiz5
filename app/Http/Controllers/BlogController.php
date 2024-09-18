<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use App\Rules\Alpha;


class BlogController extends Controller
{
    public function index(){

        $blogs = Blog::all();

       

        return view('Admin.Blog.blog',compact('blogs'));
    }

    public function create(){

        return view('Admin.Blog.create');
    }

    public function store(Request $request){

       
       $validator = Validator::make($request->all(),[
        'title' => ['required', 'string', 'max:255'],
        'slug' => ['required', 'string', 'max:255', 'unique:blogs'],
        'description' => ['required', 'string'],
        'status' => 'required',

       ]);

       if($validator->passes()){

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->status = $request->status;
        $blog->save();

        $request->session()->flash('success','Blog Added Successfully');

        return response()->json([
            'status' => true,
            'msg' =>'Blog Added Successfully',
        ]);

       }
       else{

        return response()->json([
            'status' => false,
            'errors' => $validator->errors(),
        ]);
       }
    }

    public function edit(Request $request, $id){

        $blog = Blog::find($id);

        if(empty($blog)){

        $request->session()->flash('error','Blog Not Found');

            return redirect()->route("Admin.blog");
        }

        return view('Admin.Blog.edit',compact('blog'));

    }

    public function update(Request $request,$id){
        $blog = Blog::find($id);

        if(empty($blog)){

        $request->session()->flash('error','Blog Not Found');

            return redirect()->route("Admin.blog");
        }

        $validator = Validator::make($request->all(), [

            'title' => ['required', 'string', 'max:255'],
            'slug' => 'required|unique:blogs,slug,' . $blog->id . ',id',
            'description' => ['required', 'string'],
            'status' => 'required',
          
        ]);
    
           if($validator->passes()){
    
           
        
            $blog->title = $request->title;
            $blog->slug = $request->slug;
            $blog->description = $request->description;
            $blog->status = $request->status;
            $blog->update();
    
            $request->session()->flash('success','blog Updated Successfully');
    
            return response()->json([
                'status' => true,
                'msg' =>'blog Udated Successfully',
            ]);
    
           }
           else{
    
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);
           }
    
    }

    public function destroy(Request $request,$id){

        $blog = Blog::find($id);

        if(empty($blog)){

        $request->session()->flash('error','Blog Not Found');

        return response()->json([
            'status' => false,
            'msg' =>'Blog Not  Found',
        ]);
        }

        $blog->delete();

        $request->session()->flash('success','Blog Delete Successfully');
        return response()->json([
            'status' => true,
            'msg' =>'Blog Delete Successfully',
        ]);


    }
}