<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Car Rental Pro</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">
    <div class="flex justify-start">
        <img class="h-screen w-[65rem] " src="{{ Vite::asset('/resources/images/Login.png') }}" alt="image description">
        <div class="flex flex-col max-w-[40rem] mx-auto w-full">
            <div class="flex justify-between mt-20">
                <div
                    class=" w-fit h-fit p-3 border-b-[0.5rem] rounded-sm border-[#F37335] transition-all font-bold text-4xl uppercase">
                    Login
                </div>
                <a href="{{route('Signup')}}"
                    class=" w-fit cursor-pointer h-fit p-3 border-b-[0.5rem] text-gray-400 hover:text-black rounded-sm border-gray-400 hover:border-[#F37335] transition-all font-bold text-4xl uppercase">
                    Signup
                </a>
            </div>
            <div class="font-extrabold text-5xl text-center mt-20">
                Welcome Back
            </div>
            <div class="text-gray-500 font-bold text-center my-3">
                Please Login to your account
            </div>

            <form action="{{ route('Login') }}" method="post">
                @csrf
                <div class="mt-10">
                    <label for="email"  class="block mb-2 text-lg font-bold text-gray-900 ">Email</label>
                    <input type="text" name="email" id="default-input"
                        class="bg-transparent border-b-[0.25rem] border-black text-gray-900 text-sm block w-[35rem] p-2.5
                        @error('email') border-red-500 @enderror" value="{{old('email')}}">
                        @error('email')
                        <div class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-10">
                    <label for="password" class="block mb-2 text-lg font-bold text-gray-900 ">Password</label>
                    <input type="password" name="password" id="default-input"
                        class="bg-transparent border-b-[0.25rem] border-black text-gray-900 text-sm block w-[35rem] p-2.5
                        @error('password') border-red-500 @enderror" value="{{old('email')}}">
                        @error('password')
                        <div class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="text-end mr-20 mt-2">
                    <div class="font-bold text-xl">
                        Forgot?
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-[#FCE116] hover:bg-[#d3c030] text-black uppercase font-extrabold py-4 px-14 shadow-lg hover:shadow-xl rounded-xl text-4xl transition-all">
                        Login
                    </button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>
