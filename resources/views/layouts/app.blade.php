<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ Vite::asset('resources/scss/app.scss') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')

    <title>
        @yield('page-title', '')
    </title>

        <!-- generalcss  -->
    @yield('head-cdn')
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header')

    @yield('jumbo')

    <main>
        @yield('main-content')
    </main>
    @include('partials.bottomMain')


    @include('partials.footer')

    @yield('custom-scripts')

</body>
</html>
<!-- chiunque estendera' questo layout potra' inserire al posto di ogni yield('nome-posto') quello che vuole attraverso una chiamata section('nome-posto') -->
