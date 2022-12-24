<?php

namespace App\Http\Controllers;

use App\Models\wishlists;
use App\Http\Requests\StorewishlistsRequest;
use App\Http\Requests\UpdatewishlistsRequest;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class WishlistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('wishlist', [
            'wishlist' => wishlists::all()
        ]);
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
     * @param  \App\Http\Requests\StorewishlistsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorewishlistsRequest $request)
    {
        //
        $this->validate($request, [
            'user_id' => 'required',
            'products_id' => 'required'
        ]);

        wishlists::create([
            'user_id' => $request->user_id,
            'products_id' => $request->products_id
        ]);
        
        return redirect(route('wishlist.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wishlists  $wishlists
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return view('wishlist', [
        //     'products' => Products::findorFail($id)
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wishlists  $wishlists
     * @return \Illuminate\Http\Response
     */
    public function edit(wishlists $wishlists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewishlistsRequest  $request
     * @param  \App\Models\wishlists  $wishlists
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatewishlistsRequest $request, wishlists $wishlists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wishlists  $wishlists
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        wishlists::destroy($id);

        return redirect(route('wishlist.index'));
    }
}
