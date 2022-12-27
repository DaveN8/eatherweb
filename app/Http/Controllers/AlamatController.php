<?php

namespace App\Http\Controllers;

use App\Models\alamat;
use App\Http\Requests\StorealamatRequest;
use App\Http\Requests\UpdatealamatRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('alamat', [
            'address' => alamat::all()
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
        return view('create/cr_alamat', [
            'pagetitle' => 'Create alamat',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorealamatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorealamatRequest $request)
    {
        //
        $this->validate($request, [
            'label' => 'required',
            'penerima' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'pos' => 'required'
        ]);

        if ($request->deskripsi_alamat) {
            alamat::create([
                'label' => $request->label,
                'penerima' => $request->penerima,
                'no_hp' => $request->phone,
                'alamat_lengkap' => $request->alamat,
                'kecamatan' => $request->kecamatan,
                'kota' => $request->kota,
                'deskripsi_alamat' => $request->deskripsi_alamat,
                'kode_pos' => $request->pos,
                'user_id' => $request->user_id
            ]);
        } else {
            alamat::create([
                'label' => $request->label,
                'penerima' => $request->penerima,
                'no_hp' => $request->phone,
                'alamat_lengkap' => $request->alamat,
                'kecamatan' => $request->kecamatan,
                'kota' => $request->kota,
                'kode_pos' => $request->pos,
                'user_id' => $request->user_id
            ]);
        }
        return redirect(route('alamat.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function show(alamat $alamat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('update/up_alamat', [
            'address' => alamat::findorFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatealamatRequest  $request
     * @param  \App\Models\alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatealamatRequest $request, $id)
    {
        //
        $address = alamat::findorFail($id);
        $address->update([
            'label' => $request->label,
            'penerima' => $request->penerima,
            'no_hp' => $request->phone,
            'alamat_lengkap' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'deskripsi_alamat' => $request->deskripsi_alamat,
            'kode_pos' => $request->pos
        ]);
        return redirect(route('alamat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $address = alamat::findorFail($id);
        $address->delete();
        return redirect(route('alamat.index'));
    }
}
