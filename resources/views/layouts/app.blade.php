<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zows')</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @yield("style")
    @stack('style')
</head>

<body class="bg-black text-white flex items-center justify-center h-screen">

    <x-splash />

    <div class="w-full max-w-3xl space-y-8">
        @yield('content')
    </div>

    @yield('script')
    @stack('script')

    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>
