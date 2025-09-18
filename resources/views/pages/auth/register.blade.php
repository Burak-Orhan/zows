<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zows Register</title>

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

    {{-- Flatpickr Style --}}
    <style>
        /* Flatpickr White Theme */
        .flatpickr-calendar {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 0.75rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            color: #111;
            font-family: 'Inter', sans-serif;
        }

        .flatpickr-months {
            background-color: #f9f9f9;
            color: #111;
            border-bottom: 1px solid #000000;
        }

        .flatpickr-weekdays {
            background-color: #fff;
            color: #3b82f6;
            border-bottom: 1px solid #000000;
        }

        .flatpickr-weekday {
            color: #555;
            font-weight: 500;
        }

        .flatpickr-day {
            color: #111;
        }

        .flatpickr-day:hover {
            background-color: #3b82f6;
            color: white;
        }

        .flatpickr-day.selected {
            background-color: #3b82f6;
            color: white;
        }

        .flatpickr-prev-month,
        .flatpickr-next-month {
            color: #111;
        }

        .flatpickr-time,
        .flatpickr-week {
            color: #111;
        }
    </style>

    {{-- Nation Modal Scrollbar --}}
    <style>
        #optionsList::-webkit-scrollbar {
            width: 6px;
        }

        #optionsList::-webkit-scrollbar-track {
            background: transparent;
        }

        #optionsList::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
            transition: background-color 0.2s;
        }

        #optionsList::-webkit-scrollbar-thumb:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }

        #optionsList {
            scrollbar-width: thin;
            scrollbar-color: rgba(255, 255, 255, 0.2) transparent;
        }
    </style>
</head>

