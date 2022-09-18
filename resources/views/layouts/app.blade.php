<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- ChartJS -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
        /* * {
            border:1px solid green;
        } */
        /* body {
            height:3000px;
        } */
    </style>
    <body class="font-sans antialiased">
        <div class="bg-slate-100">
            @include('layouts.navigation')

            @include('layouts.sidebar')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Sweet Alert -->
        @include('sweetalert::alert')
    </body>
</html>
