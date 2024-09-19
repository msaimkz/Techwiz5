<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempImage;
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

    return view('Admin.dashboard');
 }

 public function profile(){

    return view('Admin.Profile.profile');
 }

}


