<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('components.navbar')

    <div class="container mt-5">

        @yield('main_content')

    </div>

    @include('components.footer')
</body>
</html>