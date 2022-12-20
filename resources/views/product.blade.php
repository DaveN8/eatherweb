@extends('layouts.app')

@section('main_content')
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">

        @auth
            <div class="grid grid-cols-3 gap-2">
                @if (Auth::check() && Auth::user()->status == 'member')
                    @foreach ($products as $pro)
                        <div class="w-full max-w-sm rounded-lg bg-white shadow-md">
                            <a href="#">
                                <img class="rounded-t-lg p-8" src="" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900">Original</h5>
                                <span><a href=""
                                        class="decoration-slate-700-500 font-semibold text-gray-900 underline">See detail
                                    </a></span>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-2xl font-bold text-gray-900">Rp.15000</span><span
                                        class="text-gray-900">/pcs</span>
                                    <a href="#"
                                        class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif((Auth::check() && Auth::user()->status == 'admin') || Auth::user()->status == 'superadmin')
                    @foreach ($products as $pro)
                        <div class="w-full max-w-sm rounded-lg bg-white shadow-md">
                            <a href="">
                                <img class="rounded-t-lg p-8" src="{{ asset('storage/'.$pro->image) }}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $pro['name'] }}</h5>
                                <span><a href=""
                                        class="decoration-slate-700-500 font-semibold text-gray-900 underline">See detail
                                    </a></span>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$pro['description']}}</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-2xl font-bold text-gray-900">{{$pro['price']}}</span><span
                                        class="text-gray-900">/pcs</span>
                                    <a href="#"
                                        class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                                    <a href="#"
                                        class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Hide</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            @if ((Auth::check() && Auth::user()->status == 'admin') || Auth::user()->status == 'superadmin')
                <div class="w-fit rounded-lg shadow-md mx-auto">
                    <a href=" {{ route('products.create') }} "><button
                            class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            Product</button></a>
                </div>
            @endif
        @endauth


        @guest
            <div class="grid grid-cols-3 gap-2">
                @foreach ($products as $pro)
                    <div class="w-full max-w-sm rounded-lg bg-white shadow-md">
                        <a href="#">
                            <img class="rounded-t-lg p-8" src="" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">Original</h5>
                            <span><a href="" class="decoration-slate-700-500 font-semibold text-gray-900 underline">See
                                    detail
                                </a></span>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">Rp.15000</span><span
                                    class="text-gray-900">/pcs</span>
                                <a href="#"
                                    class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endguest

        {{-- <div class="w-full max-w-sm rounded-lg bg-white shadow-md">
        <a href="#">
          <img class="rounded-t-lg p-8" src="" alt="product image" />
        </a>
        <div class="px-5 pb-5">
          <h5 class="text-xl font-semibold tracking-tight text-gray-900">Original</h5>
          <span><a href="" class="decoration-slate-700-500 font-semibold text-gray-900 underline">See detail </a></span>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
          <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900">Rp.15000</span><span class="text-gray-900">/pcs</span>
            <a href="#" class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
          </div>
        </div>
      </div>
  
      <div class="w-full max-w-sm rounded-lg bg-white shadow-md">
        <a href="#">
          <img class="rounded-t-lg p-8" src="" alt="product image" />
        </a>
        <div class="px-5 pb-5">
          <h5 class="text-xl font-semibold tracking-tight text-gray-900">Original</h5>
          <span><a href="" class="decoration-slate-700-500 font-semibold text-gray-900 underline">See detail </a></span>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
          <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900">Rp.15000</span><span class="text-gray-900">/pcs</span>
            <a href="#" class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
          </div>
        </div>
      </div> --}}
    </div>





    {{-- <div class="container text-center">
        <div class="row">
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2  mb-3">
                            <a href="/original" class="btn btn-outline-info btn-lg" type="button">Original</a>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <span class="card-title fs-1">Rp. 15.000</span><span>/pcs</span>
                    </div>
                    <img src="image/food.png" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2  mb-3">
                            <a href="/pedas" class="btn btn-outline-info btn-lg" type="button">Pedas</a>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <span class="card-title fs-1">Rp. 15.000</span><span>/pcs</span>
                    </div>
                    <img src="image/food.png" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2  mb-3">
                            <a href="/panggang" class="btn btn-outline-info btn-lg" type="button">Sapi Panggang</a>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <span class="card-title fs-1">Rp. 15.000</span><span>/pcs</span>
                    </div>
                    <img src="image/food.png" class="card-img-bottom" alt="...">
                </div>
            </div>
        </div>
    </div> --}}
@endsection
