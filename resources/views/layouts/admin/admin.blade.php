<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('admin/assets/css/bootstrap.css') }}" rel="stylesheet" >
        <link href="{{ asset('admin/assets/vendors/chartjs/Chart.min.css') }}" rel="stylesheet" >
        <link href="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" >
        @vite(['public/admin/assets/css/app.css'])

        <title>Dashboard</title>
        <!-- Scripts -->
    </head>
    <body>
        <div id="app">
            <div id="sidebar" class='active'>
                <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{ asset('img/sapling-foto.jpg') }}" alt="" width="100px" height="200px" class="rounded-circle">
            @include('layouts.sidebar')
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
            </div>
            <div id="main">
                @include('layouts.admin.nav')
                @yield('content')
                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2024</p>
                        </div>
                        <div class="float-end">
                            <p>Programador <span class='text-danger'><i data-feather="heart"></i></span>Desarrollado por <a href="https://www.joseti.com">Jose TI</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('admin/assets/js/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/app.js') }}"></script>
        <script src="{{ asset('admin/assets/vendors/chartjs/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    </body>
</html>
