@extends('layouts.app')

@section('main_content')
    {{-- <h1>This is Home Page
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Eius excepturi commodi vel consequuntur magnam explicabo. Animi architecto modi non quia provident, quibusdam unde
        expedita, ut vero quam consectetur quisquam commodi?
    </h1> --}}

    {{-- <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">

                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h5 class="display-3 lh-1 mb-3">Eather, Teman untuk Nyemil</h5>
                        <p class="lead fw-normal text-muted mb-3">Eather merupakan sebuah makanan ringan yang renyah dan enak</p>
                        <div class="d-flex flex-column flex-lg-row align-items-center mb-5">
                            <a href="" type="button" class="btn btn-outline-info">Enter Product</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    
                </div> --}}
    {{-- </div>
        </div>
    </header> --}}
    @auth
    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    Eather, <br>Teman untuk Nyemil.</h1>
                </h1>
                <p class="leading-normal text-2xl mb-8">
                    merupakan sebuah makanan ringan yang renyah dan enak
                </p>

                <a href="/product"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Start Browsing Products
                </a>
            </div>
            <!--Right Col-->
            <div class="flex justify-center w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-4/5 z-50 rounded rounded-lg" src="image/posterhome.png" />
            </div>
        </div>
    </div>
    @endauth
    @guest
        <div class="pt-24">
            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <h1 class="my-4 text-5xl font-bold leading-tight">
                        Eather, <br>Teman untuk Nyemil.</h1>
                    </h1>
                    <p class="leading-normal text-2xl mb-8">
                        merupakan sebuah makanan ringan yang renyah dan enak
                    </p>

                    <a href="/register"
                        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Get Started
                    </a>
                </div>
                <!--Right Col-->
                <div class="flex justify-center w-full md:w-3/5 py-6 text-center">
                    <img class="w-full md:w-4/5 z-50 rounded rounded-lg" src="image/posterhome.png" />
                </div>
            </div>
        </div>
    @endguest


    {{-- <header class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                   
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Eather
                   
                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href="#"
                        class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="" alt="hero image">
            </div>
        </div>
    </header> --}}
@endsection
