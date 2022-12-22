<?php

namespace App\Http\Controllers;

use App\Models\ingredients;
use App\Http\Requests\StoreingredientsRequest;
use App\Http\Requests\UpdateingredientsRequest;

class IngredientsController extends Controller
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

        return view('create/cr_ingredients',[
            'ingredients' => ingredients::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreingredientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreingredientsRequest $request)
    {
        //
        $this->validate($request, [
            'name' => 'required'
        ]);

        ingredients::create([
            'name' => $request->name
        ]);

        // $lastid = DB::getPdo()->lastInsertId();
        // $id = DB::table('products');
        // $lastid;

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function show(ingredients $ingredients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function edit(ingredients $ingredients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateingredientsRequest  $request
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateingredientsRequest $request, ingredients $ingredients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingredients $ingredients)
    {
        //
    }
}
