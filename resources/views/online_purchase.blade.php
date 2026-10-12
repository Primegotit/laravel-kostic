<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])

        @else
            <style>
            </style>
        @endif

        <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    </head>
<body class="bg-gray-200 ">
 <header class="w-full h-16 bg-[#f77f00] flex flex-row p-3  items-center justify-between">
 

            <div class="flex flex-row gap-3 items-center justify-center p-3 ">
                <img src="images/logo15.png" alt="" class="h-9 ">
                <h3 class="text-white lg:text-xl sm:text-sm font-bold">Online purchase</h3>
            </div>

        <div class="flex flex-row gap-2 items-center justify-end">
            <p class="text-white font-bold hidden sm:block">Promise</p>
            <div>
                <button type="button" id="profile-view" class="relative block focus:outline-none rounded-full cursor-pointer transition duration-300 hover:scale-105 active:scale-95 focus:ring-2 focus:ring-white/80" aria-label="Toggle profile menu" aria-expanded="false">
                    <img src="whatsapp2.png" alt="Profile" class="h-11 w-11 rounded-full object-cover bg-gray-700 border-2 border-white shadow-sm">
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></span>
                </button>
            </div>
        </div>

    </header>

    <!-- Profile Popup Card -->
    <div id="profile-card" class="hidden fixed top-16 sm:top-18 right-3 sm:right-6 z-50 w-[340px] max-w-[calc(100vw-1.5rem)] bg-white rounded-2xl shadow-2xl shadow-black/25 border border-orange-200/80 overflow-hidden transition-all duration-200 ease-out">
        <!-- Card Header with Gradient -->
        <div class="bg-gradient-to-r from-[#f77f00] to-[#ff9e3b] p-4 text-white relative">
            <button type="button" id="close-profile-card" class="absolute top-3 right-3 text-white/80 hover:text-white hover:bg-white/20 rounded-full w-7 h-7 flex items-center justify-center transition-all cursor-pointer" aria-label="Close profile">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
            
            <div class="flex items-center gap-3">
                <div class="relative shrink-0">
                    <img src="whatsapp2.png" alt="Promise Siafwiyo" class="w-14 h-14 rounded-full border-2 border-white object-cover shadow-md bg-gray-700">
                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-emerald-500 border-2 border-white rounded-full" title="Online"></span>
                </div>
                <div class="min-w-0 pr-4">
                    <div class="flex items-center gap-1.5">
                        <h2 class="text-base font-bold truncate text-white leading-tight">Promise Siafwiyo</h2>
                        <i class="fa-solid fa-circle-check text-xs text-white" title="Verified Account"></i>
                    </div>
                    <p class="text-xs text-orange-100 truncate mt-0.5">primevaldigitals@gmail.com</p>
                    <span class="inline-flex items-center gap-1 mt-1.5 px-2 py-0.5 bg-white/20 backdrop-blur-sm text-white text-[11px] font-medium rounded-full">
                        <i class="fa-solid fa-shield-halved text-[10px]"></i> Verified Member
                    </span>
                </div>
            </div>
        </div>

        <!-- Card Body Details -->
        <div class="p-3.5 bg-gray-50/60 space-y-2 text-xs">
            <!-- Joined Date -->
            <div class="flex items-center justify-between p-2.5 rounded-xl bg-white border border-gray-100 shadow-sm">
                <span class="flex items-center gap-2 text-gray-500 font-medium">
                    <i class="fa-regular fa-calendar-check text-[#f77f00] text-sm w-4 text-center"></i> Joined on
                </span>
                <span class="font-semibold text-gray-800">22 February 2024</span>
            </div>

            <!-- Stats Grid: Transactions & Points -->
            <div class="grid grid-cols-2 gap-2">
                <div class="p-2.5 rounded-xl bg-white border border-gray-100 shadow-sm">
                    <span class="flex items-center gap-1.5 text-gray-500 text-[11px] font-medium">
                        <i class="fa-solid fa-cart-shopping text-[#f77f00]"></i> Transactions
                    </span>
                    <p class="text-base font-bold text-gray-800 mt-1">8 completed</p>
                </div>
                <div class="p-2.5 rounded-xl bg-white border border-gray-100 shadow-sm">
                    <span class="flex items-center gap-1.5 text-gray-500 text-[11px] font-medium">
                        <i class="fa-solid fa-star text-amber-500"></i> Reward Points
                    </span>
                    <p class="text-base font-bold text-[#f77f00] mt-1">300 pts</p>
                </div>
            </div>

            <!-- Location -->
            <div class="flex items-center justify-between p-2.5 rounded-xl bg-white border border-gray-100 shadow-sm">
                <span class="flex items-center gap-2 text-gray-500 font-medium">
                    <i class="fa-solid fa-location-dot text-[#f77f00] text-sm w-4 text-center"></i> Location
                </span>
                <span class="font-semibold text-gray-800">Bulawayo, Zimbabwe</span>
            </div>
        </div>

        <!-- Card Footer Actions -->
        <div class="p-3 bg-white border-t border-gray-100 flex items-center justify-between gap-2">
            <a href="user_management.html" class="flex-1 text-center py-2 px-3 text-xs font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-xl transition duration-200 flex items-center justify-center gap-1.5 cursor-pointer">
                <i class="fa-solid fa-user-pen text-gray-500"></i> Edit Profile
            </a>
            <a href="index.html" class="flex-1 text-center py-2 px-3 text-xs font-semibold text-white bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 rounded-xl transition duration-200 shadow-sm flex items-center justify-center gap-1.5 cursor-pointer">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Sign Out
            </a>
        </div>
    </div>
        
    <main class="  h-[calc(100vh-4rem)] ">

        <div class=" text-sm overflow-auto  flex flex-col gap-4  shadow-[inset_0_2px_8px_rgba(0,0,0,0.2)] bg-gray-200 p-3 ">
            
            <div class=" px-3 py-3  rounded-lg shadow-lg bg-white flex md:flex-col flex-col lg:flex-row   gap-2">

                <div class=" w-full  bg-white rounded-md border  border-[#f77f00] p-4 ">
                    <div class=" flex flex-row items-center justify-start  gap-1 ">

                        <h3 class="font-bold md:text-lg text-md">Search criteria</h3>
                        <i class="fa-solid fa-magnifying-glass-plus text-xl text-gray-900 "></i>

                    </div>

                    <div class="bg-[#f77f00]  h-[1px] mt-1"></div>

                    <div class="flex flex-row justify-start gap-6 mt-2 py-1  flex-wrap mb-1">

                        <div class="flex flex-row justify-start gap-6 ">
                            <div>
                                <label for="">Search for</label>
                                <input type="text" name="" id="" class="p-1 border border-orange-400 bg-gray-100 rounded-lg w-5/6">
                            </div>


                            <div>
                                <label for="">Search by</label>
                                <select name="" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100 w-[99%]">
                                    <option value="">Select...</option>
                                    <option value="">Product ID</option>
                                    <option value="">Product Name</option>
                                    <option value="">Category</option>
                                    <option value="">Price</option>
                                    <option value="">Stock Quantity</option>
                                    <option value="">Supplier</option>
                                    <option value="">Status</option>
                                    <option value="">Search tags</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="flex flex-row gap-3 items-end justify-center ">
                            <a href="#" class="bg-[#f77f00] text-white px-3  h-9 rounded-lg shadow-md cursor-pointer flex flex-row justify-center gap-2 items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md">Search <i class="fa-solid fa-magnifying-glass text-md text-white  "></i></a>
                            <a href="#" class="bg-[#f77f00] text-white px-3 h-9 rounded-lg shadow-md cursor-pointer flex flex-row justify-center gap-2 items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md" >Reset <i class="fa-solid fa-rotate-left text-md text-white  "></i></a>
                            
                        </div>
                        
                    </div>
                </div>

                <div class=" w-full h-auto  flex flex-row gap-2 justify-start flex-wrap lg:flex-nowrap ">
                    <div class="lg:w-11/12 w-full  flex flex-row flex-wrap gap-6 bg-white rounded-md border border-[#f77f00] justify-start p-4 items-center">

                        <div class=" h-auto w-auto">
                            <p class="font-bold md:text-lg text-md">Cart items</p>
                            <!-- <p class="md:text-lg text-md font-bold text-center border border-[#f77f00] rounded-md  p-6 shadow-lg">23</p> -->
                                <div class="border border-[#f77f00] rounded-md  p-3 shadow-lg ">
                                    <p class="md:text-lg text-md font-bold text-center ">X</p>
                                    <p class="md:text-lg text-md  text-center ">23</p>

                                </div>
                        </div>

                        <div class="h-auto w-auto">

                            <p class="font-bold md:text-lg text-md  ">Total price</p>

                            <div class=" flex flex-row  flex-wrap gap-3">
                                <div class="border border-[#f77f00] rounded-md  p-3 shadow-lg ">
                                    <p class="md:text-lg text-xs font-bold text-center ">USD</p>
                                    <p class="md:text-lg text-xs  text-center ">$103.00</p>

                                </div>

                                <div class="border border-[#f77f00] rounded-md  p-3 shadow-lg">
                                    <p class="md:text-lg text-xs font-bold text-center ">ZAR</p>
                                    <p class="md:text-lg text-xs  text-center ">4036.00 R</p>

                                </div>

                                <div class="border border-[#f77f00] rounded-md  p-3 shadow-lg">
                                    <p class="md:text-lg text-xs font-bold text-center ">ZIG</p>
                                    <p class="md:text-lg text-xs text-center ">4036.00 ZIG</p>

                                </div>
                            </div>
                            

                        </div>
                        
                    </div>
                    
                    <div class="flex flex-row h-24 lg:h-auto flex-wrap w-full md:w-full lg:w-1/3  gap-3 ">
                        <a href="#" class="bg-[#0042f7] text-white px-3 h-auto  w-32 rounded-lg shadow-lg cursor-pointer flex flex-row justify-center gap-2 items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md">View cart<i class="fa-solid fa-magnifying-glass text-md text-white  "></i></a>
                        <a href="#" class="bg-[#f77f00] text-white px-3 h-auto  w-32 rounded-lg shadow-lg cursor-pointer flex flex-row justify-center gap-2 items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md">Search <i class="fa-solid fa-magnifying-glass text-md text-white  "></i></a>

                    </div>

                </div>
    
            

            </div>


            <!-- this is for the table container -->
            <div class="rounded-lg shadow-lg bg-white p-3 flex flex-col gap-4">

                <div class="rounded-md border  border-[#f77f00] p-4 flex flex-col gap-4">

                    <div class="w-full " >
                        <h3 class=" text-black md:text-lg text-md font-bold">Product list</h3>
                        <div class="w-full h-1  bg-[#f77f00] rounded-lg"></div>
                    </div>

                    <div class="w-full flex flex-row gap-4 items-end shadow-lg p-4 flex-wrap">
                        <h2 class="text-md  ">Select the view type</h2>
                        <div class="flex flex-row justify-start items-center gap-3">
                            <a href="#" class="bg-[#f77f00] text-white px-3  h-8 rounded-lg shadow-md cursor-pointer flex flex-row justify-center gap-2 items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md">Tiles<i class="fa-solid fa-magnifying-glass text-md text-white  "></i></a>
                            <a href="#" class="bg-[#f77f00] text-white px-3  h-8 rounded-lg shadow-md cursor-pointer flex flex-row justify-center gap-2 items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md">Table<i class="fa-solid fa-magnifying-glass text-md text-white  "></i></a>

                        </div>
                        
                    </div>

                </div>


                <div class="flex flex-row flex-wrap gap-6 justify-center lg:justify-start py-4 rounded-lg bg-white p-4 border border-[#f77f00]">

                    <div class="w-full flex flex-row items-center gap-4  shadow-lg p-4 flex-wrap ">
                        <p class="md:text-lg text-md font-bold">Filter</p>
                        <ul class="flex flex-row gap-4 justify-start lg:justify-between  items-center flex-wrap text-xs">
                            <li class="transition duration-300 hover:scale-105"><a href="" class="border border-[#f77f00] font-bold px-5 py-1 rounded-full  ">All</a></li>
                            <li class="transition duration-300 hover:scale-105"><a href="" class="border border-[#f77f00]  px-5 py-1 rounded-full">Electronics</a></li>
                            <li class="transition duration-300 hover:scale-105"><a href="" class="border border-[#f77f00]  px-5 py-1 rounded-full">Clothing</a></li>
                            <li class="transition duration-300 hover:scale-105"><a href="" class="border border-[#f77f00]  px-5 py-1 rounded-full">Skincare</a></li>
                            <li class="transition duration-300 hover:scale-105"><a href="" class="border border-[#f77f00]  px-5 py-1 rounded-full">Healthcare</a></li>
                            <li class="transition duration-300 hover:scale-105"><a href="" class="border border-[#f77f00]  px-5 py-1 rounded-full">Academic</a></li>
                            <li class="transition duration-300 hover:scale-105"><a href="" class="border border-[#f77f00]  px-5 py-1 rounded-full">Hair products</a></li>
                            <li class="transition duration-300 hover:scale-105"><a href="" class="border border-[#f77f00]  px-5 py-1 rounded-full">Accessories</a></li>
                        </ul>
                    </div>
