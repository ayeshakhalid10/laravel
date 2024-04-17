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

<body class="bg-white font-body">
    <div class="flex justify-start">
        <img class="h-screen w-[65rem] " src="{{ Vite::asset('/resources/images/Login.png') }}" alt="image description">
        <div class="flex flex-col max-w-[40rem] mx-auto w-full">
            <div class="flex justify-between mt-20">
                <a href="Login"
                    class=" w-fit h-fit cursor-pointer p-3 border-b-[0.5rem] rounded-sm  text-gray-400 hover:text-black border-gray-400 hover:border-[#F37335] transition-all font-bold text-4xl uppercase">
                    Login
                </a>
                <div
                    class=" w-fit h-fit p-3 border-b-[0.5rem] text-black rounded-sm border-[#F37335] transition-all font-bold text-4xl uppercase">
                    Signup
                </div>
            </div>
            <div class="font-extrabold text-5xl text-center mt-20">
                Create your Account
            </div>
            <div class="text-gray-500 font-bold text-center my-3">
                Please Create your account
            </div>
            <div class="mt-10">
                <label for="default-input" class="block mb-2 text-lg font-bold text-gray-900 ">Email</label>
                <input type="text" id="default-input"
                    class="bg-transparent border-b-[0.25rem] border-black text-gray-900 text-sm block w-[35rem] p-2.5">
            </div>
            <div class="mt-10">
                <label for="default-input" class="block mb-2 text-lg font-bold text-gray-900 ">Password</label>
                <input type="password" id="default-input"
                    class="bg-transparent border-b-[0.25rem] border-black text-gray-900 text-sm block w-[35rem] p-2.5">
            </div>
            <div class="mt-10">
                <label for="default-input" class="block mb-2 text-lg font-bold text-gray-900 ">Confirm Password</label>
                <input type="password" id="default-input"
                    class="bg-transparent border-b-[0.25rem] border-black text-gray-900 text-sm block w-[35rem] p-2.5">
            </div>
            <div class="flex justify-center mt-20">
            <button class="bg-[#FCE116] hover:bg-[#d3c030] text-black uppercase font-extrabold py-4 px-14 shadow-lg hover:shadow-xl rounded-xl text-4xl transition-all">
                    Signup
                </button>
            </div>
        </div>
    </div>
</body>
</html>
