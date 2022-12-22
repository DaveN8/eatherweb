@extends('layouts.app')
@section('main_content')
    {{-- <form action="{{ route('product_ingredients.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <section class="py-1 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" name="name"
                        htmlfor="grid-password">
                        Ingredients
                    </label>
                    @foreach ($ingredients as $ing)
                    <input type="checkbox" value="{{ $ing['id'] }}" name="ingredients_id"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="">{{ $ing['name'] }}
                                            @endforeach
                                            <input type="hidden" value="{{ $products['id'] }}">
                                            shouldbelastinsertedproducts
                                        </div>
                                        <div class="relative w-full mb-3">
                                            <Button type="submit">Create Product</Button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form> --}}

    @auth
        <section class="py-1 bg-blueGray-50">
            <div class="lg:w-8/12 px-4 mx-auto mt-3">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h3 class="mb-4 font-semibold text-gray-900 ">Ingredients</h3>
                        <a href="/product"><button
                                class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                type="button">
                                Finish
                            </button>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-4 gap-4 place-items-center text-sm font-medium sm:flex">
                    @foreach ($ingredients as $ing)
                        <form action="{{ route('product_ingredients.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $ing['id'] }}" name="ingredients_id"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:border-gray-500">
                            <input type="hidden" value="{{ $products['id'] }}" name="products_id">
                            <div class="text-black w-fit border-sky-200 bg-gray-100 rounded-lg drop-shadow-md">
                                <button type="submit"
                                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">{{ $ing['name'] }}</button>
                            </div>
                        </form>
                    @endforeach
                </div>
                <div class="relative w-full my-6">
                    <label class="col-span-2py-3 ml-2 w-full text-sm font-medium py-2">Click To add
                        Ingredients</label>
                </div>
                <div class="relative w-full my-6">
                    <label class="col-span-2py-3 ml-2 w-full text-sm font-medium py-2">Added Ingredients</label>
                    <section class="py-1 bg-gray-100 rounded-lg drop-shadow-md">
                        <div class="lg:w-8/12 px-4 mx-auto mt-3">
                            <ul class="list-disc">
                                @foreach ($proings as $pin)
                                    @if ($pin['products_id'] == $products['id'])
                                        @foreach ($ingredients as $ing)
                                            @if ($pin['ingredients_id'] == $ing['id'])
                                                <li
                                                    class="text-black w-fit border-sky-200 rounded-lg">
                                                    <p>{{ $ing['name'] }}</p>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    @endauth
    {{-- <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="react-checkbox-list" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="react-checkbox-list"
                                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">React</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="angular-checkbox-list" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="angular-checkbox-list"
                                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Angular</label>
                            </div>
                        </li>
                        <li class="w-full dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="laravel-checkbox-list" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="laravel-checkbox-list"
                                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Laravel</label>
                            </div>
                        </li> --}}
@endsection
