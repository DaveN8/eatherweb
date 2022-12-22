@extends('layout.main_layout')

@section('main_content')
    {{-- <form action="" class="p-12">
    <div class=" mb-6">
        <label for="flavour" class="block mb-2 text-sm font-medium text-gray-900 ">Flavour</label>
        <textarea id="flavour" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Masukan Rasa Makanan..."></textarea>
    </div>
    <div class="mb-6">
        <a href="#" type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</a>
    </div>
</form> --}}

    @auth
        @if (Auth::check() && Auth::user()->status == 'admin')
            <form action="{{ route('flavours.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <section class="py-1 bg-blueGray-50">
                    <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                            <div class="rounded-t bg-white mb-0 px-6 py-6">
                                <div class="text-center flex justify-between">
                                    <h6 class="text-blueGray-700 text-xl font-bold">
                                        Create Flavour
                                    </h6>
                                    <button
                                        class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="submit">
                                        Finish
                                    </button>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Flavours's Name
                                            </label>
                                            <input type="text" name="name"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        @elseif(Auth::check() && Auth::user()->status == 'member')
            <h1>YOU DON'T HAVE ACCESS</h1>
        @endif
    @endauth
@endsection
