@extends('layouts.app')

@section('main_content')
    {{-- <div class="  text-gray-500 bg-white rounded-lg shadow-xl dark:bg-white dark:text-gray-400" role="alert">
    <div class="flex">
        <img  class="mx-4 my-auto h-40 rounded-lg"  alt="art cover" loading="lazy" src='https://picsum.photos/seed/2/2000/1000' />
        <div class="ml-3 text-sm font-normal my-11">
            <span class="mb-1 text-sm font-extrabold text-gray-900 dark:text-black">Flavour Product</span>
            <div class="mb-2 text-sm font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</div> 
            <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-sky-500 dark:hover:bg-sky-900 dark:focus:ring-blue-800">Add To Cart</a>   
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
</div> --}}

    <div class="  text-gray-500 bg-white rounded-lg shadow-xl dark:bg-white dark:text-gray-400" role="alert">
        <div class="flex">
            <img class="mx-4 mt-20 h-40 rounded-lg" alt="art cover" loading="lazy"
                src='https://picsum.photos/seed/2/2000/1000' />
            <div class="ml-3 text-sm font-normal my-11">
                <span class="mb-2 text-sm font-extrabold text-gray-900 dark:text-black">Flavour Product</span>
                <div id="Ingredients"class="mb-2 text-sm font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</div>
                <div id="desc"class="mb-2 text-sm font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</div>
                <div class="flex ">
                    <a href="#"
                        class="mr-3 my-2 inline-flex px-2.5 py-1.5 text-sm font-medium text-center text-white bg-sky-300 rounded-md hover:bg-sky-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-sky-500 dark:hover:bg-sky-400 dark:focus:ring-sky-300">Add
                        To Cart</a>
                    <button><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                            class="w-4 text-yellow-500 focus:ring-3 focus:ring-yellow-400" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path fill="currentColor"
                                d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                            </path>
                        </svg></button>
                </div>
            </div>

        </div>


    </div>
@endsection
