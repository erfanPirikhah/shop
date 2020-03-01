<?php

namespace App\Http\Controllers\Blog;

use App\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slider;

class BlogController extends Controller
{
    public function index()
    {
        
        $sliders=Slider::all();
        $products_best=Product::where('best', '1')->get();
        $cats=Cat::all();
     
      
        return view('Blog.index', compact('sliders', 'products_best','cats'));
    }
}
