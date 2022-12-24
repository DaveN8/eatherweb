<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Http\Requests\StorekeranjangRequest;
use App\Http\Requests\UpdatekeranjangRequest;
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
            'products' => Products::all()
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
            // if ($cart instanceof NotFoundHttpException) {
            //     keranjang::create([
            //         'jumlah_product' => $request->jumlah_product,
            //         'catatan' => $request->catatan,
            //         'user_id' => $request->user_id,
            //         'products_id' => $request->products_id
            //     ]);
            // }else{
            if (!isset($cart)) {
                keranjang::create([
                    'jumlah_product' => $request->jumlah_product,
                    'catatan' => $request->catatan,
                    'user_id' => $request->user_id,
                    'products_id' => $request->products_id
                ]);
            } else {
                foreach ($cart as $car) {
                    if ($request->products_id == $car['id'] && $car['status'] == "hide") {
                        keranjang::create([
                            'jumlah_product' => $request->jumlah_product,
                            'catatan' => $request->catatan,
                            'user_id' => $request->user_id,
                            'products_id' => $request->products_id
                        ]);
                    } elseif ($request->products_id == $car['id'] && $car['status'] == "show") {
                        return redirect(route('/product'))->with('message', "Product has been added");
                    }
                }
            }
        }
        return redirect('/product');




        // foreach($cart as $car){
        //     if($request->products_id == $car['id'] && $car['status'] == 'hide') {
        //         keranjang::create([
        //             'jumlah_product' => $request->jumlah_product,
        //             'catatan' => $request->catatan,
        //             'user_id' => $request->user_id,
        //             'products_id' => $request->products_id
        //         ]);        
        //     } elseif ($request->products_id == $car['id'] && $car['status'] == 'show') {
        //         echo '<script>alert("Products has been added")</script>';
        //     } elseif ($request->products_id) {

        //     }
        // }

        // $lastid = DB::getPdo()->lastInsertId();
        // $id = DB::table('products');
        // $lastid;


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
        return view('keranjang', [
            'cart' => keranjang::findorFail($id),
        ]);
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

        if ($request->status) {
            if ($request->file('image')) {
                unlink('storage/' . $cart->image);
                $cart->update([
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
                $cart->update([
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
            if ($request->catatan) {
                # code...
                $cart->update([
                    'jumlah_product' => $request->jumlah_product,
                    'catatan' => $request->catatan,
                ]);
            } else {
                # code...
                $cart->update([
                    'jumlah_product' => $request->jumlah_product,
                ]);
            }
        }



        return redirect(route('cart.create'));
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
