<?php

namespace App\Http\Controllers;

use App\Models\flavours;
use App\Http\Requests\StoreflavoursRequest;
use App\Http\Requests\UpdateflavoursRequest;
use App\Models\User;

class FlavoursController extends Controller
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
        return view('create/cr_flavour',[
            'flavour' => flavours::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreflavoursRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreflavoursRequest $request)
    {
        //
        $this->validate($request, [
            'name' => 'required'
        ]);

        flavours::create([
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
     * @param  \App\Models\flavours  $flavours
     * @return \Illuminate\Http\Response
     */
    public function show(flavours $flavours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\flavours  $flavours
     * @return \Illuminate\Http\Response
     */
    public function edit(flavours $flavours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateflavoursRequest  $request
     * @param  \App\Models\flavours  $flavours
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateflavoursRequest $request, flavours $flavours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\flavours  $flavours
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
