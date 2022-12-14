<?php

namespace App\Http\Controllers;

use App\Models\histori;
use App\Http\Requests\StorehistoriRequest;
use App\Http\Requests\UpdatehistoriRequest;

class HistoriController extends Controller
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
     * @param  \App\Http\Requests\StorehistoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehistoriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function show(histori $histori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function edit(histori $histori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehistoriRequest  $request
     * @param  \App\Models\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehistoriRequest $request, histori $histori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function destroy(histori $histori)
    {
        //
    }
}