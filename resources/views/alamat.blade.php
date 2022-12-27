@extends('layouts.app')
@section('main_content')
    @auth
        @if (Auth::check() && Auth::user()->status == 'member')
            <div class="w-full p-4 bg-white border rounded-lg shadow-md sm:p-8  ">

                <div class="flex justify-between items-center">
                    <span class="text-blueGray-700 text-xl font-bold">ALAMAT</span>
                    <a href="{{ route('alamat.create') }}">
                        <button type="button"
                            class=" text-white bg-sky-500 hover:bg-sky-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center ">
                            Tambah Alamat
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </button>
                    </a>
                </div>
                @foreach ($address as $add)
                    @if (Auth::user()->id == $add['user_id'])
                        <div class="mt-5 w-full drop-shadow-lg p-6 bg-white border border-sky-300 rounded-lg shadow-md ">
                            <h1 class="text-dark">{{ $add['label'] }}</h1>
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 ">{{ $add['penerima'] }}</h5>
                            <h1 class="text-dark mb-2">{{ $add['no_hp'] }}</h1>
                            <p class="mb-3 font-normal text-gray-900">{{ $add['alamat_lengkap'] }}</p>
                            <div class="flex">
                                <a href="{{ route('alamat.edit', $add->id) }}"
                                    class="inline-flex items-center text-sky-600 hover:underline">
                                    Ubah Alamat
                                </a>
                                <span class="mx-2 text-gray-300">|</span>
                                <form action="{{ route('alamat.destroy', $add->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center text-sky-600 hover:underline">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
        
        @endif
    @endauth
@endsection
