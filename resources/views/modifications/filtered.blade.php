{{-- @dd($modifications, $type) --}}
<x-guest-layout>
    <div class="max-w-[90rem] mx-auto w-full py-20">
        <div class="flex flex-col gap-y-5 justify-center">
            <div class="text-4xl font-medium text-center">
                Modification
            </div>
            <div class="text-center">
                Rev up your ride with our modifications!
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ml-16 mt-20 gap-y-16">
            @foreach ($modifications as $items)
                <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                    <div
                        class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
                        <img class="w-full h-fit" src="{{ Storage::url($items->image) }}" alt="Modification item pic">
                    </div>
                    <div class="p-6">
                        <h5
                            class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            {{ $items->name }}
                        </h5>
                        <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                            {{$items->description}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
