<div class="bg-[#28282B] w-full h-fit md:h-[40rem] py-10">
    <div class="max-w-xs md:max-w-md lg:max-w-[100rem] mx-auto ">
        <div class="text-start text-3xl font-bold text-[#FCE116] mb-10">
            AutoCare Finder
        </div>
        <div class="w-full border-b-2 border-t-2 border-white py-[4.5rem] ">
            <div class="flex flex-col gap-y-5 md:flex-row justify-between">
                <div class="flex flex-col gap-y-5">
                    <div class="text-white font-bold">
                        About us
                    </div>
                    <div class="text-gray-400 w-[20rem]">
                        Welcome to AutoCare Finder, where automotive dreams come to life! Immerse yourself in the
                        world of cutting-edge cars where innovation meets style. Explore our curated selection of
                        top-tier upgrades, expertly crafted to elevate your driving experience. Unleash the full
                        potential of your vehicle with our exclusive range of modifications, tailored for
                        enthusiasts like you
                    </div>
                </div>
                <div class="flex flex-col gap-y-5">
                    <div class="text-white font-bold">
                        Quick Links
                    </div>
                    <div class="text-gray-400 hover:text-white transition-all cursor-pointer">
                        Home
                    </div>
                    <div class="text-gray-400 hover:text-white transition-all cursor-pointer">
                        Car List
                    </div>
                    <div class="text-gray-400 hover:text-white transition-all cursor-pointer">
                        Register Your Car
                    </div>
                    <div x-data="{ showTooltip: false }" class="relative">
                        <span @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                            class="text-gray-400 cursor-pointer hover:text-gray-500">
                            Contact Us
                        </span>

                        <!-- Tooltip -->
                        <div x-show="showTooltip"
                            class="absolute left-0 mt-2 p-2 bg-white text-black text-sm rounded">
                            +92334556224
                        </div>
                    </div>

                </div>
                <div class="flex flex-col gap-y-5">
                    <div class="text-white font-bold">
                        Contact us
                    </div>
                    <div class="flex text-white font-bold gap-x-2 ">
                        <div>
                            <svg class="text-[#FCE116]" xmlns="http://www.w3.org/2000/svg" width="28"
                                height="28" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2c3.31 0 6 2.66 6 5.95C18 12.41 12 19 12 19S6 12.41 6 7.95C6 4.66 8.69 2 12 2m0 4a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m8 13c0 2.21-3.58 4-8 4s-8-1.79-8-4c0-1.29 1.22-2.44 3.11-3.17l.64.91C6.67 17.19 6 17.81 6 18.5c0 1.38 2.69 2.5 6 2.5s6-1.12 6-2.5c0-.69-.67-1.31-1.75-1.76l.64-.91C18.78 16.56 20 17.71 20 19" />
                            </svg>
                        </div>
                        <div>
                            Main PWD road,Roait Plaza Shop# 07
                        </div>
                    </div>
                    <div class="flex text-white font-bold gap-x-2 ">
                        <div>
                            <svg class="text-[#FCE116]" xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                            </svg>
                        </div>
                        <div>
                            +92334556224
                        </div>
                    </div>
                    <div class="flex text-white font-bold gap-x-2 ">
                        <div>
                            <svg class="text-[#FCE116]" xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7.175q.125 0 .263-.038t.262-.112L19.6 8.25q.2-.125.3-.312t.1-.413q0-.5-.425-.75T18.7 6.8L12 11L5.3 6.8q-.45-.275-.875-.012T4 7.525q0 .25.1.438t.3.287l7.075 4.425q.125.075.263.113t.262.037" />
                            </svg>
                        </div>
                        <div>
                            AutocareFinder@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center text-xs md:text-base text-white font-bold gap-x-2 pt-5 items-center">
        <div >
            Copyright
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1.5">
                    <circle cx="8" cy="8" r="6.25" />
                    <path d="M10 6.75s-.75-1-2-1s-2.25 1-2.25 2.25s1 2.25 2.25 2.25s2-1 2-1" />
                </g>
            </svg>
        </div>
        <div>
            2024 All rights reserved Autocare Finder
        </div>
    </div>
</div>