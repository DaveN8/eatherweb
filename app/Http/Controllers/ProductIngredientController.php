<?php

namespace App\Http\Controllers;

use App\Models\product_ingredient;
use App\Http\Requests\Storeproduct_ingredientRequest;
use App\Http\Requests\Updateproduct_ingredientRequest;

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
