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
            'slug' => ['required', 'string', 'max:255', 'unique:blogs' . $blog->id . ',id'],
            'description' => ['required', 'string'],
            'status' => 'required',
          
        ]);
    
           if($validator->passes()){
    
           
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->status = $request->status;
            $category->update();
    
            $request->session()->flash('success','Category Updated Successfully');
    
            return response()->json([
                'status' => true,
                'msg' =>'Category Udated Successfully',
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

        $category = Category::find($id);

        if(empty($category)){

        $request->session()->flash('error','Category Not Found');

        return response()->json([
            'status' => false,
            'msg' =>'Category Not  Found',
        ]);
        }

        $category->delete();

        $request->session()->flash('success','Category Delete Successfully');
        return response()->json([
            'status' => true,
            'msg' =>'Category Delete Successfully',
        ]);


    }
}