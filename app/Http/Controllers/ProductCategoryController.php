<?php

namespace App\Http\Controllers;

use App\Models\Product_category;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = Product_category::all();
        return view();
    }

}
