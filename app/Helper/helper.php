<?php

use App\Models\Category;



 function Category(){

    $categories = Category::where('status',1)->get();

    return $categories;

}


?>