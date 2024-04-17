<x-guest-layout>
    <div class="bg-gray-200">
        <div class="max-w-[100rem] pt-20 pb-20 mx-auto ">
            <div class="flex justify-center text-center">
                <div class="text-5xl font-bold ">
                    Your Registered Cars
                    <hr class="h-[0.10rem] w-80 my-8 border-0 bg-gray-700">
                </div>
            </div>
            <div class="w-full h-fit shadow-2xl rounded-lg mt-10 p-4">
                <div class="flex justify-start  gap-x-[6.5rem] pl-10">
                    <div class="flex flex-col items-center">
                        <div class="text-gray-600 font-bold">
                            Image
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        <div class="text-gray-600 font-bold">
                            Car No#
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        <div class="text-gray-600 font-bold">
                            Color
                        </div>
 
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        <div class="text-gray-600 font-bold">
                            Type
                        </div>
 
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        <div class="text-gray-600 font-bold">
                            Condition
                        </div>

                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        <div class="text-gray-600 font-bold">
                            Model
                        </div>

                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        <div class="text-gray-600 font-bold">
                            Location
                        </div>

                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        <div class="text-gray-600 font-bold ml-2">
                            Phone#
                        </div>

                    </div>
                    <div class="flex flex-col items-center gap-y-7 ml-16">
                        <div class="text-gray-600 font-bold">
                            Action
                        </div>

                    </div>
                </div>

            @foreach ($table as $items)
                <div class="flex justify-start border-b border-gray-500 gap-x-[6rem] pt-3 items-center">
                    <div class="flex flex-col items-center">
                        <div>
                            <img class="h-[5rem] w-fit" src="{{ Vite::asset('/resources/images/Honda-city.png') }}"
                                alt="image description">
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        
                        <div class="font-bold">
                            {{ $items->carno}}
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        
                        <div class="font-bold">
                            {{ $items->color }}
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                       
                        <div class="font-bold">
                            {{ $items->type }}
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        
                        <div class="font-bold">
                            {{ $items->condition }}
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        
                        <div class="font-bold">
                            {{ $items->model}}
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-8 ml-6">
                        
                        <div class="font-bold">
                            {{ $items->location}}
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-8">
                        
                        <div class="font-bold">
                            0334-552334
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-7">

                        <div class="flex gap-x-2">
                            <div>
                                <button
                                    class="bg-[#FF0000] hover:bg-black text-white hover:text-white font-bold py-2 px-4 shadow-lg hover:shadow-xl rounded-xl text-sm transition-all">
                                    Delete
                                </button>
                            </div>
                            <div>
                                <button
                                    class="bg-[#FCE116] hover:bg-black text-black hover:text-white font-bold py-2 px-4 shadow-lg hover:shadow-xl rounded-xl text-sm transition-all">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</x-guest-layout>