<?php

namespace App\Http\Controllers;

use App\Models\histori;
use App\Http\Requests\StorehistoriRequest;
use App\Http\Requests\UpdatehistoriRequest;
use App\Models\Keranjang;

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
        return view('histori', [
            'history' => histori::all(),
            'cart' => Keranjang::all()
            // 'products' => Products::all()
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
     * @param  \App\Http\Requests\StorehistoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehistoriRequest $request)
    {
        //
        $this->validate($request, [
            'total_pembayaran' => 'required',
            'user_id' => 'required',
            'alamat_id' => 'required'
        ]);

        histori::create([
            'total_pembayaran' => $request->total_pembayaran,
            'user_id' => $request->user_id,
            'alamat_id' => $request->alamat_id
        ]);


        return redirect(route('histori.edit'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('payment', [
            'historis' => histori::findorFail($id),
        ]);
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
        return view('payment', [
            'historis' => histori::latest()->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehistoriRequest  $request
     * @param  \App\Models\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehistoriRequest $request, $id)
    {
        //
        $his = histori::findorFail($id);

        if ($request->file('bukti_trf')) {
            $his->update([
                'bukti_trf' => $request->file('bukti_trf')->store('bukti_trfs', 'public')
            ]);
        }

        $cart = Keranjang::all();
        foreach($cart as $car){
            if($car->where('user_id', $request->user_id)->where('status', 'show')){
                $car->status = 'hide';
                $car->save();
            }
        }

        return redirect(route('histori.index'));
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
