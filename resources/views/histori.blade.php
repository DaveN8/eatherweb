@extends('layouts.app')

@section('main_content')
    <h3>History</h3>
    <p>You have 3 item in your cart</p>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="col">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <p>Rp. 15.000</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
