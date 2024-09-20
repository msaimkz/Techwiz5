<?php

namespace App\Http\Controllers;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Style;
use App\Models\Product;
use App\Rules\Alpha;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = product::latest()->get();

       

        return view('Admin.Product.product',compact('products'));
    }

    public function getSubcategories(Request $request)
    {
        $subcategories = SubCategory::where('category_id', $request->category_id)->get(['id', 'name']);

        return response()->json([
            'status' => true,
            'subcategories' => $subcategories,
        ]);
    }
    public function create(){

        $products = product::latest()->get();
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $brands = Brand::all();
        $styles = Style::all();
        

        return view("Admin.Product.create",compact('products','categories','sub_categories','brands','styles'));

    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(),[
            'name' =>[ 'required','min:3', new Alpha],
            'slug' => 'required|unique:sub_categories',
            'category_id' => 'required|numeric',
            'status' => 'required',
    
           ]);

           if($validator->passes()){

            $product = new product();
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->category = $request->category_id;
            $product->sub_category = $request->subcategory_id;
            $product->brand = $request->brand_id;
            $product->style = $request->style_id;
            $product->hieght = $request->height;
            $product->width = $request->width;
            $product->depth = $request->depth;
            $product->material = $request->material;
            $product->price = $request->price;
            $product->status = $request->status;
            $product->save();

            $request->session()->flash('success','Product Added Successfully');

            return response()->json([
                'status' => true,
                'msg' =>'Product Added Successfully',
            ]);
    

           }
           else{

            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);
           }
    }

    public function edit(Request $request,$id){

        $product = product::find($id);
        $categories = Category::latest()->get();
        $sub_categories = SubCategory::latest()->get();
        $brands = Brand::latest()->get();
        $styles = Style::latest()->get();

        if(empty($product)){
            $request->session()->flash('error','Product Not Found');

            return redirect()->route("Admin.product");
        }

        return view('Admin.Product.edit',compact('product','categories','sub_categories','brands','styles'));

    }

    public function update(Request $request,$id){

        $product = Product::find($id);
       

        if(empty($product)){
            $request->session()->flash('error','Product Not Found');

            return redirect()->route("Admin.product");
        }

        $validator = Validator::make($request->all(),[
            'name' => [ 'required','min:3', new Alpha],
            'slug' => 'required|unique:sub_categories,slug,' . $product->id . ',id',
            'category_id' => 'required|numeric',
            'status' => 'required',
    
           ]);

           if($validator->passes()){

    
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->category = $request->category_id;
            $product->sub_category = $request->subcategory_id;
            $product->brand = $request->brand_id;
            $product->style = $request->style_id;
            $product->hieght = $request->hieght;
            $product->width = $request->width;
            $product->depth = $request->depth;
            $product->material = $request->material;
            $product->price = $request->price;
            $product->status = $request->status;
            $product->update();

            $request->session()->flash('success','Product Updated Successfully');

            return response()->json([
                'status' => true,
                'msg' =>'Product Updated Successfully',
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
        $product = Product::find($id);

      
       

        if(empty($product)){
            $request->session()->flash('error','Product Not Found');

            return redirect()->route("Admin.product");
        }


        $product->delete();

        $request->session()->flash('success','product Deleted Successfully');

            return response()->json([
                'status' => true,
                'msg' =>'product Deleted Successfully',
            ]);

    }


}
