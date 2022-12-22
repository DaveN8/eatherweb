@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h3>Payment</h3>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.imgur.com/ZTkt4I5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                        <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="w-full max-w-sm p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 flex justify-center content-center text-xl font-medium text-gray-500 dark:text-gray-400">Payment</h5>
        <div class="flex justify-center content-centerZZZZ items-baseline text-gray-900 dark:text-white">
            <span class="flex justify-center content-center text-5xl font-extrabold tracking-tight">Rp.15000</span>
        </div>
        <!-- List -->
        <div class="bg-white rounded-xl mb-4 mt-4"> 
          <span class=" flex justify-center py-3">
            Bank Central Asia
            (BCA)
          </span>
          <span class="flex justify-center">
            4400182324
          </span>
          <span class="flex justify-center">
            Daffa Nushshar
          </span>

        </div>

        <div class="flex justify-center">
          <button type="button" class="mb-4 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 flex justify-center content-center">uploud</button>
        </div>
        

        <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
    </div>

@endsection
