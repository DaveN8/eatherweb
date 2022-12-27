@extends('layouts.app')

@section('main_content')
    <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
        @auth
            @if (Auth::check() && Auth::user()->status == 'member')
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                Keranjang
                            </h6>
                            {{-- <form action="{{}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH') --}}
                            {{-- <input type="hidden" value="1" name="checkout"> --}}
                            {{-- <button
                                        class="bg-sky-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="submit">
                                        Checkout
                                    </button> --}}
                            {{-- </form> --}}
                        </div>
                    </div>
                    <div class="flex flex-wrap flex-auto flex-col px-4 lg:px-10 py-10">
                        @foreach ($cart as $car)
                            <div
                                class="flex flex-auto p-4 items-center w-[680px] rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl mb-3">
                                <img class="mx-auto w-full block w-4/12 h-40 rounded-lg" alt="art cover" loading="lazy"
                                    src='{{ asset('storage/' . $car->products->image) }}' />
                                <div class="sm:w-8/12 pl-0 p-5">
                                    <div class="space-y-2">
                                        <div class="flex justify-between items-center space-y-4">
                                            <h4 class="text-md font-semibold text-cyan-900 text-justify">
                                                {{ $car->products->name }}
                                            </h4>
                                            <form action="{{ route('cart.destroy', $car->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150">
                                                    X
                                                </button>
                                            </form>
                                        </div>
                                        <div class="flex items-center space-x-4 justify-between">
                                            <div class="flex gap-3 space-y-1">
                                                <span class="text-sm">Total Price: RP.
                                                    {{ $car->products->price * $car['jumlah_product'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-center space-x-4 justify-between">
                                        <form action="{{ route('cart.update', $car->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="text-grey-500 flex flex-row space-x-1 my-4">

                                                <textarea name="catatan" cols="30" rows="2" placeholder="{{ $car['catatan'] }}"
                                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>
                                                <button type="submit"
                                                    class="bg-sky-500 text-white active:bg-sky-300 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">add
                                                    note</button>

                                            </div>
                                        </form>
                                        <form action="{{ route('cart.update', $car->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="flex flex-row space-x-1 items-center justify-center">
                                                <div
                                                    class="text-white cursor-pointer px-3 py-1 text-center justify-center items-center rounded-xl flex space-x-2 flex-row">
                                                    <input type="hidden" name="kurang" value="1">
                                                    <button type="submit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16"
                                                            id="IconChangeColor">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                                                                id="mainIconPathAttribute" stroke-width="0.1" stroke="#000000"
                                                                fill="#000000" filter="url(#shadow)">
                                                            </path>
                                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"
                                                                id="mainIconPathAttribute" stroke="#000000" fill="#000000">
                                                            </path>
                                                            <filter id="shadow">
                                                                <feDropShadow id="shadowValue" stdDeviation="0" dx="0.1"
                                                                    dy="0" flood-color="black">
                                                                </feDropShadow>
                                                            </filter>
                                                            <filter id="shadow">
                                                                <feDropShadow id="shadowValue" stdDeviation=".5" dx="0"
                                                                    dy="0" flood-color="black">
                                                                </feDropShadow>
                                                            </filter>
                                                        </svg>
                                                        <button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="px-4">
                                            <span class="text-black">{{ $car['jumlah_product'] }}</span>
                                        </div>
                                        <form action="{{ route('cart.update', $car->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div
                                                class="text-white cursor-pointer px-3 py-1 text-center justify-center items-center rounded-xl flex space-x-2 flex-row">
                                                <input type="hidden" name="tambah" value="1">
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                        width="32" height="32" viewBox="0 0 32 32">
                                                        <path
                                                            d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 15 10 L 15 15 L 10 15 L 10 17 L 15 17 L 15 22 L 17 22 L 17 17 L 22 17 L 22 15 L 17 15 L 17 10 Z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- <div class="w-full lg:w-8/12 px-4 mx-auto mt-6"> --}}
                <div class="flex justify-center w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <form action="{{route('histori.show')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                    <div class="flex px-4 lg:px-10 py-10">
                        <div
                            class="flex p-4 w-auto items-center justify-center rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl mb-4">
                            <div class="p-5">
                                <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                                <select class="block p-2 text-gray-600 w-full text-sm" name="alamat_id">
                                    @foreach ($address as $add)
                                        @if (Auth::user()->id == $add['user_id'])
                                            <option value="{{ $add['id'] }}"><span class="text-gray-600 mr-1">{{ $add['label'] }},</span><span
                                                    class="text-gray-600 mr-1">{{ $add['penerima'] }},</span><span
                                                    class="text-gray-600 mr-1">{{ $add['alamat_lengkap'] }}</span></option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="flex px-4 lg:px-10 py-10">
                        
                            <div
                                class="flex p-4 w-auto items-center justify-center rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl mb-4">
                                <div class="p-5">
                                    <div class="space-y-2">
                                        <div class="flex items-center space-x-4 justify-between">
                                            <div class="flex gap-3 space-y-1">
                                                {{-- <span class="text-xl">Total Price: RP.
                                                                {{ $final = $car->products->price * $car['jumlah_product'] }}</span> --}}

                                                @php
                                                    $final = 0;
                                                @endphp
                                                @foreach ($cart as $car)
                                                    @if ($car->user_id == Auth::user()->id && $car->status == 'show')
                                                        @php
                                                            $final += $car->products->price * $car['jumlah_product'];
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                <span class="text-xl">Total Price: RP.
                                                    {{ $final }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 justify-center w-full flex-auto">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="total_pembayaran" value="{{ $final }}">
                                <button
                                    class="grow mt-3 bg-sky-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150"
                                    type="submit">
                                    Checkout
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- </div> --}}
            @elseif(Auth::check() && Auth::user()->status == 'admin')
                <p>YOU AREN'T MEMBER</p>
            @endif
        @endauth

    </div>
@endsection
