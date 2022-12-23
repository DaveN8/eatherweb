@extends('layouts.app')

@section('main_content')
    {{-- <h3>History</h3>
    <p>You have 3 item in your cart</p>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="col">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <p>Rp. 15.000</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}

    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">

        @auth
            @if (Auth::check() && Auth::user()->status == 'member')
                <div class="grid grid-cols-3 gap-2">
                    {{-- @foreach ($histori as $his) --}}
                        {{-- @if ($pro['status'] == 'hide')
                        @elseif($pro['status'] == 'show') --}}
                            <div class="w-full max-w-sm rounded-lg bg-white shadow-md">
                                {{-- <form action="{{ route() }}" method="GET" enctype="multipart/form-data"> --}}
                                    {{-- @csrf --}}
                                    {{-- <input type="hidden" name="products_id" value="{{ $pro['id'] }}"> --}}
                                    <a href="">
                                        <img class="rounded-t-lg p-8" src=""
                                            alt="Bukti Transfer" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900"></h5>
                                        <span><a href=""
                                                class="decoration-slate-700-500 font-semibold text-gray-900 underline">See
                                                detail
                                            </a></span>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        </p>
                                        <div class="flex items-center justify-between">
                                            <span class="text-2xl font-bold text-gray-900"></span><span
                                                class="text-gray-900">/pcs</span>
                                            {{-- <a href="{{ route('cart.create', $pro["id"]) }}"> --}}
                                            {{-- <a href=""> --}}
                                            <button type="submit"
                                                class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                                to Cart</button>
                                            {{-- </a> --}}
                                        </div>
                                    </div>
                                {{-- </form> --}}
                            </div>
                        {{-- @endif --}}
                    {{-- @endforeach --}}
                </div>
            @elseif(Auth::check() && Auth::user()->status == 'admin')
                <h1>YOU AREN'T MEMBER</h1>
            @endif
        @endauth


        @guest
            {{-- <div class="grid grid-cols-3 gap-2">
                @foreach ($products as $pro)
                    <div class="w-full max-w-sm rounded-lg bg-white shadow-md">
                        <a href="#">
                            <img class="rounded-t-lg p-8" src="{{ asset('storage/' . $pro->image) }}" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $pro['name'] }}</h5>
                            <span><a href="" class="decoration-slate-700-500 font-semibold text-gray-900 underline">See
                                    detail
                                </a></span>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pro['description'] }}</p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">{{ $pro['price'] }}</span><span
                                    class="text-gray-900">/pcs</span>
                                <a href="/register"
                                    class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        @endguest
    </div>
@endsection
