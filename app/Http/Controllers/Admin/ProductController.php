<?php

namespace App\Http\Controllers\Admin;

use App\Cat;
use App\Color;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        $products=Product::latest()->paginate(20);
        return view('Admin.products.index',compact('n','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors=Color::all();
        $cats=Cat::all();
        return view('Admin.products.create',compact('colors','cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $status=Input::has('status') ? true :false;
        $best=Input::has('best') ? true :false;
        Product::create([
           'user_id'=>'1',
           'catgory_id'=>request("brand"),
           'name_fa'=>request("name_fa"),
           'name_en'=>request("name_en"),
           'color_id'=>request("color"),
           'internalMemory'=>request("internalMemory"),
           'network'=>request("network"),
           'ram'=>request("ram"),
           'front_camera'=>request("front_camera"),
           'back_camera'=>request("back_camera"),
           'replace_battry'=>request("replace_battry"),
           'screanSize'=>request("screanSize"),
           'simNumber'=>request("simNumber"),
           'imageUrl'=>request("filepath"),
           'price'=>request("price"),
           'count'=>request("count"),
           'discount'=>request("discount"),
           'status'=> $status,
           'code'=>request("code"),
            'best'=>  $best,
            'body'=>request("body")



        ]);
        alert()->success('پیام', 'با موفقیت افزوده شد')->persistent("بستن ");
            return back('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $cats=Cat::all();
        $colors=Color::all();
        return view('Admin.products.edit',compact('product','colors','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $url= request('filepath');
        if ($url=="") {
            $url= $url= $product->imageUrl;
        } else {
            $url=request('filepath');
        }

        $status=Input::has('status') ? true :false;
        $best=Input::has('best') ? true :false;
       $product->update([
           'user_id'=>'1',
           'catgory_id'=>request("brand"),
           'name_fa'=>request("name_fa"),
           'name_en'=>request("name_en"),
           'color_id'=>request("color"),
           'internalMemory'=>request("internalMemory"),
           'network'=>request("network"),
           'ram'=>request("ram"),
           'front_camera'=>request("front_camera"),
           'back_camera'=>request("back_camera"),
           'replace_battry'=>request("replace_battry"),
           'screanSize'=>request("screanSize"),
           'simNumber'=>request("simNumber"),
           'imageUrl'=>$url,
           'price'=>request("price"),
           'count'=>request("count"),
           'discount'=>request("discount"),
           'status'=> $status,
           'code'=>request("code"),
            'best'=>  $best,
            'body'=>request("body")

            
        ]);
        alert()->success('پیام', 'با موفقیت آپدیت  شد')->persistent("بستن ");
        return back('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
