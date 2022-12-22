<?php

namespace App\Http\Controllers;

use App\Models\product_ingredient;
use App\Http\Requests\Storeproduct_ingredientRequest;
use App\Http\Requests\Updateproduct_ingredientRequest;
use App\Models\Ingredients;
use App\Models\Products;

class ProductIngredientController extends Controller
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

        return view('create/cr_product2',[
            'products' => Products::latest()->first(),
            'ingredients' => Ingredients::all(),
            'proings' => product_ingredient::all()
            // ->where('products_id', equalTo(Products::latest()->first()))
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeproduct_ingredientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproduct_ingredientRequest $request)
    {
        //

        $this->validate($request, [
            'products_id' => 'required',
            'ingredients_id' => 'required'
        ]);

        product_ingredient::create([
            'products_id' => $request->products_id,
            'ingredients_id' => $request->ingredients_id,
        ]);

        return redirect(route('product_ingredients.create'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_ingredient  $product_ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(product_ingredient $product_ingredient)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_ingredient  $product_ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(product_ingredient $product_ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproduct_ingredientRequest  $request
     * @param  \App\Models\product_ingredient  $product_ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproduct_ingredientRequest $request, product_ingredient $product_ingredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_ingredient  $product_ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_ingredient $product_ingredient)
    {
        //
    }
}