<!-- Change all the other tiles to be the same as tile 1 such that they don't have the rating feature for now *********VERY IMPORTANT************ -->
<!-- Tile 1 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Moxom Mechanical Keyboard" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-red-500 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">15% OFF</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>

                        </div>

                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Electronics</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Moxom Mechanical Keyboard">Moxom Mechanical Keyboard</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Red switch</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Size 5</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">4hr battery</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Color:</span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-red-500 ring-2 ring-offset-1 ring-red-400 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-gray-900 ring-1 ring-gray-300 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-blue-600 ring-1 ring-gray-300 cursor-pointer"></span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$20.50</span>
                                        <span class="text-xs text-gray-400 line-through">$25.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">250.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 1 -->

<!-- Tile 2 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Pro Ultra-Slim Laptop" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-[#f77f00] text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">BESTSELLER</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Electronics</span>
                                    <span class="flex items-center gap-1 text-amber-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>4 left</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Pro Ultra-Slim Laptop 15.6">Pro Ultra-Slim Laptop 15.6"</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">16GB RAM</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">512GB SSD</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Core i7</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Power:</span>
                                    <span class="px-2 py-0.5 rounded-full bg-blue-50 text-blue-700 font-medium text-[10px]">65W USB-C PD</span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$489.00</span>
                                        <span class="text-xs text-gray-400 line-through">$540.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">6,250.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 2 -->

