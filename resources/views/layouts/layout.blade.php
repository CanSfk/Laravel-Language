<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full min-h-screen grid place-items-center bg-slate-100">

    <div class="w-[1300px] h-full flex flex-col">

        <!-- HEADER -->
        @include("layouts.header")


        <div class="pt-14">

            <!-- CONTENT -->
            @yield('content')

        </div>


        <!-- FOOTER -->
        @include('layouts.footer')

    </div>

</body>

</html>