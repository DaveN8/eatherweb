<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Models\Flavours;
use App\Models\Ingredients;
use App\Models\Kategori;
use App\Models\Product_ingredient;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class ProductsController extends Controller
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
        //
        
            return view('create/cr_product', [
                'pagetitle' => 'Create Products',
                'products' => Products::all(),
                'flavours' => Flavours::all(),
                'categories' => Kategori::all(),
                'proing' => Product_ingredient::all()
            ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductsRequest $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        products::create([
            'name' => $request->name,
            'image' => $request->file('image')->store('images', 'public'),
            'stock' => $request->stock,
            'price' => $request->price,
            'description' => $request->description,
            'flavours_id' => $request->flavour,
            'kategori_id' => $request->category
        ]);

        // $lastid = DB::getPdo()->lastInsertId();
        // $id = DB::table('products');
        // $lastid;

        return redirect('/product');
        // return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductsRequest  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductsRequest $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
