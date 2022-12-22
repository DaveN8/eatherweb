@extends('layouts.app')

@section('main_content')
    {{-- <div class="container ">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="image/food.png" class="card-img-bottom" alt="...">
                        <div class="text-center">
                            <span class="card-title fs-1">Rp. 15.000</span><span>/pcs</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <h1 class="text-center">Original</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed erat facilisis, lobortis nisl et,
                    fermentum mauris. Aliquam vel mi ut erat hendrerit suscipit. Pellentesque vel pretium sapien.
                    Aliquam facilisis, lorem vitae aliquet imperdiet, nunc justo tristique lectus,
                    mollis posuere nulla nibh a erat. Ut aliquet sapien vulputate, dapibus arcu vel, interdum dolor.
                    Maecenas ac dui vitae dui vestibulum semper. Etiam convallis nunc id consequat mollis.
                    Pellentesque rutrum sagittis sodales. Praesent suscipit, risus vitae malesuada bibendum,
                    ipsum diam iaculis orci, ut convallis sem ligula ac dui.</p>
                <div class="d-grid gap-2 col-6 ">
                    <button type="button" class="btn btn-info">Add to Cart</button>
                </div>
            </div>
        </div>
    </div> --}}



    <div class="grid grid-cols-3 gap-4">
        <div class="col-start-2 col-span-4">
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5">
                    <div>
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rp.
                            15.000<span>/pcs</span></h5>
                    </div>
                </div>
                <div>
                    <img class="rounded-t-lg" src="" alt="" />
                </div>
            </div>
        </div>
        <div class="col-span-2 ">
            <h1 class="text-center">Original</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed erat facilisis, lobortis nisl et,
                    fermentum mauris. Aliquam vel mi ut erat hendrerit suscipit. Pellentesque vel pretium sapien.
                    Aliquam facilisis, lorem vitae aliquet imperdiet, nunc justo tristique lectus,
                    mollis posuere nulla nibh a erat. Ut aliquet sapien vulputate, dapibus arcu vel, interdum dolor.
                    Maecenas ac dui vitae dui vestibulum semper. Etiam convallis nunc id consequat mollis.
                    Pellentesque rutrum sagittis sodales. Praesent suscipit, risus vitae malesuada bibendum,
                    ipsum diam iaculis orci, ut convallis sem ligula ac dui.</p>
        </div>
    </div>
@endsection
