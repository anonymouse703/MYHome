<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <!-- Scripts -->
    @vite([
    'resources/assets/js/jquery.min.js',
    'resources/css/app.css',
    'resources/js/app.js',
    'resources/fontawesome/css/all.min.css',
    'resources/fontawesome/css/brands.min.css',
    'resources/fontawesome/css/fontawesome.min.css',
    'resources/fontawesome/css/regular.min.css',
    'resources/fontawesome/css/solid.min.css',
    'resources/fontawesome/css/svg-with-js.min.css',
    'resources/fontawesome/css/v4-font-face.min.css',
    'resources/fontawesome/css/v4-shims.min.css',
    'resources/fontawesome/css/v5-font-face.min.css',
    'resources/assets/css/bootstrap.min.css',
    'resources/fontawesome/js/all.min.js',
    'resources/fontawesome/js/brands.min.js',
    'resources/fontawesome/js/conflict-detection.min.js',
    'resources/fontawesome/js/fontawesome.min.js',
    'resources/fontawesome/js/regular.min.js',
    'resources/fontawesome/js/solid.min.js',
    'resources/fontawesome/js/v4-shims.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/css/nifty.min.css',
    'resources/assets/js/nifty.min.js',
    'resources/assets/pages/dashboard-1.min.js',
    ])
    @livewireStyles
    @powerGridStyles
</head>

<body class="font-sans jumping">
    <div id="root" class="root mn--max hd--expanded">
        <section class="content" id="content">
            <main>
                {{ $slot }}
            </main>
            @include('layouts.shared.footer')
        </section>
        @include('layouts.shared.header')
        @include('layouts.shared.navbar')

    </div>

    @livewireScripts

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    @powerGridScripts
    @yield('custom_script')


</body>

</html>