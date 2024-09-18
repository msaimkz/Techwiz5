<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TempImageController;
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

// Sub Category Routes
Route::get('/Admin/Sub-Category',[SubCategoryController::class,'index'])->name('Admin.sub-category');
Route::get('/Admin/Create-Sub-Category',[SubCategoryController::class,'create'])->name('Admin.sub-category.create');
Route::post('/Admin/Store-Sub-Category',[SubCategoryController::class,'store'])->name('Admin.sub-category.store');
Route::get('/Admin/Edit-Sub-Category/{id}',[SubCategoryController::class,'edit'])->name('Admin.sub-category.edit');
Route::post('/Admin/Update-Sub-Category/{id}',[SubCategoryController::class,'update'])->name('Admin.sub-category.update');
Route::delete('/Admin/Delete-Sub-Category,/{id}',[SubCategoryController::class,'destroy'])->name('Admin.sub-category.delete');

// Gallery Routes
Route::get('/Admin/Gallery',[GalleryController::class,'index'])->name('Admin.gallery');
Route::get('/Admin/Create-Gallery',[GalleryController::class,'create'])->name('Admin.gallery.create');
Route::post('/Admin/Store-Gallery',[GalleryController::class,'store'])->name('Admin.gallery.store');
Route::get('/Admin/Edit-Gallery/{id}',[GalleryController::class,'edit'])->name('Admin.gallery.edit');
Route::delete('/Admin/Delete-Gallery-Image/',[GalleryController::class,'DeleteImage'])->name('Admin.gallery.delete.image');
Route::post('/Admin/Update-Gallery-Image/',[GalleryController::class,'ImageUpdate'])->name('Admin.gallery.update.image');
Route::post('/Admin/Update-Gallery/{id}',[GalleryController::class,'update'])->name('Admin.gallery.update');
Route::delete('/Admin/Delete-Gallery,/{id}',[SubCategoryController::class,'destroy'])->name('Admin.gallery.delete');



// Temp Images Route

Route::post('/Admin/Temp-Images', [TempImageController::class, 'create'])->name('Temp-image');





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