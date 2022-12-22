@extends('layouts.app')
@section('main_content')
    {{-- <form action="/product" method="POST">
        <div class="">

        </div>
    </form> --}}
    @auth
        @if (Auth::check() && Auth::user()->status == 'admin')
            <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <input type="hidden" name="_method" value="PATCH"> --}}
                @method('PATCH')
                <section class="py-1 bg-blueGray-50">
                    <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                            <div class="rounded-t bg-white mb-0 px-6 py-6">
                                <div class="text-center flex justify-between">
                                    <h6 class="text-blueGray-700 text-xl font-bold">
                                        Edit Product
                                    </h6>
                                    <h6 class="text-blueGray-700 text-xl font-bold">
                                        Status: "{{ $products['status'] }}"
                                    </h6>
                                    @if ($products['status'] == 'show')
                                    <input type="hidden" name="status" value="hide">
                                        <button type="submit"
                                            class="bg-red-700 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">Hide</button>
                                    @elseif ($products['status'] == 'hide')
                                    <input type="hidden" name="status" value="show">
                                        <button type="submit"
                                            class="bg-green-700 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">Show</button>
                                    @endif
                                    <button
                                        class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="submit">
                                        Finish
                                    </button>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Product Information
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                Product's Name
                                            </label>
                                            <input type="text" name="name" value="{{ $products['name'] }}"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                Stock
                                            </label>
                                            <input type="number" name="stock" value="{{ $products['stock'] }}"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @if ($errors->has('stock'))
                                                <p class="text-danger">{{ $errors->first('stock') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Price
                                            </label>
                                            <input type="number" name="price" value="{{ $products['price'] }}"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @if ($errors->has('price'))
                                                <p class="text-danger">{{ $errors->first('price') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Image
                                            </label>
                                            <img src="{{ asset('storage/' . $products->image) }}" alt=""
                                                class="w-25 h-25 rounded mx-auto d-block">
                                            <input type="file" name="image"
                                                class="border-0 px-3 py-0.5 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Flavour and Category
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Flavour
                                            </label>
                                            {{-- @foreach ($flavours as $fla)
                                                @if ($fla['id'] == $products['kategori_id'])
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                    Previous category: {{ $fla['name'] }}
                                                </label>
                                                @endif
                                            @endforeach
                                            <div>
                                                <select name="flavour"
                                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                    @foreach ($flavours as $fla)
                                                        <option value="{{ $fla['id'] }}">{{ $fla['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div> --}}
                                            {{-- @foreach ($flavours as $fla) --}}
                                                {{-- @if ($fla['id'] == $products['flavours_id']) --}}
                                                    {{-- <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                    Previous category: {{ $fla['name'] }}
                                                </label> --}}
                                                    <input type="text" value="{{ $products->flavours->name }}" readonly
                                                        class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                    <input type="hidden" name="flavour" value="{{ $products->flavours->id }}" readonly>
                                                {{-- @endif
                                            @endforeach --}}
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Category
                                            </label>
                                            {{-- @foreach ($categories as $cat)
                                                @if ($cat['id'] == $products['kategori_id'])
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                                    Previous category: {{ $cat['name'] }}
                                                </label>
                                                @endif
                                            @endforeach
                                            <div>
                                                <select name="category"
                                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                    @foreach ($categories as $cat)
                                                        <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div> --}}
                                            {{-- @foreach ($categories as $cat)
                                                @if ($cat['id'] == $products['kategori_id']) --}}
                                                    <input type="text" value="{{ $products->kategori->name }}" readonly
                                                        class="border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                    <input type="hidden" name="category" value="{{ $products->kategori->id }}" readonly>
                                                {{-- @endif
                                            @endforeach --}}
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Description
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <textarea type="text" name="description"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                rows="4">{{ $products['description'] }}</textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </form>

            <section class="py-1 bg-blueGray-50">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="w-full lg:w-8/12 px-4 mx-auto my-6">
                        <ul class="list-disc">
                            @foreach ($proings as $pin)
                                @if ($pin['products_id'] == $products['id'])
                                    @foreach ($ingredients as $ing)
                                        @if ($pin['ingredients_id'] == $ing['id'])
                                            <li class="text-black w-fit border-sky-200 rounded-lg">
                                                <p>{{ $ing['name'] }}</p>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>

            {{-- <form action="{{ route('products.destroy', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="flex justify-center">
                    @if ($products['status'] == 'show')
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hide</button>
                    @elseif ($products['status'] == 'hide')
                        <button type="submit"
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Show</button>
                    @endif
                </div>
            </form> --}}
        @elseif(Auth::check() && Auth::user()->status == 'member')
            <p>YOU DON'T HAVE ACCESS</p>
        @endif
    @endauth
@endsection
