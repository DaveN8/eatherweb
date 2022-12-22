@extends('layouts.app')

@section('main_content')
    @auth
        @if (Auth::check() && Auth::user()->status == 'member')
            <section class="py-1 bg-blueGray-50">
                <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                        <div class="rounded-t bg-white mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                                <h6 class="text-blueGray-700 text-xl font-bold">
                                    Keranjang
                                </h6>
                                {{-- <button
                                        class="bg-sky-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="submit">
                                        Checkout
                                    </button> --}}
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10">
                            @foreach ($cart as $car)
                                <form action="{{ route('histori.show', $car->id) }}" method="GET" enctype="multipart/form-data">
                                    <div
                                        class="flex p-4 items-center justify-center w-[680px] rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
                                        <img class="mx-auto w-full block w-4/12 h-40 rounded-lg" alt="art cover" loading="lazy"
                                            src='{{ asset('storage/' . $car->products->image) }}' />
                                        <div class="sm:w-8/12 pl-0 p-5">
                                            <div class="space-y-2">
                                                <div class="flex justify-between items-center space-y-4">
                                                    <h4 class="text-md font-semibold text-cyan-900 text-justify">
                                                        {{ $car->products->name }}
                                                    </h4>
                                                    <button
                                                        class="bg-sky-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150"
                                                        type="submit">
                                                        Checkout
                                                    </button>
                                                </div>
                                                <div class="flex items-center space-x-4 justify-between">
                                                    <div class="flex gap-3 space-y-1">
                                                        <span class="text-sm">Total Price: RP.
                                                            {{ $car->products->price }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex items-center space-x-4 justify-between">
                                                <div class="text-grey-500 flex flex-row space-x-1  my-4">
                                                    <div>
                                                        <textarea name="catatan" cols="30" rows="2" placeholder="{{ $car['catatan'] }}"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row space-x-1 items-center justify-center">
                                                    <div
                                                        class="text-white cursor-pointer px-3 py-1 text-center justify-center items-center rounded-xl flex space-x-2 flex-row">
                                                        <a href="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                height="25" fill="currentColor" class="bi bi-dash-circle"
                                                                viewBox="0 0 16 16" id="IconChangeColor">
                                                                <path
                                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                                                                    id="mainIconPathAttribute" stroke-width="0.1"
                                                                    stroke="#000000" fill="#000000" filter="url(#shadow)">
                                                                </path>
                                                                <path
                                                                    d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"
                                                                    id="mainIconPathAttribute" stroke="#000000" fill="#000000">
                                                                </path>
                                                                <filter id="shadow">
                                                                    <feDropShadow id="shadowValue" stdDeviation="0"
                                                                        dx="0.1" dy="0" flood-color="black">
                                                                    </feDropShadow>
                                                                </filter>
                                                                <filter id="shadow">
                                                                    <feDropShadow id="shadowValue" stdDeviation=".5"
                                                                        dx="0" dy="0" flood-color="black">
                                                                    </feDropShadow>
                                                                </filter>
                                                            </svg>
                                                        </a>



                                                        <!-- <span>23</span> -->
                                                    </div>
                                                    <div class="px-4">
                                                        <span class="text-black">{{ $car['jumlah_product'] }}</span>
                                                    </div>
                                                    <div
                                                        class="text-white cursor-pointer px-3 py-1 text-center justify-center items-center rounded-xl flex space-x-2 flex-row">
                                                        <a href="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px"
                                                                y="0px" width="32" height="32"
                                                                viewBox="0 0 32 32">

                                                                <path
                                                                    d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 15 10 L 15 15 L 10 15 L 10 17 L 15 17 L 15 22 L 17 22 L 17 17 L 22 17 L 22 15 L 17 15 L 17 10 Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @elseif(Auth::check() && Auth::user()->status == 'admin')
            <p>YOU AREN'T MEMBER</p>
        @endif
    @endauth
    {{-- <div class="p-5 mx-auto">
        <h3>
            Cart </h3>
        <br>
        <hr>
        <div
            class="flex p-4 items-center justify-center w-[680px] rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img class="mx-auto w-full block w-4/12 h-40 rounded-lg" alt="art cover" loading="lazy"
                src='https://picsum.photos/seed/2/2000/1000' />
            <div class="sm:w-8/12 pl-0 p-5">
                <div class="space-y-2">
                    <div class="space-y-4">
                        <h4 class="text-md font-semibold text-cyan-900 text-justify">
                            Nama Product
                        </h4>
                    </div>
                    <div class="flex items-center space-x-4 justify-between">
                        <div class="flex gap-3 space-y-1">

                            <span class="text-sm">Yeah same question here too 🔥</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4 justify-between">
                    <div class="text-grey-500 flex flex-row space-x-1  my-4">
                        <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-xs">2 hours ago</p>
                    </div>
                    <div class="flex flex-row space-x-1">
                        <div
                            class=" text-white cursor-pointer px-3 py-1 text-center justify-center items-center rounded-xl flex space-x-2 flex-row">

                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32"
                                height="32" viewBox="0 0 32 32">

                                <path
                                    d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 15 10 L 15 15 L 10 15 L 10 17 L 15 17 L 15 22 L 17 22 L 17 17 L 22 17 L 22 15 L 17 15 L 17 10 Z">
                                </path>
                                <span class="text-black"> 0</span>
                            </svg>
                            <!-- <span>23</span> -->
                        </div>
                        <div
                            class="bg-green-500 shadow-lg shadow- shadow-green-600 text-white cursor-pointer px-3 text-center justify-center items-center py-1 rounded-xl flex space-x-2 flex-row">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M885.9 533.7c16.8-22.2 26.1-49.4 26.1-77.7 0-44.9-25.1-87.4-65.5-111.1a67.67 67.67 0 0 0-34.3-9.3H572.4l6-122.9c1.4-29.7-9.1-57.9-29.5-79.4A106.62 106.62 0 0 0 471 99.9c-52 0-98 35-111.8 85.1l-85.9 311H144c-17.7 0-32 14.3-32 32v364c0 17.7 14.3 32 32 32h601.3c9.2 0 18.2-1.8 26.5-5.4 47.6-20.3 78.3-66.8 78.3-118.4 0-12.6-1.8-25-5.4-37 16.8-22.2 26.1-49.4 26.1-77.7 0-12.6-1.8-25-5.4-37 16.8-22.2 26.1-49.4 26.1-77.7-.2-12.6-2-25.1-5.6-37.1zM184 852V568h81v284h-81zm636.4-353l-21.9 19 13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19 13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 16.5-7.2 32.2-19.6 43l-21.9 19 13.9 25.4a56.2 56.2 0 0 1 6.9 27.3c0 22.4-13.2 42.6-33.6 51.8H329V564.8l99.5-360.5a44.1 44.1 0 0 1 42.2-32.3c7.6 0 15.1 2.2 21.1 6.7 9.9 7.4 15.2 18.6 14.6 30.5l-9.6 198.4h314.4C829 418.5 840 436.9 840 456c0 16.5-7.2 32.1-19.6 43z">
                                </path>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