<!-- Tile 3 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Moxom ANC Wireless Headphones" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-emerald-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">NEW</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Accessories</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Moxom ANC Wireless Headphones">Moxom ANC Wireless Headphones</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">ANC Active</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">40hr battery</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Hi-Res Audio</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Color:</span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-black ring-2 ring-offset-1 ring-gray-600 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-blue-900 ring-1 ring-gray-300 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-stone-200 ring-1 ring-gray-300 cursor-pointer"></span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$38.00</span>
                                        <span class="text-xs text-gray-400 line-through">$48.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">480.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 3 -->

<!-- Tile 4 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Ergonomic Wireless Mouse" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-blue-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">POPULAR</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Accessories</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Ergonomic Wireless Mouse">Ergonomic Wireless Mouse</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">16000 DPI</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Silent click</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Type-C charge</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Type:</span>
                                    <span class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 font-medium text-[10px]">Ergonomic 2.4G/BT</span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$16.50</span>
                                        <span class="text-xs text-gray-400 line-through">$22.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">210.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 4 -->

<!-- Tile 5 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Hydra-Glow Vitamin C Face Serum" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-purple-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">TRENDING</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Skincare</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Hydra-Glow Vitamin C Face Serum">Hydra-Glow Vitamin C Face Serum</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">50ml Bottle</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Hyaluronic Acid</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Organic</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Type:</span>
                                    <span class="px-2 py-0.5 rounded-full bg-amber-50 text-amber-700 font-medium text-[10px]">All skin types</span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$22.00</span>
                                        <span class="text-xs text-gray-400 line-through">$28.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">275.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 5 -->

