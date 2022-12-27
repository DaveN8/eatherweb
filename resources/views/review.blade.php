@extends('layouts.app')

@section('main_content')
    @auth
        @if (Auth::check() && Auth::user()->status == 'member')
            {{-- @foreach ($cart as $car)
                @if ($car['status'] == 'hide')
                    <form action="{{ route('review.create') }}" class="p-12">
                        <div class=" mb-6">
                            <label for="review" class="block mb-2 text-sm font-medium text-gray-900 ">Review</label>
                            <textarea name="review" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Review..."></textarea>
                        </div>
                        <div class="mb-6">
                            <input type="hidden" name="user_id" value="{{ $car['user_id'] }}">
                            <input type="hidden" name="products_id" value="{{ $car['products_id'] }}">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                    </form>
                @endif
            @endforeach --}}


            <div class="w-full p-4 bg-white border rounded-lg shadow-md sm:p-8  ">
                @foreach ($cart as $car)
                    @if (Auth::user()->id == $car['user_id'] && $car['status'] == 'hide')
                        <div class="mt-5 w-full drop-shadow-lg p-6 bg-white border border-sky-300 rounded-lg shadow-md ">
                            <h1 class="text-dark">{{ $car->products->name }}</h1>
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 ">Jumlah beli:
                                {{ $car['jumlah_product'] }}</h5>
                            <div class="flex">
                                <a href="{{ route('review.create', $car->products->id) }}"
                                    class="inline-flex items-center text-sky-600 hover:underline">
                                    Ulas
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <a href="{{ route('histori.index') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
        @endif
    @endauth
@endsection
