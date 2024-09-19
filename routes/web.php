<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TempImageController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FrontController;
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


Route::get('/',[FrontController::class,'index'])->name('Front.index');
Route::get('/Gallery',[FrontController::class,'gallery'])->name('Front.gallery');
Route::get('/About-Us',[FrontController::class,'about'])->name('Front.about');
Route::get('/Contact-Us',[FrontController::class,'contact'])->name('Front.contact');
Route::get('/Blogs',[FrontController::class,'blog'])->name('Front.blog');
Route::get('/Design',[FrontController::class,'design'])->name('Front.design');
Route::get('/Category',[FrontController::class,'category'])->name('Front.category');



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


Route::group(['middleware' => ['role-access']], function () {

Route::get('/Admin/My-Profile',[AdminController::class,'profile'])->name('Admin.profile');

Route::get('/Admin/Dashboard',[AdminController::class,'dashboard'])->name('Admin.dashboard');
Route::get('/Admin/Order',[AdminController::class,'order'])->name('Admin.order');

// Category Routes

Route::get('/Admin/Category',[CategoryController::class,'index'])->name('Admin.category');
Route::get('/Admin/Create-Category',[CategoryController::class,'create'])->name('Admin.category.create');
Route::post('/Admin/Store-Category',[CategoryController::class,'store'])->name('Admin.category.store');
Route::get('/Admin/Edit-Category,/{id}',[CategoryController::class,'edit'])->name('Admin.category.edit');
Route::post('/Admin/Update-Category,/{id}',[CategoryController::class,'update'])->name('Admin.category.update');
Route::delete('/Admin/Delete-Category,/{id}',[CategoryController::class,'destroy'])->name('Admin-category-delete');
// Brand Routes

Route::get('/Admin/Brand',[BrandController::class,'index'])->name('Admin.brand');
Route::get('/Admin/Create-Brand',[BrandController::class,'create'])->name('Admin.brand.create');
Route::post('/Admin/Store-Brand',[BrandController::class,'store'])->name('Admin.brand.store');
Route::get('/Admin/Edit-Brand,/{id}',[BrandController::class,'edit'])->name('Admin.brand.edit');
Route::post('/Admin/Update-Brand,/{id}',[BrandController::class,'update'])->name('Admin.brand.update');
Route::delete('/Admin/Delete-Brand,/{id}',[BrandController::class,'destroy'])->name('Admin-brand-delete');


//Style Routes
Route::get('/Admin/Style',[StyleController::class,'index'])->name('Admin.style');
Route::get('/Admin/Create-Style',[StyleController::class,'create'])->name('Admin.style.create');
Route::post('/Admin/Store-Style',[StyleController::class,'store'])->name('Admin.style.store');
Route::get('/Admin/Edit-Style,/{id}',[StyleController::class,'edit'])->name('Admin.style.edit');
Route::post('/Admin/Update-Style,/{id}',[StyleController::class,'update'])->name('Admin.style.update');
Route::delete('/Admin/Style-Category,/{id}',[StyleController::class,'destroy'])->name('Admin-style-delete');


// blog routes
Route::get('/Admin/Blog',[BlogController::class,'index'])->name('Admin.Blog');
Route::get('/Admin/Create-Blog',[BlogController::class,'create'])->name('Admin.Blog.create');
Route::post('/Admin/Store-Blog',[BlogController::class,'store'])->name('Admin.Blog.store');
Route::get('/Admin/Edit-Blog/{id}',[BlogController::class,'edit'])->name('Admin.Blog.edit');
Route::post('/Admin/Update-Blog/{id}',[BlogController::class,'update'])->name('Admin.Blog.update');
Route::delete('/Admin/Delete-Blog/{id}',[BlogController::class,'destroy'])->name('Admin-Blog-delete');


// Sub Category Routes
Route::get('/Admin/Sub-Category',[SubCategoryController::class,'index'])->name('Admin.sub-category');
Route::get('/Admin/Create-Sub-Category',[SubCategoryController::class,'create'])->name('Admin.sub-category.create');
Route::post('/Admin/Store-Sub-Category',[SubCategoryController::class,'store'])->name('Admin.sub-category.store');
Route::get('/Admin/Edit-Sub-Category/{id}',[SubCategoryController::class,'edit'])->name('Admin.sub-category.edit');
Route::post('/Admin/Update-Sub-Category/{id}',[SubCategoryController::class,'update'])->name('Admin.sub-category.update');
Route::delete('/Admin/Delete-Sub-Category,/{id}',[SubCategoryController::class,'destroy'])->name('Admin.sub-category.delete');
 
// Users Routes
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('Admin.users.create');
Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('Admin.users.edit');
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

// Gallery Routes
Route::get('/Admin/Gallery',[GalleryController::class,'index'])->name('Admin.gallery');
Route::get('/Admin/Create-Gallery',[GalleryController::class,'create'])->name('Admin.gallery.create');
Route::post('/Admin/Store-Gallery',[GalleryController::class,'store'])->name('Admin.gallery.store');
Route::get('/Admin/Edit-Gallery/{id}',[GalleryController::class,'edit'])->name('Admin.gallery.edit');
Route::delete('/Admin/Delete-Gallery-Image/',[GalleryController::class,'DeleteImage'])->name('Admin.gallery.delete.image');
Route::post('/Admin/Update-Gallery-Image/',[GalleryController::class,'ImageUpdate'])->name('Admin.gallery.update.image');
Route::post('/Admin/Update-Gallery/{id}',[GalleryController::class,'update'])->name('Admin.gallery.update');
Route::delete('/Admin/Delete-Gallery,/{id}',[GalleryController::class,'destroy'])->name('Admin.gallery.delete');
Route::get('/Admin/View-Gallery,/{id}',[GalleryController::class,'show'])->name('Admin.gallery.view');



// Temp Images Route

Route::post('/Admin/Temp-Images', [TempImageController::class, 'create'])->name('Temp-image');
Route::get('/Admin/Temp-Imag', [AdminController::class, 'delete'])->name('Temp');


});

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
