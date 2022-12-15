@extends('layouts.app')

@section('main_content')
    {{-- 

    <div class="container mb-4">
        <div class="row row-cols-2">

            @foreach ($aboutus as $au)
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/image/{{ $au['ftanggota'] }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $au['anggota'] }}</h5>
                                <p class="card-text">{{$au['position']}}</p>
                                <p class="card-text">{{$au['lbanggota']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div> --}}

    <h1 class="text-center mb-5">Eather Corporation</h1>
    <p class="text-center px-5">Eather merupakan brand memiliki makna “Not Comparable” (Tak
        Sebanding). Penjelasan dari makna eather adalah tak sebanding dengan
        lainnya. Eather berusaha memberikan suatu inovasi dan kreatifitas yang
        belum pernah dirasakan oleh konsumen.</p>

    @foreach ($aboutus as $au)
        <div class="max-w-sm w-full lg:max-w-full lg:flex py-4">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                style="background-image: url('image/{{$au['ftanggota']}}')">
            </div>
            <div
                class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <div class="text-gray-900 font-bold text-xl mb-2">{{$au['anggota']}}</div>
                    <p class="text-gray-700 text-base">{{$au['position']}}</p>
                    <p class="text-gray-700 text-base">{{$au['lbanggota']}}</p>
                </div>
                {{-- <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="image/handhika.jpg" alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                        <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                        <p class="text-gray-600">Aug 18</p>
                    </div>
                </div> --}}
            </div>
        </div>
    @endforeach
@endsection
