<?php

namespace App\Http\Controllers;

use App\Models\image;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // dd($request->all());

        $create = $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_width' => 'required',
            'product_hight' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
            'artist_name' => 'required',
            'artist_image' => 'required',
        ]);


        if ($request->hasFile('product_image', 'artist_image')) {

            $nameproduct = $request->product_image->hashName();
            $request->product_image->move(public_path('product_img'), $nameproduct);
            $nameartist = $request->artist_image->hashName();
            $request->artist_image->move(public_path('artist_img'), $nameartist);
        }


        $products = new Product();
        $products->product_name = $request->product_name;
        $products->product_desc = $request->product_desc;
        $products->product_width = $request->product_width;
        $products->product_hight = $request->product_hight;
        $products->product_price = $request->product_price;
        $products->product_image = $nameproduct;
        $products->artist_name = $request->artist_name;
        $products->artist_image = $nameartist;
        $products->save();


        if ($request->hasFile('product_image', 'artist_image')) {
            $img = new Image();
            $img->product_id = $products->id;
            $img->product_img = $nameproduct;
            $img->artist_img = $nameartist;
            $img->save();
        }


        // Product::create($create);


        return redirect('/gallery')->with('message', 'product is addedd successfully! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $products)
    {
        $products = Product::all();
        return view('gallery', ['products' => $products]);
    }

    public function artDetail(product $product)
    {
        $products = Product::find($product)->first();
        return view('art', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
