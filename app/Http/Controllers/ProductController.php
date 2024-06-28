<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function getAll()
    {
        return Product::all();
    }
    public static function getByCategory(string $category, $limit = null)
    {
        if(isset($limit)){
            return Product::where('category', $category)->take($limit)->get();
        }else return Product::where('category', $category)->get();
    }
}
