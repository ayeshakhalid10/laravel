<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/dist/output.css" rel="stylesheet">
    <title>SB creative</title>  
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])    
</head>
<body class="bg-white">
    <div class="flex justify-center">
        <div class="flex flex-col text-center gap-y-4">
            <div class="text-[#FF5733] font-medium text-sm">
                Pricing
            </div>
            <div class="text-4xl font-bold">
                Pricing plans for teams of all sizes
            </div>
            <div class="w-[40rem] text-gray-600 text-sm">
                Choose an affordable plan that’s packed with the best features for engaging your audience, creating customer loyalty, and driving sales.
            </div>
        </div>
    </div>
    <div class="flex justify-center my-10">
        <label class="relative inline-flex items-center cursor-pointer">
            <input type="checkbox" value="" class="sr-only peer">
              <div class="peer outline-none border border-gray-600  duration-100 after:duration-500 w-[9rem] h-8 bg-white peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-[#000000]  after:content-['Monthly'] after:absolute after:outline-none after:h-6 after:w-20 after:bg-[#FF5733] after:top-1 after:left-1 after:flex after:justify-center after:items-center after:rounded-full after:text-white after:font-bold peer-checked:after:translate-x-14 peer-checked:after:content-['Annually'] peer-checked:after:border-white text-xs rounded-full">
            </div>
          </label>
    </div>
    <div class="flex justify-center gap-x-5">
        <div class="w-[19rem] h-[35rem] p-8 rounded-3xl border-2 border-gray-200 shadow-md hover:border-[#FF5733] transition-all">
            <div class="flex flex-col text-start gap-y-4">
                <div class="font-medium ">
                    Hobby
                </div>
                <div class="text-gray-600 text-xs">
                    The essentials to provide your best work for clients.
                </div>
                <div class="flex gap-x-1">
                    <div class="text-bold text-4xl font-semibold">
                        $144
                    </div>
                    <div class="mt-5 text-xs font-medium">
                        /year
                    </div>
                </div>
                <button class="hover:bg-[#FF5733] border border-[#FF5733] text-[#FF5733] font-bold py-2 px-4 rounded-md text-xs hover:text-white transition-all shadow-md hover:shadow-lg ">
                    Buy Plan
                </button>
                <div class="flex items-center gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium">
                        5 products
                    </div>
                </div>
                <div class="flex items-center gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium">
                        Up to 1,000 subcribers
                    </div>
                </div>
                <div class="flex items-center gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium">
                        Basic analytics
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[19rem] h-[35rem] p-8 rounded-3xl border-2 hover:border-gray-200 shadow-md border-[#FF5733] transition-all">
            <div class="flex flex-col text-start gap-y-4">
                <div class="font-medium ">
                    Freelancer
                </div>
                <div class="text-gray-600 text-xs">
                    The essentials to provide your best work for clients.
                </div>
                <div class="flex gap-x-1">
                    <div class="text-bold text-4xl font-semibold">
                        $288
                    </div>
                    <div class="mt-5 text-xs font-medium">
                        /year
                    </div>
                </div>
                <button class="bg-[#FF5733] hover:bg-white border border-[#FF5733] hover:text-[#FF5733] font-bold py-2 px-4 rounded-md text-xs text-white  transition-all shadow-md hover:shadow-lg ">
                    Buy Plan
                </button>
                <div class="flex items-center gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium">
                        5 products
                    </div>
                </div>
                <div class="flex items-center gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium">
                        Up to 1,000 subcribers
                    </div>
                </div>
                <div class="flex items-center gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium">
                        Basic analytics
                    </div>
                </div>
                <div class="flex items-start gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium w-[13rem]">
                        48-hour support response time
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[19rem] h-[35rem] p-8 rounded-3xl border-2 border-gray-200 shadow-md hover:border-[#FF5733] transition-all">
            <div class="flex flex-col text-start gap-y-4">
                <div class="font-medium ">
                    Startup
                </div>
                <div class="text-gray-600 text-xs">
                    The essentials to provide your best work for clients.
                </div>
                <div class="flex gap-x-1">
                    <div class="text-bold text-4xl font-semibold">
                        $576
                    </div>
                    <div class="mt-5 text-xs font-medium">
                        /year
                    </div>
                </div>
                <button class="hover:bg-[#FF5733] border border-[#FF5733] text-[#FF5733] font-bold py-2 px-4 rounded-md text-xs hover:text-white transition-all shadow-md hover:shadow-lg ">
                    Buy Plan
                </button>
                <div class="flex items-center gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium">
                        25 products
                    </div>
                </div>
                <div class="flex items-center gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium">
                        Up to 10,000 subcribers
                    </div>
                </div>
                <div class="flex items-center gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium">
                        Advance analytics
                    </div>
                </div>
                <div class="flex items-start gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium w-[13rem]">
                        24-hour support response time
                    </div>
                </div>
                <div class="flex items-start gap-x-2">
                    <div>
                        <svg class="text-[#FF5733]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="m11.39 5.312l-4.318 5.399L3.68 7.884l.64-.768l2.608 2.173l3.682-4.601l.78.624Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="text-sm text-gray-600 fontt-medium w-[13rem]">
                        Marketing automations
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>