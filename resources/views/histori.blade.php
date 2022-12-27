@extends('layouts.app')

@section('main_content')
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        @auth
            @if (Auth::check() && Auth::user()->status == 'member')
                @foreach ($history as $his)
                    @if (Auth::user()->id == $his['user_id'])
                        @if ($his['order_status'] == 'proses')
                            <div
                                class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <h1 class="text-white">Id: {{ $his['id'] }} </h1>
                                @foreach ($cart as $car)
                                    @if (Auth::user()->id == $car['user_id'])
                                        @if ($car['status'] == 'hide')
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $car->products->name }},</h5>
                                        @endif
                                    @endif
                                @endforeach
                                <div class="flex flex-col justify-end w-fit mr-0 m-auto">
                                    <div class="items-end">

                                        <h1 class="text-white text-left">
                                            Total Harga: Rp. {{ $his['total_pembayaran'] }}
                                        </h1>
                                    </div>
                                    <div class="items-end">
                                        {{-- <form action="{{ route('histori.show', $his->id ) }}" method="POST" enctype="multipart/form-data"> --}}
                                        <a href="{{ route('histori.show', $his->id) }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Update Bukti Transfer
                                        </a>
                                        {{-- </form> --}}
                                    </div>
                                </div>
                            </div>
                        @elseif($his['order_status'] == 'sudah')
                        <div
                        class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <h1 class="text-white">Id: {{ $his['id'] }} </h1>
                        @foreach ($cart as $car)
                            @if (Auth::user()->id == $car['user_id'])
                                @if ($car['status'] == 'hide')
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $car->products->name }},</h5>
                                @endif
                            @endif
                        @endforeach
                        <div class="flex flex-col justify-end w-fit mr-0 m-auto">
                            <div class="items-end">

                                <h1 class="text-white text-left">
                                    Total Harga: Rp. {{ $his['total_pembayaran'] }}
                                </h1>
                            </div>
                            <div class="items-end">
                                {{-- <form action="{{ route('histori.show', $his->id ) }}" method="POST" enctype="multipart/form-data"> --}}
                                <a href="{{ route('review.index') }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Ulas
                                </a>
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                        @endif
                    @endif
                @endforeach
            @elseif(Auth::check() && Auth::user()->status == 'admin')
                <h1>YOU AREN'T MEMBER</h1>
            @endif
        @endauth


        @guest
        @endguest
    </div>
@endsection
