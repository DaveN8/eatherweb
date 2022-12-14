@extends('layouts.app')

@section('main_content')
    {{-- <div class="  text-gray-500 bg-white rounded-lg shadow-xl dark:bg-white dark:text-gray-400" role="alert">
    <div class="flex">
        <img  class="mx-4 my-auto h-40 rounded-lg"  alt="art cover" loading="lazy" src='https://picsum.photos/seed/2/2000/1000' />
        <div class="ml-3 text-sm font-normal my-11">
            <span class="mb-1 text-sm font-extrabold text-gray-900 dark:text-black">Flavour Product</span>
            <div class="mb-2 text-sm font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</div> 
            <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-sky-500 dark:hover:bg-sky-900 dark:focus:ring-blue-800">Add To Cart</a>   
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
</div> --}}
    @auth
        @if (Auth::check() && Auth::user()->status == 'member')
            <div
                class="m-auto flex items-center justify-center w-fit px-5 text-gray-500 bg-white rounded-lg shadow-xl dark:bg-white dark:text-gray-400">
                <div class="flex items-center justify-center">
                    <img class="mx-4 h-40 rounded-lg" alt="art cover" loading="lazy"
                        src='{{ asset('storage/' . $products->image) }}' />
                    <div class="ml-3 my-11">
                        <div class="mb-2 text-xl font-extrabold text-black">
                            <span>{{ $products['name'] }}</span>
                        </div>
                        <div class="text-base text-gray-400">
                            <span>Flavours: {{ $products->flavours->name }}</span>
                        </div>
                        <div class="text-base text-gray-400">
                            <span>Category: {{ $products->kategori->name }}</span>
                        </div>
                        <br>
                        <div class=" mb-5 text-3xl text-gray-700">
                            <span>Rp. {{ $products['price'] }}</span>
                        </div>
                        <div id="Ingredients"class="mb-2 text-sm font-normal">{{ $products['description'] }}</div>
                        <div class="mb-5 text-sm font-normal">Ingredients:
                            @foreach ($product_ingredients as $ping)
                                @if ($ping['products_id'] == $products['id'])
                                    <span class="mb-2 text-sm text-gray-400">{{ $ping->ingredients->name }},</span>
                                @endif
                            @endforeach
                        </div>
                        <div class="flex ">
                            <form action="{{ route('cart.show', $products->id) }}" method="GET" enctype="multipart/form-data">
                                @csrf
                                <button type="submit"
                                    class="rounded-lg bg-blue-700 px-5 py-2.5 mr-3 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                    to Cart</button>
                            </form>
                            <form action="{{ route('wishlist.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="products_id" value="{{ $pro->id }}">
                                <button><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                        class="w-4 text-yellow-500 focus:ring-3 focus:ring-yellow-400" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                        </path>
                                    </svg></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(Auth::check() && Auth::user()->status == 'admin')
            @php
                return redirect('admin/index');
            @endphp
        @endif
    @endauth
    @guest
        <div class="h-screen flex items-center justify-center">
            <div
                class="h-fit m-auto flex items-center justify-center w-fit px-5 text-gray-500 bg-white rounded-lg shadow-xl dark:bg-white dark:text-gray-400">
                <div class="flex items-center justify-center">
                    <img class="mx-4 h-40 rounded-lg" alt="art cover" loading="lazy"
                        src='{{ asset('storage/' . $products->image) }}' />
                    <div class="ml-3 my-11">
                        <div class="mb-2 text-xl font-extrabold text-black">
                            <span>{{ $products['name'] }}</span>
                        </div>
                        <div class="text-base text-gray-400">
                            <span>Flavours: {{ $products->flavours->name }}</span>
                        </div>
                        <div class="text-base text-gray-400">
                            <span>Category: {{ $products->kategori->name }}</span>
                        </div>
                        <br>
                        <div class=" mb-5 text-3xl text-gray-700">
                            <span>Rp. {{ $products['price'] }}</span>
                        </div>
                        <div id="Ingredients"class="mb-2 text-sm font-normal">{{ $products['description'] }}</div>
                        <div class="mb-5 text-sm font-normal">Ingredients:
                            @foreach ($product_ingredients as $ping)
                                @if ($ping['products_id'] == $products['id'])
                                    <span class="mb-2 text-sm text-gray-400">{{ $ping->ingredients->name }},</span>
                                @endif
                            @endforeach
                        </div>
                        <div class="flex ">
                            <a href="/register">
                                <button type="submit"
                                    class="rounded-lg bg-blue-700 px-5 py-2.5 mr-3 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                    to Cart</button>
                            </a>
                            <a href="/login" class="flex justify-center items-center focus:ring-3 focus:ring-yellow-400">
                                <button><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                        class="w-4 text-yellow-500 hover:bg-yellow-400" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                        </path>
                                    </svg></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="w-full p-4 drop-shadow-lg bg-white border rounded-lg shadow-md sm:p-8 ">
            <div class="text-center mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 ">Review</h5>
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y  divide-gray-700">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">

                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate ">
                                    Neil Sims
                                </p>
                                <p class="text-sm text-gray-500 truncate ">
                                    Makanannya enak aku suka
                                </p>
                            </div>

                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">

                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate ">
                                    Bonnie Green
                                </p>
                                <p class="text-sm text-gray-500 truncate ">
                                    AAAAAA JADI PENGEN BELI LAGI
                                </p>
                            </div>

                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">

                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate ">
                                    Michael Gough
                                </p>
                                <p class="text-sm text-gray-500 truncate ">
                                    Hmmmmm boleh juga ni makanan
                                </p>
                            </div>

                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">

                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate ">
                                    Lana Byrd
                                </p>
                                <p class="text-sm text-gray-500 truncate ">
                                    pokemon aku suka
                                </p>
                            </div>

                        </div>
                    </li>
                    <li class="pt-3 pb-0 sm:pt-4">
                        <div class="flex items-center space-x-4">

                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate ">
                                    Thomes Lean
                                </p>
                                <p class="text-sm text-gray-500 truncate ">
                                    bisa di adu bosss
                                </p>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div> --}}

    @endguest
@endsection
