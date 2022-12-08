@extends('layout.main_layout')

@section('main_content')
    <div class="container text-center">
        <div class="row">
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2  mb-3">
                            <a href="/original" class="btn btn-outline-info btn-lg" type="button">Original</a>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <span class="card-title fs-1">Rp. 15.000</span><span>/pcs</span>
                    </div>
                    <img src="image/food.png" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2  mb-3">
                            <a href="/pedas" class="btn btn-outline-info btn-lg" type="button">Pedas</a>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <span class="card-title fs-1">Rp. 15.000</span><span>/pcs</span>
                    </div>
                    <img src="image/food.png" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2  mb-3">
                            <a href="/panggang" class="btn btn-outline-info btn-lg" type="button">Sapi Panggang</a>
                        </div>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <span class="card-title fs-1">Rp. 15.000</span><span>/pcs</span>
                    </div>
                    <img src="image/food.png" class="card-img-bottom" alt="...">
                </div>
            </div>
        </div>
    </div>
@endsection