<body class="bg-black text-white flex items-center justify-center h-screen">

    <div class="w-full max-w-3xl space-y-8">
        {{-- Title Area --}}
        <div class="flex items-center gap-5 mb-10">
            <div class="w-[90px] h-[90px] flex justify-center items-center bg-white">
                <span class="material-symbols-outlined text-black text-[54px] font-bold">person_edit</span>
            </div>
            <div class="flex flex-col items-start relative">
                <h1 class="m-0 text-[55px] font-black uppercase leading-none relative -left-[15px] -top-[11px]">NEW
                    CHARACTER</h1>
                <div class="flex flex-col items-start relative">
                    <div class="absolute -left-[13px] -top-[13px] w-[6px] h-[42px] bg-white"></div>
                    <p class="m-0 text-base font-normal text-white relative -top-[5px]">
                        Fill up the data required to create your character
                    </p>
                </div>
            </div>
        </div>

        <form action="{{ route('register.post') }}" method="post" id="form">
            @csrf
            <div class="grid grid-cols-2 gap-4">

                {{-- Firstname --}}
                <div
                    class="bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between w-full focus-within:ring-2 focus-within:ring-white transition">
                    <div class="flex flex-col text-left w-full">
                        {{-- Label and Input Area --}}
                        <span class="text-xs text-gray-400 uppercase">Firstname</span>
                        <input type="text" id="firstName" name="firstName" placeholder="Mithalos"
                            class="bg-transparent outline-none text-white font-medium placeholder-gray-500 w-full">
                    </div>
                    <!-- <span class="material-symbols-outlined text-white ml-3">check</span> -->
                </div>

                {{-- Lastname --}}
                <div
                    class="bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between w-full focus-within:ring-2 focus-within:ring-white transition">
                    <div class="flex flex-col text-left w-full">
                        {{-- Label and Input Area --}}
                        <span class="text-xs text-gray-400 uppercase">Lastname</span>
                        <input type="text" id="lastName" name="lastName" placeholder="White"
                            class="bg-transparent outline-none text-white font-medium placeholder-gray-500 w-full">
                    </div>
                    <!-- <span class="material-symbols-outlined text-white ml-3">check</span> -->
                </div>

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
                    class="bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between w-full focus-within:ring-2 focus-within:ring-white transition">
                    <div class="flex flex-col text-left w-full">
                        {{-- Label and Input Area --}}
                        <span class="text-xs text-gray-400 uppercase">Password</span>
                        <input type="password" id="password" name="password" placeholder="••••••••"
                            class="bg-transparent outline-none text-white font-medium placeholder-gray-500 w-full">
                    </div>
                    <!-- <span class="material-symbols-outlined text-white ml-3">check</span> -->
                </div>

                {{-- Password Verifly --}}
                <div
                    class="bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between w-full focus-within:ring-2 focus-within:ring-white transition">
                    <div class="flex flex-col text-left w-full">
                        {{-- Label and Input Area --}}
                        <span class="text-xs text-gray-400 uppercase">Password Verifly</span>
                        <input type="password" id="passwordVerifly" name="passwordVerifly" placeholder="••••••••"
                            class="bg-transparent outline-none text-white font-medium placeholder-gray-500 w-full">
                    </div>
                    <!-- <span class="material-symbols-outlined text-white ml-3">check</span> -->
                </div>

                {{-- <div class="col-span-2 gap-y-1.5">
                    <hr class="w-90 h-0.5 mx-auto my-4 bg-gray-100 border-0 rounded-sm md:my-10 dark:bg-gray-700">
                </div> --}}

                <div class="col-span-2">
                    <hr class="w-full h-0.5 bg-gray-100 border-0 rounded-sm dark:bg-gray-700">
                </div>


                {{-- Gender --}}
                <div class="bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between">
                    <!-- Label and Selected Value -->
                    <div class="flex flex-col text-left">
                        <span class="text-xs text-gray-400 uppercase">Gender</span>
                        <span id="genderValue" class="text-white font-medium">&nbsp;</span>
                    </div>

                    <!-- Radio Button -->
                    <div class="flex gap-1 items-center">
                        <!-- Male -->
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="gender" value="Male" class="hidden peer">
                            <span class="material-symbols-outlined text-gray-500 peer-checked:text-white">man</span>
                        </label>

                        <!-- Female -->
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="gender" value="Female" class="hidden peer">
                            <span class="material-symbols-outlined text-gray-500 peer-checked:text-white">woman</span>
                        </label>
                    </div>
                </div>

                {{-- Birtdate --}}
                <div id="birthdateWrapper"
                    class="relative bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer focus-within:ring-2 focus-within:ring-white transition">

                    <!-- Label and Description Area -->
                    <div class="flex flex-col text-left">
                        <span class="text-xs text-gray-400 uppercase">Birthdate</span>
                        <span id="birthdateValue" class="text-white font-medium">Select a
                            date</span>
                    </div>

                    <!-- Right Icon Area -->
                    <span
                        class="material-symbols-outlined text-gray-400 hover:text-white transition">calendar_month</span>

                    <!-- Visible Birtdate Input -->
                    <input type="text" id="birthdateInput" name="birthdate" class="hidden">
                </div>

                {{-- Height --}}
                <div
                    class="bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between w-full focus-within:ring-2 focus-within:ring-white transition">
                    <div class="flex flex-col text-left w-full">
                        {{-- Label and Input Area --}}
                        <span class="text-xs text-gray-400 uppercase">Height [cm]</span>
                        <input type="number" name="height"
                            class="bg-transparent outline-none text-white font-medium placeholder-gray-500 w-full">
                    </div>
                    {{-- <span class="material-symbols-outlined text-white ml-3">check</span> --}}
                </div>

                {{-- Nation --}}
                <div id="nationality"
                    class="relative bg-neutral-900 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer focus-within:ring-2 focus-within:ring-white transition">
                    {{-- Label and Input Area --}}
                    <div class="flex flex-col text-left w-full">
                        <span class="text-xs text-gray-400 uppercase">Nationality</span>
                        <span id="nationalityValue" class="text-white font-medium">Select a nation</span>
                    </div>

                    <!-- Right Icon Area -->
                    <span class="material-symbols-outlined text-white transition-transform duration-300"
                        id="nationalityIcon">expand_more</span>

                    <!-- Modal -->
                    <div id="nationalityModal"
                        class="absolute top-0 left-full ml-2 w-64 bg-neutral-900 rounded-xl shadow-lg transform scale-0 transition-transform duration-300 z-50">
                        <div class="p-3 border-b border-gray-700">
                            <input id="searchInput" type="text" placeholder="Search..."
                                class="w-full px-3 py-2 rounded-md bg-neutral-800 text-white outline-none placeholder-gray-400 text-sm">
                        </div>
                        <div id="optionsList" class="max-h-64 overflow-y-auto p-2 flex flex-col gap-1"></div>
                    </div>

                    <!-- Visible Birtdate Input -->
                    <input type="text" id="nationalityInput" name="nationality" class="hidden">
                </div>

            </div>
        </form>

        <button id="submitBtn" type="submit" onclick="document.forms['form'].submit();"
            class="w-full py-4 bg-white text-black font-bold rounded-lg flex items-center justify-center gap-2 hover:bg-gray-200">
            Create New Character
            <span class="material-symbols-outlined">arrow_forward</span>
        </button>
    </div>

    {{-- Script Area --}}

    {{-- Gender Script --}}
    <script>
        const radios = document.querySelectorAll("input[name='gender']");
        const genderValue = document.getElementById("genderValue");

        radios.forEach(radio => {
            radio.addEventListener("change", () => {
                genderValue.textContent = radio.value;
            });
        });
    </script>

    {{-- Birthdate Script --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        const birthdateInput = document.getElementById("birthdateInput");
        const birthdateValue = document.getElementById("birthdateValue");
        const birthdateWrapper = document.getElementById("birthdateWrapper");

        const picker = flatpickr(birthdateInput, {
            dateFormat: "d/m/Y",
            allowInput: false,
            clickOpens: false, // Not Open Automatic
            onChange: (selectedDates, dateStr) => {
                birthdateValue.textContent = dateStr || "Select a date";
            },
            appendTo: birthdateWrapper, // Wrapper Inside Open
            position: "auto" // Location is Automatic but in Wrapper
        });

        // Wrapper veya ikona tıklanınca aç
        birthdateWrapper.addEventListener("click", () => {
            picker.open();

            // Açıldığında sağa yasla
            const calendar = birthdateWrapper.querySelector(".flatpickr-calendar");
            calendar.style.position = "absolute";
            calendar.style.top = "0";
            calendar.style.left = "100%";
            calendar.style.marginLeft = "8px"; // Space Between
        });
    </script>

    {{-- Nation Script --}}
    <script>
        const countries = ["Turkey", "USA", "Germany", "France", "Italy", "Spain", "Russia", "Japan", "China", "Brazil"];

        const nationalityWrapper = document.getElementById("nationality");
        const modal = document.getElementById("nationalityModal");
        const searchInput = document.getElementById("searchInput");
        const optionsList = document.getElementById("optionsList");
        const nationalityValue = document.getElementById("nationalityValue");
        const nationalityIcon = document.getElementById("nationalityIcon");

        let isOpen = false;

        function renderOptions(filter = "") {
            optionsList.innerHTML = "";
            countries
                .filter(c => c.toLowerCase().includes(filter.toLowerCase()))
                .forEach(c => {
                    const btn = document.createElement("button");
                    btn.type = "button";
                    btn.textContent = c;
                    btn.className = "text-left py-2 px-3 rounded-lg hover:bg-neutral-800 text-white text-sm";
                    btn.addEventListener("click", () => {
                        nationalityValue.textContent = c;
                        document.getElementById("nationalityInput").value = c;
                        e.stopPropagation();
                        closeModal();
                    });
                    optionsList.appendChild(btn);
                });
        }

        function openModal() {
            modal.classList.remove("scale-0");
            modal.classList.add("scale-100");
            nationalityIcon.classList.add("-rotate-90");
            isOpen = true;
            renderOptions();
            searchInput.value = "";
            searchInput.focus();
        }

        function closeModal() {
            modal.classList.remove("scale-100");
            modal.classList.add("scale-0");
            nationalityIcon.classList.remove("-rotate-90");
            isOpen = false;
        }

        // All Wrapper Click Open/Close
        nationalityWrapper.addEventListener("click", (e) => {
            e.stopPropagation();
            if (isOpen) {
                closeModal();
            } else {
                openModal();
            }
        });

        // Filter
        searchInput.addEventListener("input", () => {
            renderOptions(searchInput.value);
        });

        // Outside Click Close
        document.addEventListener("click", (e) => {
            if (isOpen && !modal.contains(e.target) && !nationalityWrapper.contains(e.target)) {
                closeModal();
            }
        });
    </script>
</body>

</html>
