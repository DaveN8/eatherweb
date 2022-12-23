@extends('layouts.app')
@section('main_content')
    <div class="p-5">
        <h4 class="py-1 my-2">Wishlist</h4>
        <hr>
        <h1> 3 items</h1>

        <div
            class="p-4 items-center justify-center w-[680px] rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
            <img class="mx-auto w-full block w-4/12 h-40 rounded-lg" alt="art cover" loading="lazy"
                src='https://picsum.photos/seed/2/2000/1000' />
            <div class="sm:w-8/12 pl-0 p-5">
                <div class="space-y-2">
                    <div class="space-y-4">
                        <h4 class="text-md font-semibold text-cyan-900 text-justify">
                            Nama Product
                        </h4>
                    </div>
                    <div class="flex items-center space-x-4 justify-between">
                        <div class="flex gap-3 space-y-1">

                            <span class="text-sm">Extra Pedas ya kakk!! 🔥</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4 justify-between">
                    <div class="text-grey-500 flex flex-row space-x-1  my-4">
                        <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-xs">2 hours ago</p>
                    </div>
                    <div class="flex flex-row space-x-1">
                        <a href="#"
                            class=" text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm mx-8 px-8 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">Remove</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
