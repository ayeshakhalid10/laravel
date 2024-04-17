<x-guest-layout>
    <div class="bg-gray-200">
        <div class="max-w-[100rem] pt-[5rem] pb-20 mx-auto ">
            <div class="flex justify-start text-start">
                <div>
                    <img class="h-[30rem] w-fit" src="{{ Vite::asset('/resources/images/workshop.png') }}"
                        alt="image description">
                </div>
                @foreach($shop as $items)
                <div class="flex flex-col gap-y-10 ml-20 bg-gray-100 p-8 rounded-lg shadow-lg">
                    <div class="text-4xl font-bold ">
                        {{ $items->name}}
                    </div>
                    <div class="flex gap-x-20">
                        <div class="flex flex-col ">
                            <div class="font-bold text-lg">
                                Description:
                            </div>
                            <div class="">
                                {{ $items->description }}
                            </div>
                        </div>
                        <div class="flex flex-col gap-x-2">
                            <div class="font-bold">
                                Number:
                            </div>
                            <div class="">
                                {{ $items->number }}
                                
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-x-32 w-ful">
                        <div class="flex flex-col gap-x-2">
                            <div class="font-bold text-lg">
                                Location:
                            </div>
                            <div class="font-">
                                {{ $items->location}}
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-start gap-x-32 w-ful">
                            <div class="flex gap-x-2">
                                <div class="font-bold text-lg">
                                    Time Availability:
                                </div>
                                <div class="">
                                    {{ $items->availability }}
                                    
                                </div>
                            </div>
                    </div>
                    <div class="flex justify-start gap-x-32 w-ful">
                        <div class="flex gap-x-2 items-center">
                            <div class="font-bold text-lg">
                                Facebook:
                            </div>
                            <div class="">
                                {{ $items->facebook}}
                                
                            </div>
                        </div>
                        <div class="flex gap-x-2 items-center">
                            <div class="font-bold text-lg">
                                Instagram:
                            </div>
                            <div class="font-">
                                {{ $items->instagram}}
                            </div>
                        </div>
                    </div>
                    @break
                    @endforeach
                    

                    <a href="Workshoplist" class="flex font-medium text-blue-600 text-start items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12q0 .425-.288.713T19 13z"/></svg>
                        </div>
                        <div>
                            Go Back
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>
</x-guest-layout>