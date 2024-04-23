<x-guest-layout>
    <div class="hidden md:block relative">
        <img class="h-screen w-screen " src="{{ Vite::asset('/resources/images/main.png') }}" alt="image description">
        <div class="absolute top-[15rem] left-[10rem] ">
            <div class="w-[50rem] text-6xl font-extrabold">
                Simplifying the Process
                to Discover the Perfect
                Workshop for You
            </div>
        </div>
        <div class="absolute top-[30rem] left-[10rem] font-sans font-medium ">
            <div class="w-[48rem] text-2xl tracking-wide leading-[1.5rem] text-gray-800">
                Effortlessly pinpoint the ideal car for you with our streamlined search approach. Find your perfect match.
            </div>
        </div>
        <div class="absolute top-[38rem] left-[10rem] ">
            <a href="{{ route('register') }}"
                class="bg-[#FCE116] hover:bg-black text-black hover:text-white font-bold py-4 px-32 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                See Workshops
            </a>
        </div>
        <div class="absolute top-[52rem] left-[10rem] ">
            @include('components.search')
        </div>
    </div>
    <div class="block md:hidden bg-gray-200 py-20" style="background-image: url('{{ Vite::asset('/resources/images/main.png') }}'); background-size: cover; background-position: center;">
        <div class="flex flex-col gap-y-4 text-center px-10 w-full">
            <div class="text-2xl font-extrabold">
                Simplifying the Process
                to Discover the Perfect
                Workshop for You
            </div>
            <div class="text-sm">
                Effortlessly pinpoint the ideal car for you with our streamlined search approach. Find your perfect match. 
            </div>
            <div class="flex flex-col gap-y-6 w-full mb-10">
                @guest
                    <div class="w-full">
                        <a href="{{ route('Login') }}"
                            class="bg-black  text-white uppercase font-extrabold py-2 px-32 shadow-lg rounded-md text-base transition-all">
                            Login
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{ route('Signup') }}"
                            class="bg-[#FCE116] w-full text-black hover:text-white uppercase font-extrabold py-2 px-32 shadow-xl rounded-md text-base transition-all">
                            Signup
                        </a>
                    </div>
                @endguest
            </div>
            <div>
                @include('components.search')
            </div>
        </div>
    </div>
    <div class="bg-gray-200">
        <div class="max-w-xs md:max-w-md lg:max-w-[100rem] pt-20 md:pt-80 pb-20 mx-auto ">
            <div class="flex justify-center text-center">
                <div class="text-2xl md:text-4xl font-bold ">
                    Featured Modification
                    <hr class="h-[0.10rem] w-[25rem] my-8 border-0 bg-gray-700">
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between w-full mt-10 gap-y-10">
                <div class="flex h-fit w-full md:w-[27rem] shadow-xl rounded-lg border border-gray-200 px-6 p-4 bg-white">
                    <div class="flex flex-col gap-y-6">
                        <div class="flex justify-between items-center pt-3">
                            <div class="font-bold text-base md:text-lg">
                                Interior Modification
                            </div>
                            <div>
                                <a href="Carlist"
                                    class="bg-[#ED6764] hover:bg-black h-fit text-black hover:text-white font-bold py-2 md:py-3 px-3 md:px-7 shadow-lg hover:shadow-xl rounded-xl text-xs md:text-sm transition-all">
                                    See More
                                </a>
                            </div>
                        </div>
                        <div>
                            <img class="h-fit w-fit md:w-[25rem]" src="{{ Vite::asset('/resources/images/interior.png') }}"
                                alt="image description">
                        </div>
                        <div class="flex text-sm text-gray-500 items-center justify-center">
                            <div>
                                Interior
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 256 256"><path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12"/></svg>
                            </div>
                            <div>
                                Modification
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 256 256"><path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12"/></svg>
                            </div>
                            <div>
                                Calm
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 256 256"><path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12"/></svg>
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
                            <div class="font-bold text-base md:text-lg">
                                Exterior Modification
                            </div>
                            <div>
                                <a href="Carlist"
                                    class="bg-[#ED6764] hover:bg-black h-fit text-black hover:text-white font-bold py-2 md:py-3 px-3 md:px-7 shadow-lg hover:shadow-xl rounded-xl text-xs md:text-sm transition-all"">
                                    See More
                                </a>
                            </div>
                        </div>
                        <div>
                            <img class="h-fit w-full md:w-[25rem]" src="{{ Vite::asset('/resources/images/exterior.png') }}"
                                alt="image description">
                        </div>
                        <div class="flex text-sm text-gray-500 items-center justify-center">
                            <div>
                                Exterior
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 256 256"><path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12"/></svg>
                            </div>
                            <div>
                                Modification
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 256 256"><path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12"/></svg>
                            </div>
                            <div>
                                Calm
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 256 256"><path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12"/></svg>
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
                            <div class="font-bold text-base md:text-lg">
                                Aftermarkets Parts
                            </div>
                            <div>
                                <a href="Carlist"
                                    class="bg-[#ED6764] hover:bg-black h-fit text-black hover:text-white font-bold py-2 md:py-3 px-3 md:px-7 shadow-lg hover:shadow-xl rounded-xl text-xs md:text-sm transition-all"">
                                    See More
                                </a>
                            </div>
                        </div>
                        <div>
                            <img class="h-fit md:h-[11rem] w-full md:w-[25rem]" src="{{ Vite::asset('/resources/images/after.png') }}"
                                alt="image description">
                        </div>
                        <div class="flex text-sm text-gray-500 items-center justify-center">
                            <div>
                                After Market
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 256 256"><path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12"/></svg>
                            </div>
                            <div>
                                Modification
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 256 256"><path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12"/></svg>
                            </div>
                            <div>
                                Calm
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 256 256"><path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48 48 0 0 0-48-48m0 60a12 12 0 1 1 12-12a12 12 0 0 1-12 12"/></svg>
                            </div>
                            <div class="hidden md:block">
                                Eye Catching
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="max-w-xs md:max-w-md lg:max-w-[100rem] py-28  mx-auto ">
            <div class="flex flex-col md:flex-row justify-between">
                <div>
                    <img class="h-fit w-[40rem]" src="{{ Vite::asset('/resources/images/image 3.png') }}"
                        alt="image description">
                </div>
                <div class="flex flex-col font-bold gap-y-8">
                    <div class="hidden md:block text-3xl md:text-5xl w-full md:w-[50rem] leading-0 md:leading-[3rem] ">
                        Discover Your Dream Ride<br>
                        Handpicked Just for You by the<br>
                        World's Finest Online Car Rental
                    </div>
                    <div class="block md:hidden text-3xl md:text-5xl w-full md:w-[50rem] leading-0 md:leading-[3rem] ">
                        Discover Your Dream Ride
                        Handpicked Just for You by the
                        World's Finest Online Car Rental
                    </div>
                    <div class="w-full md:w-[45rem] text-gray-500 text-md">
                        Revolutionize your ride with the world's best online car dealer. Tailored perfection awaits.
                        Find your exceptional drive today!
                    </div>
                    <a href="Workshoplist"
                        class="bg-[#FCE116] hover:bg-black text-black hover:text-white  font-semibold py-4 w-full shadow-lg hover:shadow-xl rounded-xl text-xl transition-all text-center ">
                        See All Workshops
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
