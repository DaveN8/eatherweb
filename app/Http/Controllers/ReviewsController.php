<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use App\Http\Requests\StorereviewsRequest;
use App\Http\Requests\UpdatereviewsRequest;
use App\Models\Histori;
use App\Models\Keranjang;
use App\Models\Products;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('review',[
            'history' =>Histori::all(),
            'cart' => Keranjang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        return view('create/cr_review',[
            'products_id' => $id,
            'cart' => Keranjang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorereviewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorereviewsRequest $request)
    {
        //
        $this->validate($request, [
            'review' => 'required',
        ]);

        reviews::create([
            'comment' => $request->review,
            'user_id' => $request->user_id,
            'products_id' => $request->products_id
        ]);

        return redirect(route('review.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function show(reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function edit(reviews $reviews)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatereviewsRequest  $request
     * @param  \App\Models\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatereviewsRequest $request, reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(reviews $reviews)
    {
        //
    }
}
