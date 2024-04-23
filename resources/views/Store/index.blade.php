<x-guest-layout>
    <div class="hidden md:block relative">
        <img class="h-screen w-screen " src="{{ Vite::asset('/resources/images/main.png') }}" alt="image description">
        <div class="absolute top-[15rem] left-[10rem] ">
            <div class="w-[50rem] text-6xl font-extrabold">
                Simplifying the Process
                to Discover the Perfect
                Car for You
            </div>
        </div>
        <div class="absolute top-[30rem] left-[10rem] font-sans font-medium ">
            <div class="w-[48rem] text-2xl tracking-wide leading-[1.5rem] text-gray-800">
                Effortlessly pinpoint the ideal car for you with our streamlined search approach. Find your perfect
                match.
            </div>
        </div>
        <div class="absolute top-[38rem] left-[10rem] ">
            <div class="flex gap-x-4">
                <div>
                    <!-- component -->
                    <div x-data="{ modelOpen: false }">
                        @if (auth()->check() && !$user->store()->exists())
                            <button @click="modelOpen =!modelOpen"
                                class="flex items-center justify-center px-3 py-4 space-x-2  tracking-wide text-black capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-xl dark:focus:bg-indigo-700 hover:bg-black hover:text-white focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 text-xl font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Register your Store</span>
                            </button>
                        @else
                            <a href="{{ route('stores.show', ['store' => auth()->user()->store]) }}"
                            
                                class="bg-[#FCE116] w-[23rem] px-10 hover:bg-black text-black hover:text-white font-medium py-4 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                                <span>See Your Store</span>
                            </a>
                        @endif
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
                                        <h1 class="text-xl font-medium text-gray-800 ">Create your store</h1>

                                        <button @click="modelOpen = false"
                                            class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <form method="POST" enctype="multipart/form-data"
                                        action="{{ route('stores.create') }}" class="mt-5">
                                        @csrf
                                        <div>
                                            <label for="name"
                                                class="block text-sm text-gray-700 capitalize">Name</label>
                                            <input placeholder="E.g Cover" type="text" name="name" id="name"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>

                                        <div class="mt-4">
                                            <label for="address"
                                                class="block text-sm text-gray-700 capitalize">Address</label>
                                            <input placeholder="E.g Anything" type="text" name="address"
                                                id="address"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        <div class="mt-4">
                                            <label for="phoneno" class="block text-sm text-gray-700 capitalize">Phone
                                                Number</label>
                                            <input placeholder="E.g +92-334-223-4444" type="text" name="phoneno"
                                                id="phoneno"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        <div class="mt-4">
                                            <label for="image"
                                                class="block text-sm text-gray-700 capitalize">Logo</label>
                                            <input type="file" name="image" id="image" class="mt-2">
                                        </div>
                                        <div class="flex justify-end mt-6">
                                            <button type="submit"
                                                class="px-3 py-2 text-sm tracking-wide text-black hover:text-white capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-md dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                Create your store
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block md:hidden bg-gray-200 py-20"
        style="background-image: url('{{ Vite::asset('/resources/images/main.png') }}'); background-size: cover; background-position: center;">
        <div class="flex flex-col gap-y-4 text-center px-10 w-full">
            <div class="text-2xl font-extrabold">
                Simplifying the Process
                to Discover the Perfect
                Workshop for You
            </div>
            <div class="text-sm">
                Effortlessly pinpoint the ideal car for you with our streamlined search approach. Find your perfect
                match.
            </div>
            <div class="flex flex-col gap-y-6 w-full mb-10">
                <div>
                    <div x-data="{ modelOpen: false }">
                        <button @click="modelOpen =!modelOpen"
                            class="flex items-center justify-center w-full py-2 space-x-2  tracking-wide text-black capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-xl dark:focus:bg-indigo-700 hover:bg-black hover:text-white focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 text-lg ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Register your Store</span>
                        </button>

                        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div
                                class="flex items-center justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
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
                                        <h1 class="text-xl font-medium text-gray-800 ">Create your store</h1>

                                        <button @click="modelOpen = false"
                                            class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <form method="POST" enctype="multipart/form-data" action="/"
                                        class="mt-5">
                                        @csrf
                                        <div>
                                            <label for="name"
                                                class="block text-sm text-gray-700 capitalize">Name</label>
                                            <input placeholder="E.g Cover" type="text" name="name"
                                                id="name"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>

                                        <div class="mt-4">
                                            <label for="address"
                                                class="block text-sm text-gray-700 capitalize">Address</label>
                                            <input placeholder="E.g Anything" type="text" name="address"
                                                id="address"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        <div class="mt-4">
                                            <label for="phoneno" class="block text-sm text-gray-700 capitalize">Phone
                                                Number</label>
                                            <input placeholder="E.g +92-334-223-4444" type="text" name="phoneno"
                                                id="phoneno"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        <div class="mt-4">
                                            <label for="image"
                                                class="block text-sm text-gray-700 capitalize">Logo</label>
                                            <input type="file" name="image" id="image" class="mt-2">
                                        </div>
                                        <div class="flex justify-end mt-6">
                                            <button type="submit"
                                                class="px-3 py-2 text-sm tracking-wide text-black hover:text-white capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-md dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                Create your store
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-sm md:max-w-[100rem] pt-10 pb-20 mx-auto ">
        <div class="text-center font-bold text-xl md:text-4xl">
            Modification
        </div>
        <div class="flex flex-col gap-y-10 md:flex-row justify-between w-full mt-10">
            <div class="flex h-fit w-full md:w-[27rem] shadow-xl rounded-lg border border-gray-200 px-6 p-4 bg-white">
                <div class="flex flex-col gap-y-6">
                    <div class="flex justify-between items-center  pt-3">
                        <div class="font-bold text-lg">
                            Interior Modification
                        </div>
                        <div>
                            <a href="{{ route('modifications.filter', ['type' => 'interior']) }}"
                                class="bg-[#ED6764] hover:bg-black h-fit text-black hover:text-white font-bold py-3 px-7 shadow-lg  hover:shadow-xl rounded-xl text-xs md:text-sm transition-all">
                                See More
                            </a>
                        </div>
                    </div>
                    <div>
                        <img class="h-fit w-[25rem]" src="{{ Vite::asset('/resources/images/interior.png') }}"
                            alt="image description">
                    </div>
                    <div class="flex text-sm text-gray-500 items-center justify-center">
                        <div>
                            Interior
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                            </svg>
                        </div>
                        <div>
                            Modification
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                            </svg>
                        </div>
                        <div>
                            Calm
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                            </svg>
                        </div>
                        <div class="hidden md:block">
                            Eye Catching
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex h-fit w-full md:w-[27rem] shadow-xl rounded-lg border border-gray-200 p-4 bg-white">
                <div class="flex flex-col gap-y-6">
                    <div class="flex justify-between items-center px-4 pt-3">
                        <div class="font-bold text-lg">
                            Exterior Modification
                        </div>
                        <div>
                            <a href="{{ route('modifications.filter', ['type' => 'exterior']) }}"
                                class="bg-[#ED6764] hover:bg-black h-fit text-black hover:text-white font-bold py-3 px-7 shadow-lg  hover:shadow-xl rounded-xl text-sm transition-all">
                                See More
                            </a>
                        </div>
                    </div>
                    <div>
                        <img class="h-fit w-[25rem]" src="{{ Vite::asset('/resources/images/exterior.png') }}"
                            alt="image description">
                    </div>
                    <div class="flex text-sm text-gray-500 items-center justify-center">
                        <div>
                            Exterior
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                            </svg>
                        </div>
                        <div>
                            Modification
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                            </svg>
                        </div>
                        <div>
                            Calm
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                            </svg>
                        </div>
                        <div>
                            Eye Catching
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex h-fit w-full md:w-[27rem] shadow-xl rounded-lg border border-gray-200 p-4 bg-white">
                <div class="flex flex-col gap-y-6">
                    <div class="flex justify-between items-center px-4 pt-3">
                        <div class="font-bold text-lg">
                            Aftermarkets Parts
                        </div>
                        <div>
                            <a href="{{ route('modifications.filter', ['type' => 'aftermarket']) }}"
                                class="bg-[#ED6764] hover:bg-black h-fit text-black hover:text-white font-bold py-3 px-7 shadow-lg  hover:shadow-xl rounded-xl text-sm transition-all">
                                See More
                            </a>
                        </div>
                    </div>
                    <div>
                        <img class="h-[11rem] w-[25rem]" src="{{ Vite::asset('/resources/images/after.png') }}"
                            alt="image description">
                    </div>
                    <div class="flex text-sm text-gray-500 items-center justify-center">
                        <div>
                            After Market
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                            </svg>
                        </div>
                        <div>
                            Modification
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                            </svg>
                        </div>
                        <div>
                            Calm
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12" />
                            </svg>
                        </div>
                        <div>
                            Eye Catching
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
