<div class="w-[100rem] h-[20rem] bg-white shadow-2xl py-10 font-sans">
    <div class="flex justify-center">
        <div class=" font-medium text-2xl border-b border-black pb-5">
            Not Sure About Which Workshop to select? Find it Here!
        </div>
    </div>
    <form action="{{ route('search') }}" method="GET">
    @csrf
    <div class="flex justify-start gap-x-24 mx-[3rem] mt-10 ">
        <div class="flex flex-col gap-y-2">
            <div class="text-lg font-bold">
                Name
            </div>
            <div>
                <input placeholder="e.g Autos" type="text" name="name"
                    class="block px-4 py-4 w-60 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-xl shadow-xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}">

            </div>
        </div>
        <div class="flex flex-col gap-y-2">
            <div class="text-lg font-bold">
                Location
            </div>
            <input placeholder="e.g Islamabad" type="text" name="name"
            class="block px-4 py-4 w-60 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-xl shadow-xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 @error('name') border-red-500 @enderror"
            value="{{ old('name') }}">
        </div>
        <div class="flex flex-col gap-y-2">
            <div class="text-lg font-bold">
                Car Type
            </div>
            <div>
                <div class=" relative inline-block text-left dropdown">
                    <span class="rounded-md shadow-sm"><button
                            class="inline-flex justify-center w-60 px-4 py-4 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white shadow-gray-300 shadow-xl border border-gray-200 rounded-xl hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800"
                            type="button" aria-haspopup="true" aria-expanded="true"
                            aria-controls="headlessui-menu-items-117">
                            <div class="flex justify-between w-full text-base">
                                <span class="text-gray-500">Select Type</span>
                                <div>
                                    <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </button></span>
                    <div
                        class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                            aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="py-1">
                                <a href="javascript:void(0)" tabindex="0"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">Sedan</a>
                                <a href="javascript:void(0)" tabindex="1"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">SUV</a>
                                <a href="javascript:void(0)" tabindex="1"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">Hatchback</a>
                                <a href="javascript:void(0)" tabindex="1"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">Pickup</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex flex-col gap-y-2">
            <div class="text-lg font-bold">
                Company
            </div>
            <div>
                <div class=" relative inline-block text-left dropdown">
                    <span class="rounded-md shadow-sm"><button
                            class="inline-flex justify-center w-60 px-4 py-4 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white shadow-gray-300 shadow-xl border border-gray-200 rounded-xl hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800"
                            type="button" aria-haspopup="true" aria-expanded="true"
                            aria-controls="headlessui-menu-items-117">
                            <div class="flex justify-between w-full text-base">
                                <span class="text-gray-500">Select Company</span>
                                <div>
                                    <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </button></span>
                    <div
                        class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                            aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="py-1">
                                <a href="javascript:void(0)" tabindex="0"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">Honda</a>
                                <a href="javascript:void(0)" tabindex="1"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">Toyota</a>
                                <a href="javascript:void(0)" tabindex="1"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">Suzuki</a>
                                <a href="javascript:void(0)" tabindex="1"
                                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                    role="menuitem">KIA</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <button type="submit"
            class="bg-[#FCE116] hover:bg-black h-fit text-black hover:text-white font-bold py-3 px-[3rem] shadow-lg mt-10 hover:shadow-xl rounded-xl text-xl transition-all">
            Search
        </button>
    </form>
    </div>
</div>
