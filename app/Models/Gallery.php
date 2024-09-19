<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_id');
    }  
    
    protected $table = 'galleries'; 

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subCategory_id');
    }
}