<!-- Tile 6 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Pro Ionic Salon Hair Dryer" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-amber-500 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">HOT DEAL</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Hair Products</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Pro Ionic Salon Hair Dryer">Pro Ionic Salon Hair Dryer</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">2200W Turbo</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">3 Heat speeds</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Diffuser incl.</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Power:</span>
                                    <span class="px-2 py-0.5 rounded-full bg-rose-50 text-rose-700 font-medium text-[10px]">2200W Ionic AC</span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$34.50</span>
                                        <span class="text-xs text-gray-400 line-through">$42.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">430.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 6 -->

<!-- Tile 7 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Heavyweight Fleece Hoodie" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-teal-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">FEATURED</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Clothing</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Heavyweight Fleece Hoodie">Heavyweight Fleece Hoodie</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">100% Cotton</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Oversized</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Unisex</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Color:</span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-stone-700 ring-2 ring-offset-1 ring-stone-400 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-amber-100 border border-gray-300 ring-1 ring-gray-300 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-emerald-800 ring-1 ring-gray-300 cursor-pointer"></span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$27.00</span>
                                        <span class="text-xs text-gray-400 line-through">$34.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">340.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 7 -->

<!-- Tile 8 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Digital Arm Blood Pressure Monitor" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-rose-500 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">TOP RATED</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Healthcare</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Digital Arm Blood Pressure Monitor">Digital Arm Blood Pressure Monitor</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Large LCD</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">180 Memories</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">FDA Certified</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Power:</span>
                                    <span class="px-2 py-0.5 rounded-full bg-blue-50 text-blue-700 font-medium text-[10px]">USB-C + 4x AAA</span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$29.50</span>
                                        <span class="text-xs text-gray-400 line-through">$38.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">385.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 8 -->

