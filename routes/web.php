<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/design', function () {
    return view('design');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/living-room', function () {
    return view('category.livingroom');
});

Route::get('/bedrooms', function () {
    return view('category.bedrooms');
});

Route::get('/bathrooms', function () {
    return view('category.bathrooms');
});

Route::get('/Kitchens', function () {
    return view('category.kitchens');
});

Route::get('/offices', function () {
    return view('category.offices');
});

Route::get('/outdoor-spaces', function () {
    return view('category.outdoorspaces');
});

Route::get('/detail-page', function () {
    return view('detail');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/cart-page', function () {
    return view('cart');
});


Route::get('/my-orders', function () {
    return view('orders');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/my-design', function () {
    return view('my-design');
});

Route::get('/designer-detail-1', function () {
    return view('designers.designer-detail-1');
});

Route::get('/designer-detail-2', function () {
    return view('designers.designer-detail-2');
});

Route::get('/designer-detail-3', function () {
    return view('designers.designer-detail-3');
});

Route::get('/welcome', function () {
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