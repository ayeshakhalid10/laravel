<x-guest-layout>
    <div class="bg-gray-200">
        <div class="max-w-xs md:max-w-[100rem] pt-[5rem] pb-20 mx-auto ">
            <div class="flex flex-col gap-y-10 md:flex-row justify-start text-start">
                <div>
                    <img class="h-fit md:h-[30rem] w-fit" src="{{ Vite::asset('/resources/images/workshop.png') }}"
                        alt="image description">
                </div>
                    <div class="flex flex-col gap-y-10 md:ml-20 bg-gray-100 p-8 rounded-lg shadow-lg">
                        <div class="text-4xl font-bold ">
                            {{ $shop->name }}
                        </div>
                        <div class="flex flex-col md:flex-row gap-x-20">
                            <div class="flex flex-col ">
                                <div class="font-bold text-lg">
                                    Description:
                                </div>
                                <div class="">
                                    {{ $shop->description }}
                                </div>
                            </div>
                            <div class="flex flex-col gap-x-2">
                                <div class="font-bold">
                                    Number:
                                </div>
                                <div class="">
                                    {{ $shop->number }}

                                </div>
                            </div>
                        </div>
                        <div class="flex gap-x-32 w-ful">
                            <div class="flex flex-col gap-x-2">
                                <div class="font-bold text-lg">
                                    Location:
                                </div>
                                <div class="font-">
                                    {{ $shop->location }}
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-start gap-x-32 w-ful">
                            <div class="flex gap-x-2">
                                <div class="font-bold text-lg">
                                    Time Availability:
                                </div>
                                <div class="">
                                    {{ $shop->availability }}

                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row justify-start gap-x-32 w-ful">
                            <div class="flex gap-x-2 items-center">
                                <div class="font-bold text-lg">
                                    Facebook:
                                </div>
                                <div class="">
                                    {{ $shop->facebook }}

                                </div>
                            </div>
                            <div class="flex gap-x-2 items-center">
                                <div class="font-bold text-lg">
                                    Instagram:
                                </div>
                                <div class="font-">
                                    {{ $shop->instagram }}
                                </div>
                            </div>
                        </div>
            <a href="Workshoplist" class="flex font-medium text-blue-600 text-start items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12q0 .425-.288.713T19 13z" />
                    </svg>
                </div>
                <div>
                    Go Back
                </div>
            </a>
        </div>
    </div>
    @foreach ($reviews as $review)
        <div class="flex bg-white rounded-xl p-4 w-fit mb-4">
            <div class="flex flex-col gap-y-3">
                <div>
                    Stars: {{ $review->stars }} 
                </div>
                <div class="text-xl font-bold">
                    {{ $review->title }}
                </div>
                <div class="text-gray-500 text-sm">
                    {{ $review->name }}
                </div>
                <div class="p-2 bg-white shadow-lg text-sm rounded-lg">
                    {{ $review->description }}
                </div>
                <div class="h-[0.05rem] w-full bg-black"></div>
            </div>
        </div>
    @endforeach

    <div x-data="{ modelOpen: false }">
        <button @click="modelOpen =!modelOpen"
            class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-black capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-md focus:ring focus:ring-indigo-300 focus:ring-opacity-50 hover:bg-black hover:text-white transition-all mt-5">
            <span>Write a Review</span>
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
                        <h1 class="text-xl font-medium text-gray-800 ">Write a Review</h1>

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
                        Your opinion matters! Share your experience and help others make informed decisions.
                    </p>

                    <form class="mt-5" action="{{route('submit.review',['shop'=>$shop])}}" method="post">
                        @csrf
                        <div>
                            <label for="user name" class="block text-sm text-gray-800 capitalize">Title</label>
                            <input placeholder="Arthur Melo" type="text" name="title"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        <div class="mt-4">
                            <label for="description" class="block text-sm text-gray-700 capitalize">Description</label>
                            <input placeholder="arthurmelo@example.app" type="description" name="description"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>

                        <div class="flex justify-end mt-6">
                            <button type="submit"
                                class="px-3 py-2 text-sm tracking-wide text-black capitalize transition-colors duration-200 transform bg-[#FCE116] rounded-md focus:ring focus:ring-indigo-300 focus:ring-opacity-50 hover:bg-black hover:text-white transition-all">
                                Publish
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
</x-guest-layout>
