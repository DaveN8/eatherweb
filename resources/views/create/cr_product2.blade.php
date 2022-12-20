@extends('layouts.app')
@section('main_content')
    @auth

        <form action="{{ route('product_ingredients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <section class="py-1 bg-blueGray-50">
                <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        name="name" htmlfor="grid-password">
                                        Ingredients
                                    </label>
                                    @foreach ($ingredient as $ing)
                                    <input type="checkbox" value="{{ $ing['id'] }}" name="ingredients_id"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @endforeach
                                    <input type="hidden" value="{{ $product_id }}">
                                    //shouldbelastinsertedproducts
                                </div>
                                <div class="relative w-full mb-3">
                                    <Button type="submit">Create Product</Button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>

    @endauth
@endsection