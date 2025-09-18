<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zows Login</title>

    {{-- Link Area --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap">

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Style Area --}}

    {{-- Input and Body Style --}}
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 1000px #171717 inset !important;
            -webkit-text-fill-color: #fff !important;
            transition: background-color 5000s ease-in-out 0s;
        }

        /* Chrome, Edge, Safari */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    {{-- Input Style --}}
    <style>
        .material-symbols-outlined,
        span,
        label {
            user-select: none;
        }

        form * {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        input,
        textarea {
            user-select: text;
        }
    </style>

</head>

<body class="bg-black text-white flex items-center justify-center h-screen">

    <div class="w-full max-w-3xl space-y-8">
        {{-- Title Area --}}
        <div class="flex items-center gap-5 mb-10">
            <div class="w-[90px] h-[90px] flex justify-center items-center bg-white">
                <span class="material-symbols-outlined text-black text-[54px] font-bold">person</span>
            </div>
            <div class="flex flex-col items-start relative">
                <h1 class="m-0 text-[55px] font-black uppercase leading-none relative -left-[15px] -top-[11px]">LOGIN
                    CHARACTER</h1>
                <div class="flex flex-col items-start relative">
                    <div class="absolute -left-[13px] -top-[13px] w-[6px] h-[42px] bg-white"></div>
                    <p class="m-0 text-base font-normal text-white relative -top-[5px]">
                        Fill up the data required to login your character
                    </p>
                </div>
            </div>
        </div>

        <form action="{{ route('login.post') }}" method="post" id="form">
            @csrf
            <div class="grid grid-cols-2 gap-4">

                {{-- Email --}}
                <div
                    class="col-span-2 bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between w-full focus-within:ring-2 focus-within:ring-white transition">
                    <div class="flex flex-col text-left w-full">
                        {{-- Label and Input Area --}}
                        <span class="text-xs text-gray-400 uppercase">E-Mail</span>
                        <input type="email" id="email" name="email" placeholder="zows@zows.com"
                            class="bg-transparent outline-none text-white font-medium placeholder-gray-500 w-full">
                    </div>
                    <!-- <span class="material-symbols-outlined text-white ml-3">check</span> -->
                </div>

                {{-- Password --}}
                <div
                    class="col-span-2 bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between w-full focus-within:ring-2 focus-within:ring-white transition">
                    <div class="flex flex-col text-left w-full">
                        {{-- Label and Input Area --}}
                        <span class="text-xs text-gray-400 uppercase">Password</span>
                        <input type="password" id="password" name="password" placeholder="••••••••"
                            class="bg-transparent outline-none text-white font-medium placeholder-gray-500 w-full">
                    </div>
                </div>

            </div>
        </form>

        <button id="submitBtn" type="submit" onclick="document.forms['form'].submit();"
            class="w-full py-4 bg-white text-black font-bold rounded-lg flex items-center justify-center gap-2 hover:bg-gray-200">
            Create New Character
            <span class="material-symbols-outlined">arrow_forward</span>
        </button>
    </div>

</body>

</html>
