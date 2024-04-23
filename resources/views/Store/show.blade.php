{{-- @dd($store->name) --}}

<x-guest-layout>
    <div class="max-w-sm md:max-w-md py-20 lg:max-w-[90rem] mx-auto">
        <div class="flex flex-col justify-center gap-y-5">
            <div class="text-3xl font-medium text-center">
                Your Store
            </div>
            <div class="text-center">
                Rev up your Store with your modifications!
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 ml-0 md:ml-16 mt-10 md:mt-20">
            <div>
                <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-xl bg-clip-border rounded-xl w-96">
                    <div
                        class="relative mx-4 -mt-6 overflow-hidden bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        <img class="w-full h-fit rounded-xl" src="{{ $image }}" alt="">
                    </div>
                    <div class="p-6">
                        <h5
                            class="block mb-2 font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            {{$store->name}}
                        </h5>
                        <p class="block font-sans text-black text-base antialiased font-light leading-relaxed text-inherit">
                            {{$store->address}}
                        </p>
                    </div>
                    <div class="p-6 pt-0">
                        <button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button">
                            {{$store->phoneno}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{ modelOpen: false }">
            <button @click="modelOpen =!modelOpen"
                class="flex items-center justify-center p-4 space-x-2 text-base text-black capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-xl dark:focus:bg-indigo-700 hover:bg-black hover:text-white focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 ml-0 md:ml-16 mt-10 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                <span>Add items to your store</span>
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
                            <h1 class="text-xl font-medium text-gray-800 ">Add items to your store</h1>

                            <button @click="modelOpen = false"
                                class="text-gray-600 focus:outline-none hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="{{ route('store.modification', ['store' => $store->id]) }}"
                            class="mt-5">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm text-gray-700 capitalize">Name</label>
                                <input placeholder="E.g Cover" type="text" name="name" id="name"
                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>

                            <div class="mt-4">
                                <label for="type" class="block text-sm text-gray-700 capitalize">Type</label>
                                <input placeholder="E.g Interior/Exterior or Aftermarket" type="text" name="type"
                                    id="type"
                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="mt-4">
                                <label for="description"
                                    class="block text-sm text-gray-700 capitalize">Description</label>
                                <input placeholder="E.g Anything" type="text" name="description" id="description"
                                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                            <div class="mt-4">
                                <label for="image" class="block text-sm text-gray-700 capitalize">Upload An
                                    image</label>
                                <input type="file" name="image" id="image" class="mt-2">
                            </div>
                            <div class="flex justify-end mt-6">
                                <button type="submit"
                                    class="px-3 py-2 text-sm tracking-wide text-black hover:text-white capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-md dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                    Add Item
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-xl mt-10 font-medium ml-16 mb-10">
            Your Items
        </div>
        <div class="ml-14">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Type
                            </th>

                            <th scope="col" class="pr-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($store->modifications as $modification)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <img class="w-20 rounded-lg shadow-md h-fit" src="{{ Storage::url($modification->image) }}" alt="">
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$modification->name}}
                            </th>
                            <td class="px-6 py-4 text-gray-900">
                                White
                            </td>
                            <td class="px-6 py-4 text-gray-900">
                                Interior
                            </td>
                            <td class="pr-6 py-4">
                                <div class="flex">
                                    <div>
                                        <button class="p-2 text-white rounded bg-red-600">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    {{-- <img src="{{$image}}" alt=""> --}}
</x-guest-layout>
