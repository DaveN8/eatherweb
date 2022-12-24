@extends('layouts.app')
@section('main_content')
    @auth
        @if (Auth::check() && Auth::user()->status == 'member')
            <div class="grid grid-cols-2 gap-2 justify-items-center">
                @foreach ($wishlist as $wis)
                    @if ($wis['user_id'] == Auth::user()->id)
                        @if ($wis->products->status == 'hide')
                        @elseif($wis->products->status == 'show')
                            <div
                                class="p-4 items-center justify-center w-full rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
                                <img class="mx-auto w-1/4 block h-fit rounded-lg" alt="Foto Produk" loading="lazy"
                                    src='{{ asset('storage/' . $wis->products->image) }}' />
                                <div class="sm:w-8/12 pl-0 p-5">
                                    <div class="space-y-2">
                                        <div class="space-y-4">
                                            <h4 class="text-md font-semibold text-cyan-900 text-justify">
                                                {{ $wis->products->name }}
                                            </h4>
                                        </div>
                                        <div class="flex items-center space-x-4 justify-between">
                                            <div class="flex gap-3 space-y-1">
                                                <span class="text-sm">{{ $wis->products->flavours->name }}</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4 justify-between">
                                        <div class="flex flex-row space-x-1">
                                            <span class="text-xl">Rp. {{ $wis->products->price }}</span>
                                        </div>
                                        <div class="flex flex-row space-x-1">
                                            <form action="{{ route('wishlist.destroy', $wis->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 focus:outline-none">Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        @elseif (Auth::check() && Auth::user()->status == 'admin')
        @endif
    @endauth
@endsection
