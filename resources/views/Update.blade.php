<x-guest-layout>
    <div class="max-w-xs md:max-w-[100rem] py-28 mx-auto">
        <form method="POST" action="{{ route('shop.update.submit', $shop->id) }}">
            @csrf
            @method('PUT')
            <div class="flex flex-col md:flex-row gap-y-4 gap-x-10">
                <div class="flex flex-col gap-y-2">
                    <div class="font-medium text-xl">
                        Name
                    </div>
                    <input type="text" name="name"
                        class="block px-4 py-4 w-60 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-xl shadow-xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 "
                        value="{{ $shop->name }}">
                </div>
                <div class="flex flex-col gap-y-2">
                    <div class="font-medium text-xl">
                        Description
                    </div>
                    <textarea name="description"
                        class="block px-4 py-4 w-80 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-xl shadow-xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 ">{{ $shop->description }}</textarea>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-y-4 gap-x-10 mt-4">

                <div class="flex flex-col gap-y-2">
                    <div class="font-medium text-xl">
                        Location
                    </div>
                    <input type="text" name="location"
                        class="block px-4 py-4 w-60 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-xl shadow-xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 "
                        value="{{ $shop->location }}">
                </div>
                <div class="flex flex-col gap-y-2">
                    <div class="font-medium text-xl">
                        Availability
                    </div>
                    <input type="text" name="availability"
                        class="block px-4 py-4 w-60 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-xl shadow-xl focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40 "
                        value="{{ $shop->availability }}">
                </div>
            </div>
            <button class="bg-[#8aff14] mt-4 px-4 rounded-xl shadow-xl py-4 text-lg font-bold" type="submit">Update Shop</button>
        </form>
        <!-- Delete Button -->
        <form method="POST" action="{{ route('shop.delete', $shop->id) }}">
            @csrf
            @method('DELETE')
            <button class="bg-[#FF2400] mt-4 px-4 rounded-xl shadow-xl py-4 text-lg font-bold" type="submit">Delete Shop</button>
        </form>
    </div>

</x-guest-layout>
        