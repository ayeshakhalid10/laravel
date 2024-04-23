<div class="sticky top-0 w-full z-20 ">
    <div class="hidden md:flex justify-start">
        <div class="w-[24rem] p-4 bg-[#FCE116] h-fit md:h-[6.5rem] ">
            <div class="text-end text-xl md:text-3xl tracking-normal md:tracking-wide font-black">
                <div class="flex flex-col flex-wrap">
                    <div>
                        AUTOCARE
                    </div>
                    <div>
                        FINDER
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden md:flex flex-col w-full">
            <div class="flex w-full bg-[#24292F] md:h-12 pr-20">
                <div class="flex justify-end w-full text-white gap-x-6">
                    <div class="flex items-center gap-x-1">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 256 256">
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
            <div class="hidden md:flex w-full h-[3.5rem] bg-white border-b border-gray-500">
                <div class="flex pl-[9rem] pr-20 font-body w-full">
                    <div class="flex justify-between items-center w-[60rem]">
                        <a href="/"
                            class="text-gray-500  cursor-pointer hover:text-black transition-all font-bold">
                            Home
                        </a>
                        <a href="{{route('workshops')}}"
                            class="cursor-pointer text-gray-500 hover:text-black transition-all font-bold">
                            Workshop List
                        </a>
                        <a href="{{route('stores')}}"
                            class="text-gray-500 cursor-pointer hover:text-black transition-all font-bold">
                            Modifications
                        </a>
                    </div>
                    <div class="flex justify-start pl-[6rem] gap-x-5 items-center">
                        @guest
                            <div>
                                <a href="{{ route('Login') }}"
                                    class="bg-black hover:bg-[#d3c030] text-white hover:text-black uppercase font-extrabold py-1 px-8 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                                    Login
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('Signup') }}"
                                    class="bg-[#FCE116] hover:bg-black text-black hover:text-white uppercase font-extrabold py-1 px-8 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                                    Signup
                                </a>
                            </div>
                        @endguest
                        @auth
                            <div>
                                <span class="text-black uppercase font-bold text-sm">{{ Auth::user()->email }}</span>
                            </div>
                            <div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="bg-[#FCE116] hover:bg-black text-black hover:text-white uppercase font-extrabold py-1 px-8 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                                    Logout
                                </a>
                            </div>

                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block md:hidden ">
        <div class="flex justify-between items-center w-full bg-[#FCE116] h-fit p-4">
            
            <div class="text-xl tracking-normal font-black">
                <div class="flex flex-col flex-wrap">
                    <div>
                        AUTOCARE
                    </div>
                    <div>
                        FINDER
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div x-data="{ modelOpen: false }">
                        <button @click="modelOpen = !modelOpen"
                            class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-black rounded-md focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M21 18H3v-2h18v2Zm0-5H3v-2h18v2Zm0-5H3V6h18v2Z" />
                            </svg>
                        </button>

                        <div x-show="modelOpen"
                            class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center">
                            <div class="absolute inset-0 bg-gray-500 bg-opacity-40" @click="modelOpen = false"
                                aria-hidden="true"></div>

                            <div x-show="modelOpen"
                                class="inline-block w-full max-w-xs p-8 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl">
                                <div class="flex items-center justify-between mb-10">
                                    @auth
                                        <div>
                                            <span
                                                class="text-black uppercase font-bold text-xs">{{ Auth::user()->email }}</span>
                                        </div>
                                    @endauth

                                    <button @click="modelOpen = false"
                                        class="text-gray-600 focus:outline-none hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex flex-col gap-y-5 text-center">
                                    <a href="HomePage"
                                        class="text-black cursor-pointer hover:text-black transition-all rounded p-2 bg-gray-200 font-bold">Home</a>
                                    <a href="Workshoplist"
                                        class="text-black cursor-pointer hover:text-black transition-all rounded p-2 bg-gray-200 font-bold">Workshop
                                        List</a>
                                    <a href="Modification"
                                        class="text-black cursor-pointer hover:text-black transition-all rounded p-2 bg-gray-200 font-bold">Modifications</a>
                                </div>
                                <div class="mt-5 flex flex-col w-full">
                                    @auth
                                        <div class="flex justify-center text-center">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                            <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                class="bg-black hover:bg-black w-full text-white hover:text-white uppercase font-extrabold p-4 shadow-lg hover:shadow-xl rounded-xl text-xs transition-all">
                                                Logout
                                            </a>
                                        </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
