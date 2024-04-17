<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Car Rental Pro</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css" rel="stylesheet" />
</head>

<body class="bg-white">

    {{-- Header --}}
    <div class="sticky top-0 w-full z-20 ">
        <div class="flex justify-start">
            <div class="w-[24rem] p-4 bg-[#FCE116] h-[6.5rem] ">
                <div class="text-end text-3xl tracking-wide font-black">
                    <div class="flex flex-col flex-wrap">
                        <div>
                            CAR RENTAL
                        </div>
                        <div>
                            PRO
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full">
                <div class="flex w-full bg-[#24292F] h-12 pr-20">
                    <div class="flex justify-end w-full text-white gap-x-6">
                        <div class="flex items-center gap-x-1">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8zm.5-13H11v6l5.25 3.15l.75-1.23l-4.5-2.67z" />
                                </svg>
                            </div>
                            <div class="font-sans text-sm">
                                Mon - Fri: 09AM to 8Pm
                            </div>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 256 256">
                                    <g fill="currentColor">
                                        <path
                                            d="M223.94 174.08A48.33 48.33 0 0 1 176 216A136 136 0 0 1 40 80a48.33 48.33 0 0 1 41.92-47.94a8 8 0 0 1 8.3 4.8l21.13 47.2a8 8 0 0 1-.66 7.53L89.32 117a7.93 7.93 0 0 0-.54 7.81c8.27 16.93 25.77 34.22 42.75 42.41a7.92 7.92 0 0 0 7.83-.59l25-21.3a8 8 0 0 1 7.59-.69l47.16 21.13a8 8 0 0 1 4.83 8.31Z"
                                            opacity=".2" />
                                        <path
                                            d="m222.37 158.46l-47.11-21.11l-.13-.06a16 16 0 0 0-15.17 1.4a8.12 8.12 0 0 0-.75.56L134.87 160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16 16 0 0 0 1.32-15.06v-.12L97.54 33.64a16 16 0 0 0-16.62-9.52A56.26 56.26 0 0 0 32 80c0 79.4 64.6 144 144 144a56.26 56.26 0 0 0 55.88-48.92a16 16 0 0 0-9.51-16.62ZM176 208A128.14 128.14 0 0 1 48 80a40.2 40.2 0 0 1 34.87-40a.61.61 0 0 0 0 .12l21 47l-20.67 24.74a6.13 6.13 0 0 0-.57.77a16 16 0 0 0-1 15.7c9.06 18.53 27.73 37.06 46.46 46.11a16 16 0 0 0 15.75-1.14a8.44 8.44 0 0 0 .74-.56L168.89 152l47 21.05h.11A40.21 40.21 0 0 1 176 208Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="font-sans text-sm">
                                +92334556224
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-[3.5rem] bg-white border-b border-gray-500">
                    <div class="flex pl-[9rem] pr-20 font-body w-full">
                        <div class="flex justify-between items-center w-[60rem]">
                            <a href="HomePage" class="text-gray-500 cursor-pointer hover:text-black transition-all font-medium">
                                Home
                            </a>
                            <a href="Carlist" class="cursor-pointer text-gray-500 hover:text-black transition-all font-medium">
                                Car Lists
                            </a>
                            <a href="Register" class="text-gray-500 cursor-pointer hover:text-black transition-all font-medium">
                                Register Your Car
                            </a>
                        </div>
                        <div class="flex justify-start pl-[6rem] gap-x-5 items-center">
                            <div>
                                <a href="Login"
                                    class="bg-black hover:bg-[#d3c030] text-white hover:text-black uppercase font-extrabold py-1 px-8 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                                    Login
                            </a>
                            </div>
                            <div>
                                <a href="Signup"
                                    class="bg-[#FCE116] hover:bg-black text-black hover:text-white uppercase font-extrabold py-1 px-8 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                                    Signup
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-200">
        <div class="max-w-[100rem] pt-[5rem] pb-20 mx-auto ">
            <div class="flex justify-start text-center">
                <div>
                    <img class="h-[30rem] w-fit" src="{{ Vite::asset('/resources/images/Honda-city.png') }}"
                        alt="image description">
                </div>
                <div class="flex flex-col gap-y-10">
                    <div class="text-5xl font-black ">
                        Confirm Your Booking
                    </div>
                    <div class="flex justify-start gap-x-32 w-ful">
                        <div class="flex gap-x-2">
                            <div class="font-bold">
                                Type:
                            </div>
                            <div class="font-sans">
                                Sedan
                            </div>
                        </div>
                        <div class="flex gap-x-2">
                            <div class="font-bold">
                                Model:
                            </div>
                            <div class="font-sans">
                                2014
                            </div>
                        </div>
                        <div class="flex gap-x-2">
                            <div class="font-bold">
                                Color:
                            </div>
                            <div class="font-sans">
                                White
                            </div>
                        </div>
                    </div>
                    <div class="flex text-start font-bold items-center gap-x-3">
                        <div>
                            Select Start Date:
                        </div>
                        <div>
                            <input placeholder="e.g 12/3/23" type="text"
                                class="block w-[10rem] px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>
                    <div class="flex text-start font-bold items-center gap-x-3">
                        <div>
                            Select End Date:
                        </div>
                        <div>
                            <input placeholder="e.g 12/3/23" type="text"
                                class="block w-[10rem] ml-2 px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>
                    <div>
                        <div x-data="{ modelOpen: false }">
                            <button @click="modelOpen =!modelOpen"
                                class="bg-[#FCE116] hover:bg-black text-black hover:text-white  font-semibold py-4 w-full shadow-lg hover:shadow-xl rounded-xl text-xl transition-all ">
                                <span class="">Confirm</span>
                            </button>
    
                            <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
                                role="dialog" aria-modal="true">
                                <div
                                    class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                    <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                        x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-200 transform"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                        class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40"
                                        aria-hidden="true"></div>
    
                                    <div x-cloak x-show="modelOpen"
                                        x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="transition ease-in duration-200 transform"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                        <div class="flex items-center justify-between space-x-4">
                                            <h1 class="text-xl font-bold text-gray-800 ">Your Booking is Confirmed</h1>
    
                                            <button @click="modelOpen = false"
                                                class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </button>
                                        </div>
    
                                        <p class="mt-2 text-sm text-gray-500 ">
                                            Have a Safe Ride.
                                        </p>
    
                                        {{-- <form class="mt-5">
                                            <div>
                                                <label for="user name"
                                                    class="block text-sm text-gray-700 capitalize ">Company</label>
                                                <input placeholder="e.g Honda" type="text"
                                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
    
                                            <div class="mt-4">
                                                <label for="email"
                                                    class="block text-sm text-gray-700 capitalize ">Location</label>
                                                <input placeholder="e.g Islamabad" type="email"
                                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            <div class="mt-4">
                                                <label for="email" class="block text-sm text-gray-700 capitalize ">Car
                                                    Number</label>
                                                <input placeholder="e.g ABC-123" type="email"
                                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="mt-4">
                                                    <label for="email"
                                                        class="block text-sm text-gray-700 capitalize ">White</label>
                                                    <input placeholder="e.g white" type="mail"
                                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="email"
                                                        class="block text-sm text-gray-700 capitalize ">Condition</label>
                                                    <input placeholder="e.g Condition" type="mail"
                                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="mt-4">
                                                    <label for="email"
                                                        class="block text-sm text-gray-700 capitalize ">Model</label>
                                                    <input placeholder="e.g 2013" type="mail"
                                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="email"
                                                        class="block text-sm text-gray-700 capitalize ">Type</label>
                                                    <input placeholder="e.g Sedan" type="mail"
                                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>
                                            </div>
                                            <div class="flex justify-center mt-6">
                                                <button type="button"
                                                    class="w-full py-2 text-md font-bold text-lg tracking-wide text-black capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-md  dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                    ADD
                                                </button>
                                            </div>
                                        </form> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="Carlist" class="flex font-medium text-blue-600 text-start items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12q0 .425-.288.713T19 13z"/></svg>
                        </div>
                        <div>
                            Go Back
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>

    {{-- Footer --}}
    <div class="bg-[#28282B] w-full h-[40rem] py-10">
        <div class="max-w-[100rem] mx-auto ">
            <div class="text-start text-3xl font-bold text-[#FCE116] mb-10">
                CAR RENTAL PRO
            </div>
            <div class="w-full border-b-2 border-t-2 border-white py-[4.5rem] ">
                <div class="flex justify-between">
                    <div class="flex flex-col gap-y-5">
                        <div class="text-white font-bold">
                            About us
                        </div>
                        <div class="text-gray-400 w-[20rem]">
                            Welcome to Car Rental Pro, where automotive dreams come to life! Immerse yourself in the
                            world of cutting-edge cars where innovation meets style. Explore our curated selection of
                            top-tier upgrades, expertly crafted to elevate your driving experience. Unleash the full
                            potential of your vehicle with our exclusive range of modifications, tailored for
                            enthusiasts like you
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-5">
                        <div class="text-white font-bold">
                            Quick Links
                        </div>
                        <div class="text-gray-400">
                            Home
                        </div>
                        <div class="text-gray-400">
                            Car List
                        </div>
                        <div class="text-gray-400">
                            Register Your Car
                        </div>
                        <div x-data="{ showTooltip: false }" class="relative">
                            <span @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                                class="text-gray-400 cursor-pointer hover:text-gray-500">
                                Contact Us
                            </span>

                            <!-- Tooltip -->
                            <div x-show="showTooltip"
                                class="absolute left-0 mt-2 p-2 bg-white text-black text-sm rounded">
                                +92334556224
                            </div>
                        </div>

                    </div>
                    <div class="flex flex-col gap-y-5">
                        <div class="text-white font-bold">
                            Contact us
                        </div>
                        <div class="flex text-white font-bold gap-x-2 ">
                            <div>
                                <svg class="text-[#FCE116]" xmlns="http://www.w3.org/2000/svg" width="28"
                                    height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 2c3.31 0 6 2.66 6 5.95C18 12.41 12 19 12 19S6 12.41 6 7.95C6 4.66 8.69 2 12 2m0 4a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m8 13c0 2.21-3.58 4-8 4s-8-1.79-8-4c0-1.29 1.22-2.44 3.11-3.17l.64.91C6.67 17.19 6 17.81 6 18.5c0 1.38 2.69 2.5 6 2.5s6-1.12 6-2.5c0-.69-.67-1.31-1.75-1.76l.64-.91C18.78 16.56 20 17.71 20 19" />
                                </svg>
                            </div>
                            <div>
                                Main PWD road,Roait Plaza Shop# 07
                            </div>
                        </div>
                        <div class="flex text-white font-bold gap-x-2 ">
                            <div>
                                <svg class="text-[#FCE116]" xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="25" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                                </svg>
                            </div>
                            <div>
                                +92334556224
                            </div>
                        </div>
                        <div class="flex text-white font-bold gap-x-2 ">
                            <div>
                                <svg class="text-[#FCE116]" xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="25" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7.175q.125 0 .263-.038t.262-.112L19.6 8.25q.2-.125.3-.312t.1-.413q0-.5-.425-.75T18.7 6.8L12 11L5.3 6.8q-.45-.275-.875-.012T4 7.525q0 .25.1.438t.3.287l7.075 4.425q.125.075.263.113t.262.037" />
                                </svg>
                            </div>
                            <div>
                                CarRentalPro@gmail.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center text-white font-bold gap-x-2 pt-5">
            <div>
                Copyright
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                        <circle cx="8" cy="8" r="6.25" />
                        <path d="M10 6.75s-.75-1-2-1s-2.25 1-2.25 2.25s1 2.25 2.25 2.25s2-1 2-1" />
                    </g>
                </svg>
            </div>
            <div>
                2024 All rights reserved Car Rental pro
            </div>
        </div>
    </div>
</body>

</html>