<!-- Tile 9 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Smart Active Stylus Pen" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-indigo-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">STUDENT DEAL</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Academic</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Smart Active Stylus Pen">Smart Active Stylus Pen</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Palm Reject</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Tilt Sensor</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Type-C Fast</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Type:</span>
                                    <span class="px-2 py-0.5 rounded-full bg-indigo-50 text-indigo-700 font-medium text-[10px]">Universal Capacitive</span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$18.50</span>
                                        <span class="text-xs text-gray-400 line-through">$24.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">235.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 9 -->

<!-- Tile 10 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="65W GaN Fast Dual Charger" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-sky-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">FAST SHIP</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Accessories</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="65W GaN Fast Dual Charger">65W GaN Fast Dual Charger</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">GaN III Tech</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Dual Port</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Foldable pin</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Power:</span>
                                    <span class="px-2 py-0.5 rounded-full bg-amber-50 text-amber-700 font-medium text-[10px]">65W GaN Dual Fast</span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$13.99</span>
                                        <span class="text-xs text-gray-400 line-through">$19.99</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">175.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 10 -->

<!-- Tile 11 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Breathable Trail Running Shoes" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-red-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">25% OFF</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Clothing</span>
                                    <span class="flex items-center gap-1 text-amber-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>2 left</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Breathable Trail Running Shoes">Breathable Trail Running Shoes</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Air Cushion</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Anti-Slip</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Ultralight</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Color:</span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-blue-600 ring-2 ring-offset-1 ring-blue-400 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-red-600 ring-1 ring-gray-300 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-zinc-900 ring-1 ring-gray-300 cursor-pointer"></span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$54.00</span>
                                        <span class="text-xs text-gray-400 line-through">$72.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">690.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 11 -->

<!-- Tile 12 -->
                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="1080P HD Streaming Webcam" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-green-600 text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">PRO CHOICE</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">Electronics</span>
                                    <span class="flex items-center gap-1 text-emerald-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>In Stock</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="1080P HD Streaming Webcam">1080P HD Streaming Webcam</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Dual Stereo Mic</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Privacy Cover</li>
                                    <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">Autofocus</li>
                                </ul>
                                <div class="flex items-center gap-1.5 text-[11px] mt-4">
                                    <span class="text-gray-400">Type:</span>
                                    <span class="px-2 py-0.5 rounded-full bg-purple-50 text-purple-700 font-medium text-[10px]">Plug &amp; Play USB</span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">$26.00</span>
                                        <span class="text-xs text-gray-400 line-through">$34.00</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">330.00 ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="#" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Tile 12 -->


                </div>

            </div>


        </div>




    </main>
    
    <script>
        const profileView = document.getElementById("profile-view");
        const profileCard = document.getElementById("profile-card");
        const closeProfileCardBtn = document.getElementById("close-profile-card");

        function openProfileCard() {
            profileCard.classList.remove("hidden");
            if (profileView) {
                profileView.setAttribute("aria-expanded", "true");
            }
        }

        function closeProfileCard() {
            profileCard.classList.add("hidden");
            if (profileView) {
                profileView.setAttribute("aria-expanded", "false");
            }
        }

        function toggleProfileCard(e) {
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }
            if (profileCard.classList.contains("hidden")) {
                openProfileCard();
            } else {
                closeProfileCard();
            }
        }

        if (profileView) {
            profileView.addEventListener("click", toggleProfileCard);
        }

        if (closeProfileCardBtn) {
            closeProfileCardBtn.addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                closeProfileCard();
            });
        }

        // Prevent clicks inside the profile card from bubbling up and closing it
        if (profileCard) {
            profileCard.addEventListener("click", function(e) {
                e.stopPropagation();
            });
        }

        // Close popup when clicking anywhere outside
        document.addEventListener("click", function(e) {
            if (profileCard && !profileCard.classList.contains("hidden")) {
                if (!profileCard.contains(e.target) && !profileView.contains(e.target)) {
                    closeProfileCard();
                }
            }
        });

        // Close popup when pressing Escape key
        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape" && profileCard && !profileCard.classList.contains("hidden")) {
                closeProfileCard();
            }
        });
    </script>
</body>
        
</html>
