<?php

namespace App\Http\Controllers;

use App\Product;
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
        $products = Product::All();
        foreach ($products as $product) {
            $product->view_product =[
                'href' => 'api/products/' . $product->id,
                'method' => 'GET'
            ];
        }

        $response = [
            'status'    => true,
            'msg'       => 'created',
            'product'   => $products
        ];
        return response()->json([
            $products,
            200
            ]);
        
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'      => 'required',
            'harga'     => 'required',
            'cetak'     => 'required',
            'premium'   => 'required',
            'head'      => 'required'
        ]);
        
        $nama       = $request->input('nama');
        $harga      = $request->input('harga');
        $cetak      = $request->input('cetak');
        $premium    = $request->input('premium');
        $head       = $request->input('head');

        $product = new Product([
            'nama'      => $nama,
            'harga'     => $harga,
            'cetak'     => $cetak,
            'premium'   => $premium,
            'head'      => $head,
        ]);

        if ($product->save()) {
            $product->index =[
                'href'      => 'api/products',
                'method'    => 'GET',
            ];

            $response = [
                'msg'   => 'created',
                'data'  => $product
            ];
    
            return response()->json($response, 201);
        }

        $response = [
            'msg' => 'ERROR'
        ];

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
