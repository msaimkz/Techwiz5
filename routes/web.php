<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin Profils

Route::get('/Admin/My-Profile',[AdminController::class,'profile'])->name('Admin.profile');



Route::get('/Admin/Dashboard',[AdminController::class,'dashboard'])->name('Admin.dashboard');

// Category Routes

Route::get('/Admin/Category',[CategoryController::class,'index'])->name('Admin.category');
Route::get('/Admin/Create-Category',[CategoryController::class,'create'])->name('Admin.category.create');
Route::post('/Admin/Store-Category',[CategoryController::class,'store'])->name('Admin.category.store');
Route::get('/Admin/Edit-Category,/{id}',[CategoryController::class,'edit'])->name('Admin.category.edit');
Route::post('/Admin/Update-Category,/{id}',[CategoryController::class,'update'])->name('Admin.category.update');
Route::delete('/Admin/Delete-Category,/{id}',[CategoryController::class,'destroy'])->name('Admin.category.delete');



// Slug Route

Route::get('Admin/getSlug', function(Request $request){

    $slug ='';
 if(!empty($request->input('title'))){
    $slug = Str::slug($request->input('title'));
 }
 return response()->json([
    'status' => true,
    'slug' => $slug,
 ]);

 
})->name('GetSlug');

require __DIR__.'/auth.php';