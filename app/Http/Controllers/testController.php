<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(Category $category){
        return "sdfsdf";
    }

    public function delete(Category $category)
    {
        $category->delete();

        return back();
    }
}
