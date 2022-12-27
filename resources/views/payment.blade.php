@extends('layouts.app')

@section('main_content')
    <div class="h-screen flex justify-center items-center">
        <form action="{{ route('histori.update', $historis->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
            <div class="m-auto w-full h-fit max-h-fit max-w-lg p-4 bg-sky-400 border rounded-lg shadow-md sm:p-8">
                <h5 class="mb-4 flex justify-center content-center text-xl font-bold text-white">Payment</h5>
                <div class="flex justify-center content-center items-baseline text-gray-900">
                    <span class="flex justify-center content-center text-3xl font-extrabold tracking-tight">Rp.
                        {{ $historis['total_pembayaran'] }}</span>
                </div>
                <!-- List -->
                <div class="bg-white rounded-xl  mb-4 mt-4">
                    <span class="flex justify-center py-3">
                        Bank Central Asia

                    </span>
                    <span class="py-3 flex justify-center text-3xl font-extrabold">
                        4400182324
                    </span>
                    <span class="py-3 flex justify-center">
                        a/n Daffa Nushshar
                    </span>

                </div>

                <div class="mb-2">
                    <label class="block mb-2 text-xs font-medium text-red-900" for="file_input">Please uploud your
                        proof transaction below here</label>
                    <input
                        class="block w-full text-sm text-white border border-gray-300 rounded-lg cursor-pointer bg-white dark:text-gray-400 focus:outline-none dark:bg-white dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="bukti_trf">
                </div>

                <div class="flex justify-center ">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <button type="button"
                        class="text-white bg-gray-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center content-center text-center">Done</button>
                </div>
            </div>
        </form>
    </div>
@endsection
