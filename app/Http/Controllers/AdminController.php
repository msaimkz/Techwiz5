<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempImage;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
class AdminController extends Controller
{

    
 public function dashboard(){

    // Delete Temp images here

    $lastBeforeDate = Carbon::now()->subDay(1)->format('Y-m-d H:i:s');
    $tempImages = TempImage::where('created_at', '<=', $lastBeforeDate)->get();

    foreach ($tempImages as $tempImage) {

        $path = public_path('/temp/' . $tempImage->image);
        $Thumbpath = public_path('/temp/thumb/' . $tempImage->image);




        if (File::exists($path)) {
            File::delete($path);
        }

        // Thmb Images Delete Here

        if (File::exists($Thumbpath)) {
            File::delete($Thumbpath);
        }
        TempImage::where('id', $tempImage->id)->delete();
    }

    $blogs = Blog::where('status',1)->latest()->limit(5)->get();

    $customers = User::where('role','user')->count();


    return view('Admin.dashboard',compact('blogs','customers'));
 }

 public function profile(Request $request){

    $user =  $request->user();
    
    return view('Admin.Profile.profile',compact('user'));
}

public function order(Request $request){

    
    
    return view('Admin.Order.order');
}

public function orderDetail(Request $request){

    
    
    return view('Admin.Order.report');
}

}


