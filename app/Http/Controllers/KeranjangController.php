<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Http\Requests\StorekeranjangRequest;
use App\Http\Requests\UpdatekeranjangRequest;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
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
     * @param  \App\Http\Requests\StorekeranjangRequest 
     * @return \Illuminate\Http\Response
     */
    public function create(StorekeranjangRequest $request)
    {
        //

        dd($request->products_id);

        // $product_id = Products::findorFail('products_id');
        // $product_id = 'products_id';

        return view('create/cr_keranjang',[
            'products' => Products::all(),
            // 'product_id' => $id,
            'users' => Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekeranjangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekeranjangRequest $request, Products $id)
    {
        //
        $this->validate($request, [
            'jumlah_product' => 'required'
        ]);

        // $product_id = Products::findorFail($id);

        keranjang::create([
            'jumlah_product' => $request->jumlah_product,
            'catatan' => $request->catatan,
            'user_id' => $request->user_id,
            'products_id' => $request->products_id
        ]);

        // $lastid = DB::getPdo()->lastInsertId();
        // $id = DB::table('products');
        // $lastid;

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('create/cr_keranjang',[
            'products' => Products::all(),
            'product_id' => $id,
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit(keranjang $keranjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekeranjangRequest  $request
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekeranjangRequest $request, keranjang $keranjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy(keranjang $keranjang)
    {
        //
    }
}
