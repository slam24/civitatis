<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $products = Category::all()->toArray();
        return array_reverse($products);      
    }
}
