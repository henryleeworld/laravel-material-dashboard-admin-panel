<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
        <title>
            Material Dashboard 2 by Creative Tim & UPDIVISION
        </title>
        <!-- Fonts and icons -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
        <!-- CSS Files -->
        <!--@vite(['resources/sass/app.scss'])-->
        <link id="pagestyle" href="{{ asset('css/material-dashboard.min.css') }}" rel="stylesheet" />
        @yield('styles')
    </head>
    <body>
        @yield('content')
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.8.4/smooth-scrollbar.min.js" integrity="sha512-UOuvdHxPTS8D5IoOYOwLGAN05jYYXKhxFOZDe/24o53eOOf9ylws0uPfV+gRj/k1z17C0KtC7Vkt+5H7BLQxOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('js/material-dashboard.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>
