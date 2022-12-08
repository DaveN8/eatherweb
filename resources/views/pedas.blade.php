@extends('layout.main_layout')

@section('main_content')
    <div class="container ">
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
                <h1 class="text-center">Pedas</h1>
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
    @endsection
