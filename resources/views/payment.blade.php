@extends('layouts.app')

@section('main_content')
   


    <div class="container">
        <h3>Payment</h3>
    </div>

    
    <div class="w-full max-w-sm p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-sky-500 dark:border-gray-700">
        <h5 class="mb-4 flex justify-center content-center text-xl font-bold text-white dark:text-white">Payment</h5>
        <div class="flex justify-center content-center items-baseline text-gray-900 dark:text-white">
            <span class="flex justify-center content-center text-5xl font-extrabold tracking-tight">Rp.15000</span>
        </div>
        <!-- List -->
        <div class="bg-white rounded-xl  mb-4 mt-4"> 
          <span class=" flex justify-center py-3">
            Bank Central Asia
        
          </span>
          <span class="flex justify-center text-3xl font-extrabold">
            4400182324
          </span>
          <span class="flex justify-center">
            a/n Daffa Nushshar
          </span>

        </div>

        <div class="mb-2">
<label class="block mb-2 text-xs font-medium text-red dark:text-red-900" for="file_input">please uploud your proof transaction below here</label>
<input class="block w-full text-sm text-white border border-gray-300 rounded-lg cursor-pointer bg-white dark:text-gray-400 focus:outline-none dark:bg-white dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="bukti_trf">
        </div>
        
          <div class="flex justify-center ">
        <button type="button" class="text-white bg-gray-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center content-center text-center">Done</button>
        </div>
    </div>

@endsection
