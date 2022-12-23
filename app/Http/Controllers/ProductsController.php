<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Models\Flavours;
use App\Models\Ingredients;
use App\Models\Kategori;
use App\Models\Product_ingredient;

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

        return redirect(route('product_ingredients.create'));
        // return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('detail', [
            'products' => products::findorFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('update/up_product', [
            'products' => products::findorFail($id),
            'proings' => Product_ingredient::all(),
            'ingredients' => Ingredients::all(),
            'flavours' => Flavours::all(),
            'categories' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductsRequest  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductsRequest $request, $id)
    {
        //
        $product = products::findorFail($id);

        if ($request->status) {
            if ($request->file('image')) {
                unlink('storage/' . $product->image);
                $product->update([
                    'name' => $request->name,
                    'image' => $request->file('image')->store('images', 'public'),
                    'stock' => $request->stock,
                    'price' => $request->price,
                    'description' => $request->description,
                    'flavours_id' => $request->flavour,
                    'kategori_id' => $request->category,
                    'status' => $request->status
                ]);
            } else {
                $product->update([
                    'name' => $request->name,
                    'stock' => $request->stock,
                    'price' => $request->price,
                    'description' => $request->description,
                    'flavours_id' => $request->flavour,
                    'kategori_id' => $request->category,
                    'status' => $request->status
                ]);
            }
        } else {
            if ($request->file('image')) {
                unlink('storage/' . $product->image);
                $product->update([
                    'name' => $request->name,
                    'image' => $request->file('image')->store('images', 'public'),
                    'stock' => $request->stock,
                    'price' => $request->price,
                    'description' => $request->description,
                    'flavours_id' => $request->flavour,
                    'kategori_id' => $request->category
                ]);
            } else {
                $product->update([
                    'name' => $request->name,
                    'stock' => $request->stock,
                    'price' => $request->price,
                    'description' => $request->description,
                    'flavours_id' => $request->flavour,
                    'kategori_id' => $request->category
                ]);
            }
        }



        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = products::findorFail($id);

        if ($product['status'] == 'hide') {
            $product->update([
                'status' => 'show'
            ]);
        } else {
            $product->update([
                'status' => 'hide'
            ]);
        }

        return redirect('update/up_product');
    }
}
