<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use App\Models\TempImage;
use App\Models\User;
use App\Rules\Alpha;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function dashboard(){
        return view('designer.dashboard');
    }

    public function portfolio(){

        $user = Auth::user();

        $designer = User::where('id',$user->id)->first();
      
        $portfolio = Portfolio::where('user_id',$user->id)->first();
        return view('Designer.Portfolio.portfolio',compact('designer','portfolio'));
    }
    public function create(){

        return view('Designer.Portfolio.create');
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
           
            'shortbiography' => 'required|min:10',
            'detailedbiography' => 'required|min:10',
            'image' => 'required',
           ]);
      
           if($validator->passes()){

            Portfolio::updateOrCreate(
                ['user_id' => Auth::user()->id ],
                [
                    'user_id' => Auth::user()->id ,
                    'short_bio' => $request->shortbiography,
                    'long_bio' => $request->detailedbiography,
                    "image" => "null",
                ],
            );
           


            $portfolio = Portfolio::where('user_id',Auth::user()->id)->first();
            if($request->image != ""){
                $tempimginfo = TempImage::find($request->image);
                $extArray = explode('.',$tempimginfo->image);
                $ext = last($extArray);
               
    
    
                $ImageName = $portfolio->id.'-'.'-'.time().'.'.$ext;
                Portfolio::updateOrCreate(
                    ['user_id' => Auth::user()->id ],
                    [
                        
                        "image" => $ImageName ,
                    ],
                );
               
    
    
    
                // Generate thumbnail
    
                //large
                       $Spath = public_path().'/temp/'.$tempimginfo->image;
                     
                        $dpath = public_path().'/uploads/Designer/large/'.$ImageName;
                        $manager = new ImageManager(new Driver());
                        $image = $manager->read($Spath);
                        $image->scaleDown(1400);
                        $image->save($dpath);
                        
    
    
    
                        //small
                        $dpath = public_path().'/uploads/Designer/small/'.$ImageName;
                        $image->cover(430,430);
                        $image->save($dpath);
            }
            $request->session()->flash('success','Portiflio Added Successfully');

            return response()->json([
                'status' => true,
                'msg' =>'Portiflio Added Successfully',
            ]);
    
           }
           else{

            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);


           }
        

    }
    
  
    public function destroy($id)
    {
         $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return response()->json(['status' => true]);
    }

}