<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="../path/to/soft-ui-dashboard-tailwind.js"></script>
    <link rel="stylesheet" href="soft-ui-dashboard-tailwind.css" />
    {{-- // Fonts and Icons --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    {{-- // FontAwesome Icons --}}
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    {{-- // Nucleo Icons --}}
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

</head>

<body class="font-sans antialiased">
    @include('layouts.navigation')
    <div class="min-h-screen bg-gray-100">

        {{-- <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

        <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
            @yield('main_content')
        </div>

        {{-- <!-- Page Content -->
            <main>
                {{ $slot }}
            </main> --}}

    </div>
    @include('components.footer')


    {{-- @include('components.navbar')
    <div class="mt-5">
        @yield('main_content')
    </div>

    @include('components.footer') --}}
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>

</html>
