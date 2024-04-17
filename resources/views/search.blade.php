<x-guest-layout>
    <div class="relative">
        <img class="h-[55rem] w-screen " src="{{ Vite::asset('/resources/images/workshop3.jpg') }}" alt="image description">
        <div class="absolute top-[15rem] left-[10rem] ">
            <div class="w-[50rem] text-6xl font-extrabold text-white ">
                Streamlining the Path
                to Uncover the Perfect
                Upgrades for Your Vehicle
            </div>
        </div>
        <div class="absolute top-[32rem] left-[10rem] font-sans font-medium ">
            <div class="w-[48rem] text-2xl tracking-wide leading-[1.5rem] text-gray-100">
                Effortlessly pinpoint the ideal car for you with our streamlined search approach. Find your perfect
                match.
            </div>
        </div>
        <div class="absolute top-[38rem] left-[10rem] ">
            <a href="Register"
                class="bg-[#FCE116] hover:bg-black text-black hover:text-white font-bold py-4 px-32 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                Register your workshop
            </a>
        </div>
    </div>
    @foreach ($shops as $shop)
    <div class="max-w-[100rem] pt-20 pb-20 mx-auto">
        <div class="w-full h-[22rem] shadow-2xl rounded-lg px-8 border border-gray-200 mb-8">
            <div class="flex justify-start gap-x-10">
                <div class="flex pt-9">
                    {{-- @if ($item->image)
                        <img class="h-[18rem] w-fit" src="{{ Storage::url($item->image) }}"
                            alt="Image description">
                    @else
                        <img class="h-[18rem] w-fit" src="{{ Vite::asset('/resources/images/workshop.png') }}"
                            alt="Placeholder image">
                    @endif --}}
                    <img class="h-[18rem] w-fit" src="{{ Vite::asset('/resources/images/workshop.png') }}"
                            alt="Placeholder image">
                </div>
                <div class="flex flex-col py-12 gap-y-4 pr-12 w-[70rem]">
                    <div class="text-4xl font-bold">
                        {{ $shop->name }}
                    </div>
                    <div class="flex justify-start w-full font-medium text-black text-lg">
                        {{ $shop->description }}
                    </div>
                    <div class="flex gap-x-4 items-center ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2c3.31 0 6 2.66 6 5.95C18 12.41 12 19 12 19S6 12.41 6 7.95C6 4.66 8.69 2 12 2m0 4a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m8 13c0 2.21-3.58 4-8 4s-8-1.79-8-4c0-1.29 1.22-2.44 3.11-3.17l.64.91C6.67 17.19 6 17.81 6 18.5c0 1.38 2.69 2.5 6 2.5s6-1.12 6-2.5c0-.69-.67-1.31-1.75-1.76l.64-.91C18.78 16.56 20 17.71 20 19" />
                            </svg>
                        </div>
                        <div class="font-sans font-medium">
                            {{ $shop->location }}
                        </div>
                    </div>
                    <div class="flex gap-x-4 items-center ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                            </svg>
                        </div>

                        <div class="font-medium ">
                            {{ $shop->number }}
                        </div>
                    </div>
                    <div class="flex justify-end w-full">
                        <a href="{{ route('Shopdetail', ['Shopdetail' => $shop]) }}" type="submit"
                            class="bg-[#FCE116] hover:bg-black text-black hover:text-white uppercase font-extrabold py-2 px-28 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                            See Details
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endforeach
</x-guest-layout>
