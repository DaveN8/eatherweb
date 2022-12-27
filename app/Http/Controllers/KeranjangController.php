<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Http\Requests\StorekeranjangRequest;
use App\Http\Requests\UpdatekeranjangRequest;
use App\Models\Alamat;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     *  
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        // $product_id = Products::findorFail('products_id');
        // $product_id = 'products_id';

        return view('keranjang', [
            'cart' => keranjang::all(),
            'products' => Products::all(),
            'address' => Alamat::all()
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

        // $product_id = ;
        if ($request->products_id) {
            $cart = keranjang::all();
            if (!isset($cart)) {
                keranjang::create([
                    'jumlah_product' => $request->jumlah_product,
                    'catatan' => $request->catatan,
                    'user_id' => $request->user_id,
                    'products_id' => $request->products_id
                ]);
            } elseif (isset($cart)) {
                // foreach ($cart as $car) {
                //     if ($request->products_id == $car['id'] && $car['status'] == "hide") {
                //         keranjang::create([
                //             'jumlah_product' => $request->jumlah_product,
                //             'catatan' => $request->catatan,
                //             'user_id' => $request->user_id,
                //             'products_id' => $request->products_id
                //         ]);
                //     } elseif ($request->products_id == $car['id'] && $car['status'] == "show") {
                //         return redirect(route('/product'))->with('message', "Product has been added");
                //     }
                // }
                foreach ($cart as $car) {
                    if ($request->products_id == $car['products_id']) {
                        return redirect('/product');
                    }
                }
                keranjang::create([
                    'jumlah_product' => $request->jumlah_product,
                    'catatan' => $request->catatan,
                    'user_id' => $request->user_id,
                    'products_id' => $request->products_id
                ]);
            } else {
                foreach ($cart as $car) {
                    if ($request->products_id == $car['products_id'] && $car['status'] == "hide") {
                        keranjang::create([
                            'jumlah_product' => $request->jumlah_product,
                            'catatan' => $request->catatan,
                            'user_id' => $request->user_id,
                            'products_id' => $request->products_id
                        ]);
                    } elseif ($request->products_id == $car['products_id'] && $car['status'] == "show") {
                        return redirect(route('/product'))->with('message', "Product has been added");
                    }
                }
            }
        }
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
        return view('create/cr_keranjang', [
            'products' => Products::all(),
            'product_id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cart = keranjang::all();
        if ($cart['status'] == 'show') {
            $final = 0;
            foreach ($cart as $car) {
                if ($car['status'] == 'show') {
                    $final = $final + ($car['jumlah_product'] * $car->products->price);
                }
            }
            $final2 = $final;
            $cart->update([
                'status' => 'hide'
            ]);
        }
        return redirect(route('histori.show', $final2));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekeranjangRequest  $request
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekeranjangRequest $request, $id)
    {
        //

        $cart = keranjang::findorFail($id);

        if ($request->catatan) {
            $cart->update([
                'catatan' => $request->catatan
            ]);
        } elseif ($request->kurang) {
            if ($cart['jumlah_product'] > 0) {
                $final = $cart['jumlah_product'] - $request->kurang;
                $cart->update([
                    'jumlah_product' => $final,
                ]);
            } elseif ($cart['jumlah_product'] == 0) {
                return redirect(route('cart.destroy', $cart->id));
            }
        } elseif ($request->tambah) {
            if ($cart['jumlah_products'] == $cart->products->stock) {
            } elseif ($cart['jumlah_products'] < $cart->products->stock) {
                $final = $cart['jumlah_product'] + $request->tambah;
                $cart->update([
                    'jumlah_product' => $final,
                ]);
            }
        }
        // elseif ($request->checkout) {
        //     // $car = keranjang::all();
        //     // if ($cart['status'] == 'show') {
        //     //     $final = 0;
        //     //     foreach ($car as $ca) {
        //     //         if ($car['status'] == 'show') {
        //     //             $final = $final + ($ca['jumlah_product'] * $ca->products->price);
        //     //         }
        //     //     }
        //     //     $final2 = $final;
        //     //     $cart->update([
        //     //         'status' => 'hide'
        //     //     ]);
        //     // }
        //     // return redirect(route('histori.show', $final2));
        // }


        return redirect(route('cart.create'));

        // if($request->checkout){
        //     $car = keranjang::all();
        //     if($cart['status'] == 'show'){
        //         $final = 0;
        //         foreach($car as $ca){
        //             if($car['status'] == 'show'){
        //             $final = $final + ($ca['jumlah_product']*$ca->products->price);
        //         }
        //     }
        //     $final2 = $final;
        //         $cart->update([
        //             'status' => 'hide'
        //         ]);
        //     }
        //     return redirect(route('histori.show', $final2));
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = keranjang::findorFail($id);
        $cart->delete();
        return redirect(route('cart.create'));
    }
}
