<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slider;

class BlogController extends Controller
{
    public function index ()
    {
        $sliders=Slider::all();
        $products_best=Product::where('best','1')->get();
        return view('Blog.index',compact('sliders','products_best'));
    }
}
