@extends('layouts.app')

@section('main_content')
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">

        @auth
            @if (session()->has('message '))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (Auth::check() && Auth::user()->status == 'member')
                <div class="grid grid-cols-3 gap-5">
                    @foreach ($products as $pro)
                        @if ($pro['status'] == 'hide')
                        @elseif($pro['status'] == 'show')
                            <div
                                class="w-full max-w-sm rounded-lg bg-white shadow-md grid grid-cols-1 content-between place-content-between place-items-stretch">
                                {{-- <input type="hidden" name="products_id" value="{{ $pro['id'] }}"> --}}
                                {{-- <div class="grid grid-cols-1 gap-1 content-between "> --}}
                                <a href="{{ route('products.show', $pro->id) }}" class="h-full w-full">
                                    <img class="rounded-t-lg p-8" src="{{ asset('storage/' . $pro->image) }}"
                                        alt="product image" />
                                </a>
                                <div class="px-5 pb-5">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $pro['name'] }}</h5>
                                    <span><a href="{{ route('products.show', $pro->id) }}"
                                            class="decoration-slate-700-500 font-semibold text-gray-400 underline">See
                                            detail
                                        </a></span>
                                    <p class="mb-3 font-normal text-gray-500">{{ $pro['description'] }}
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold text-gray-900">{{ $pro['price'] }} <span
                                                class="text-base text-gray-600">/pcs</span></span>
                                        {{-- <a href="{{ route('cart.create', $pro["id"]) }}"> --}}
                                        {{-- <a href=""> --}}
                                        <form action="{{ route('cart.show', $pro->id) }}" method="GET"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <button type="submit"
                                                class="rounded-lg bg-sky-500 px-3 py-2 text-center text-sm font-medium text-white hover:bg-sky-300 focus:outline-none focus:ring-4 focus:ring-blue-300">Add
                                                to Cart</button>
                                        </form>
                                        <form action="{{ route('wishlist.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="products_id" value="{{ $pro->id }}">
                                            <button><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                    class="w-4 text-yellow-500 focus:ring-3 focus:ring-yellow-400"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                    </path>
                                                </svg></button>
                                        </form>

                                        {{-- </a> --}}
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        @endif
                    @endforeach
                </div>
            @elseif(Auth::check() && Auth::user()->status == 'admin')
                <div class="grid grid-cols-4 gap-3 my-3">
                    <div class="w-fit rounded-lg shadow-md mx-auto">
                        <a href=" {{ route('products.create') }} "><button
                                class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                Product</button></a>
                    </div>
                    <div class="w-fit rounded-lg shadow-md mx-auto">
                        <a href=" {{ route('ingredients.create') }} "><button
                                class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                Ingredients</button></a>
                    </div>
                    <div class="w-fit rounded-lg shadow-md mx-auto">
                        <a href=" {{ route('category.create') }} "><button
                                class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                Category</button></a>
                    </div>
                    <div class="w-fit rounded-lg shadow-md mx-auto">
                        <a href=" {{ route('flavours.create') }} "><button
                                class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                Flavours</button></a>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    @foreach ($products as $pro)
                        <div class="w-full max-w-sm rounded-lg bg-white shadow-md">
                            <a href="">
                                <img class="rounded-t-lg p-8" src="{{ asset('storage/' . $pro->image) }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $pro['name'] }}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $pro['description'] }}</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-2xl font-bold text-gray-900">{{ $pro['price'] }}</span><span
                                        class="text-gray-900">/pcs</span>
                                    <a href="{{ route('products.edit', $pro->id) }}"
                                        class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endauth


        @guest
            <div class="grid grid-cols-3 gap-2">
                @foreach ($products as $pro)
                    @if ($pro['status'] == 'hide')
                    @elseif($pro['status'] == 'show')
                        <div class="w-full max-w-sm rounded-lg bg-white shadow-md">
                            <a href="#">
                                <img class="rounded-t-lg p-8" src="{{ asset('storage/' . $pro->image) }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $pro['name'] }}</h5>
                                <span><a href="{{ route('products.show', $pro->id) }}"
                                        class="decoration-slate-700-500 font-semibold text-gray-900 underline">See
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
                    @endif
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
