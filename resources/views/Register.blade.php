<x-guest-layout>
    <div class="relative">
        <img class="h-[55rem] w-screen " src="{{ Vite::asset('/resources/images/image 4.png') }}" alt="image description">
        <div class="absolute top-[15rem] left-[10rem] ">
            <div class="w-[50rem] text-6xl font-extrabold">
                Streamlining the
                Procedure to Register
                Your WorkShop
            </div>
        </div>
        <div class="absolute top-[30rem] left-[10rem] font-sans font-medium ">
            <div class="w-[48rem] text-2xl tracking-wide leading-[1.5rem] text-gray-800">
                Effortlessly pinpoint the ideal car for you with our streamlined search approach. Find your perfect
                match.
            </div>
        </div>
        <div class="absolute top-[38rem] left-[10rem] ">
            <div x-data="{ modelOpen: false }">
                @if (auth()->check() && !$user->workshop()->exists())
                    <button @click="modelOpen = !modelOpen"
                        class="bg-[#FCE116] w-[23rem] hover:bg-black text-black hover:text-white font-semibold py-4 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                        <span class="">Register Workshop</span>
                    </button>
                @else
                <a href="{{ route('shop.update', ['id' => auth()->user()->id]) }}"
                    class="bg-[#FCE116] w-[23rem] px-10 hover:bg-black text-black hover:text-white font-semibold py-4 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                    <span>Update your Shop</span>
                </a>
                @endif
                {{-- <button @click="modelOpen = !modelOpen"
                class="bg-[#FCE116] w-[23rem] hover:bg-black text-black hover:text-white font-semibold py-4 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                <span class="">Register Workshop</span> --}}
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
                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

                        <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                            <div class="flex items-center justify-between space-x-4">
                                <h1 class="text-xl font-bold text-gray-800 ">Register Your Car</h1>

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
                                Secure your wheels effortlessly! Register your
                                car with us for a seamless and convenient experience.
                            </p>

                            <form action="{{ route('Register') }}" method="post" class="mt-5">
                                @csrf
                                <div>
                                    <label for="name"
                                        class="block text-sm text-gray-700 capitalize ">Company</label>
                                    <input placeholder="e.g Autos" type="text" name="name"
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('name') border-red-500 @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <label for="location"
                                        class="block text-sm text-gray-700 capitalize ">Location</label>
                                    <input placeholder="e.g Islamabad" type="text" name="location"
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('location') border-red-500 @enderror"
                                        value="{{ old('location') }}">
                                    @error('location')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <label for="number" class="block text-sm text-gray-700 capitalize ">Number</label>
                                    <input placeholder="e.g ABC-123" type="text" name="number"
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('number') border-red-500 @enderror"
                                        value="{{ old('number') }}">
                                    @error('number')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <label for="description"
                                        class="block text-sm text-gray-700 capitalize ">Description</label>
                                    <input placeholder="e.g Tell us about your workshop" type="text"
                                        name="description"
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('description') border-red-500 @enderror"
                                        value="{{ old('description') }}">
                                    @error('description')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <label for="instagram" class="block text-sm text-gray-700 capitalize ">Instagram
                                        Handel</label>
                                    <input placeholder="e.g Workshop" type="text" name="instagram"
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('instagram') border-red-500 @enderror"
                                        value="{{ old('instagram') }}">
                                    @error('instagram')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <label for="facebook"
                                        class="block text-sm text-gray-700 capitalize ">Facebook</label>
                                    <input placeholder="e.g Workshop" type="text" name="facebook"
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('facebook') border-red-500 @enderror"
                                        value="{{ old('facebook') }}">
                                    @error('facebook')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <label for="avail"
                                        class="block text-sm text-gray-700 capitalize ">Availability</label>
                                    <input placeholder="e.g 8:00am-9:00pm" type="text" name="availability"
                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('availability') border-red-500 @enderror"
                                        value="{{ old('availability') }}">
                                    @error('avail')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <div class="flex items-center justify-center w-full">
                                        <label for="image" class="flex flex-col items-center justify-center w-full h-[12rem] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 hover:bg-gray- dark:hover:border-gray-500 dark:hover:bg-gray-300 transition-all">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                            </div>
                                            <input id="image" type="file" name="image" class="hidden" />
                                        </label>
                                    </div> 
                                    {{-- <input type="file" name="image"> --}}
                                </div>
                                <div class="flex justify-center mt-6">
                                    <button type="submit"
                                        class="w-full py-2 text-md font-bold text-lg tracking-wide text-black capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-md  dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        ADD
                                    </button>
                                </div>
                            </form>
                            <div class="font-medium text-sm mt-4">
                                By clicking "Next," you confirm your intention to connect your data to
                                AutoCare Finder. This action signifies you accept of the <span
                                    class="text-red-400 underline">Terms and conditions</span> outlined.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-white">
        <div class="max-w-[100rem] py-28  mx-auto ">
            <div class="flex justify-between">
                <div>
                    <img class="h-fit w-[40rem]" src="{{ Vite::asset('/resources/images/image 3.png') }}"
                        alt="image description">
                </div>
                <div class="flex flex-col font-bold gap-y-8">
                    <div class="text-5xl w-[50rem] leading-12 ">
                        Streamlining the Procedure
                        to Register Your Workshop
                    </div>
                    <div class="w-[45rem] text-gray-500 text-md">
                        Transform Your Drive with the Leading Online Car Dealer. Tailored excellence awaits – discover
                        your exceptional ride today!
                    </div>

                    <div x-data="{ modelOpen: false }">
                        @if (auth()->check() && !$user->workshop()->exists())
                            <button @click="modelOpen = !modelOpen"
                                class="bg-[#FCE116] w-full hover:bg-black text-black hover:text-white font-semibold py-4 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                                <span class="">Register Workshop</span>
                            </button>
                        @else
                            <button
                                class="bg-[#FCE116] w-full hover:bg-black text-black hover:text-white font-semibold py-4 shadow-lg hover:shadow-xl rounded-xl text-xl transition-all">
                                <span class="">Update your Shop</span>
                            </button>
                        @endif
                        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                                        <h1 class="text-xl font-bold text-gray-800 ">Register Your Car</h1>

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
                                        Secure your wheels effortlessly! Register your
                                        car with us for a seamless and convenient experience.
                                    </p>

                                    <form action="{{ route('Register') }}" method="post" class="mt-5">
                                        @csrf
                                        <div>
                                            <label for="name"
                                                class="block text-sm text-gray-700 capitalize ">Company</label>
                                            <input placeholder="e.g Autos" type="text" name="name"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('name') border-red-500 @enderror"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <div class="text-red-500 text-sm mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mt-4">
                                            <label for="location"
                                                class="block text-sm text-gray-700 capitalize ">Location</label>
                                            <input placeholder="e.g Islamabad" type="text" name="location"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('location') border-red-500 @enderror"
                                                value="{{ old('location') }}">
                                            @error('location')
                                                <div class="text-red-500 text-sm mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mt-4">
                                            <label for="number"
                                                class="block text-sm text-gray-700 capitalize ">Number</label>
                                            <input placeholder="e.g ABC-123" type="text" name="number"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('number') border-red-500 @enderror"
                                                value="{{ old('number') }}">
                                            @error('number')
                                                <div class="text-red-500 text-sm mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mt-4">
                                            <label for="description"
                                                class="block text-sm text-gray-700 capitalize ">Description</label>
                                            <input placeholder="e.g Tell us about your workshop" type="text"
                                                name="description"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('description') border-red-500 @enderror"
                                                value="{{ old('description') }}">
                                            @error('description')
                                                <div class="text-red-500 text-sm mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mt-4">
                                            <label for="instagram"
                                                class="block text-sm text-gray-700 capitalize ">Instagram
                                                Handel</label>
                                            <input placeholder="e.g Workshop" type="text" name="instagram"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('instagram') border-red-500 @enderror"
                                                value="{{ old('instagram') }}">
                                            @error('instagram')
                                                <div class="text-red-500 text-sm mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mt-4">
                                            <label for="facebook"
                                                class="block text-sm text-gray-700 capitalize ">Facebook</label>
                                            <input placeholder="e.g Workshop" type="text" name="facebook"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('facebook') border-red-500 @enderror"
                                                value="{{ old('facebook') }}">
                                            @error('facebook')
                                                <div class="text-red-500 text-sm mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mt-4">
                                            <label for="avail"
                                                class="block text-sm text-gray-700 capitalize ">Availability</label>
                                            <input placeholder="e.g 8:00am-9:00pm" type="text" name="availability"
                                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('availability') border-red-500 @enderror"
                                                value="{{ old('availability') }}">
                                            @error('avail')
                                                <div class="text-red-500 text-sm mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mt-4">
                                            {{-- <div class="flex items-center justify-center w-full">
                                                <label for="image" class="flex flex-col items-center justify-center w-full h-[12rem] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 hover:bg-gray- dark:hover:border-gray-500 dark:hover:bg-gray-300 transition-all">
                                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                        </svg>
                                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                                    </div>
                                                    <input id="image" type="file" name="image" class="hidden" />
                                                </label>
                                            </div>  --}}
                                            {{-- <input type="file" name="image"> --}}
                                        </div>
                                        <div class="flex justify-center mt-6">
                                            <button type="submit"
                                                class="w-full py-2 text-md font-bold text-lg tracking-wide text-black capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-md  dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                ADD
                                            </button>
                                        </div>
                                    </form>
                                    <div class="font-medium text-sm mt-4">
                                        By clicking "Next," you confirm your intention to connect your data to
                                        AutoCare Finder. This action signifies you accept of the <span
                                            class="text-red-400 underline">Terms and conditions</span> outlined.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
