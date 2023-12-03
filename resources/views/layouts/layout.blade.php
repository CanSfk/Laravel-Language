<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full min-h-screen flex bg-slate-100">

    <div class="max-w-[1300px] h-full flex flex-col px-5 mx-auto max-sm:px-3">

        <!-- HEADER -->
        @include("layouts.header")


        <div class="pt-14">

            <!-- CONTENT -->
            @yield('content')

        </div>


        <!-- FOOTER -->
        @include('layouts.footer')

    </div>


    <!-- ION ICON SCRIPT -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- MAIN JS LINK -->
    @vite('resources/js/main.js')
</body>

</html>