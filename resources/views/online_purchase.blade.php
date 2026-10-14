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
 <header class="w-full h-16 bg-[#f77f00] flex flex-row p-1  items-center justify-between">
 

            <div class="flex flex-row gap-3 items-center justify-center py-3 px-1 ">
                <img src="images/logo15.png" alt="" class="h-9 ">
                <h3 class="text-white lg:text-xl sm:text-sm font-bold"><i class="fa-solid fa-store mr-2"></i>Product Listings</h3>
            </div>
 
        <div class="flex flex-row gap-2 items-center justify-end  px-3">
            <div class="flex flex-row gap-2 items-center justify-center ">
            <div class="relative">
                <input
                    type="search"
                    placeholder="Search"
                   class="p-1 pl-3 pr-8 rounded-full text-sm bg-gray-200  focus:outline-gray-500 focus:outline-2"
                >
                <i class="fa-solid fa-search absolute right-3 top-1/2 -translate-y-1/2 text-gray-500"></i>
            </div>
                {{-- <button class="text-white font-bold rounded-lg px-3 py-1 hover:scale-105 transition duration-300 mr-9  border-2 border-gray-600 bg-gray-600 flex flex-row gap-3 items-center">Search </button> --}}
            </div>
            <p class="text-white font-bold hidden sm:block">{{ $currentUser->first_name ?? "" }}</p>
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

                        <h2 class="text-base font-bold truncate text-white leading-tight">{{ ($currentUser->first_name ?? "" ) . " " . ($currentUser->last_name ?? "") }}</h2>
                        <i class="fa-solid fa-circle-check text-xs text-white" title="Verified Account"></i>
                    </div>
                    <p class="text-xs text-orange-100 truncate mt-0.5">{{ $currentUser->email_address ?? "" }}</p>
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

                <span class="font-semibold text-gray-800">{{ (date('d F Y', strtotime($currentUser->created_at))) ?? "" }}</span>
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
            <a href="/logout" class="flex-1 text-center py-2 px-3 text-xs font-semibold text-white bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 rounded-xl transition duration-200 shadow-sm flex items-center justify-center gap-1.5 cursor-pointer">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Sign Out
            </a>
        </div>
    </div>

    
    <div class="grid grid-cols-15 ">
        <aside class="col-span-2 bg-gray-200 p-1 rounded-lg">
            <ul class="flex flex-col gap-2 text-sm">

                <li>
                    <a href="/home"
                    class="flex items-center gap-3  md:w-full p-3 rounded-md
                            hover:bg-gray-300 transition duration-300">
                        <i class="fa-solid fa-house"></i>
                        <span class="hidden sm:hidden md:block lg:block xl:block ">Home</span>
                    </a>
                </li>

                <li>
                    <a href="/products"
                    class="flex items-center gap-3 w-full p-3 rounded-md
                            hover:bg-gray-300 transition duration-300">
                        <i class="fa-solid fa-eye"></i>
                        <span class="hidden sm:hidden md:block lg:block xl:block ">View Products</span>
                    </a>
                </li>

                <li>
                    <a href="/cart"
                    class="flex items-center gap-3 w-full p-3 rounded-md
                            hover:bg-gray-300 transition duration-300">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="hidden sm:hidden md:block lg:block xl:block ">Cart</span>
                    </a>
                </li>

                <li>
                    <a href="/wishlist"
                    class="flex items-center gap-3 w-full p-3 rounded-md
                            hover:bg-gray-300 transition duration-300">
                        <i class="fa-solid fa-heart"></i>
                        <span class="hidden sm:hidden md:block lg:block xl:block ">Wishlist</span>
                    </a>
                </li>

                <li>
                    <a href="/profile"
                    class="flex items-center gap-3 w-full p-3 rounded-md
                            hover:bg-gray-300 transition duration-300">
                        <i class="fa-solid fa-user"></i>
                        <span class="hidden sm:hidden md:block lg:block xl:block ">My profile</span>
                    </a>
                </li>

                <li>
                    <a href="/notifications"
                    class="flex items-center gap-3 w-full p-3 rounded-md
                            hover:bg-gray-300 transition duration-300">
                        <i class="fa-solid fa-bell"></i>
                        <span class="hidden sm:hidden md:block lg:block xl:block ">Notifications</span>
                    </a>
                </li>

                <li>
                    <a href="/logout"
                    class="flex items-center gap-3 w-full p-3 rounded-md
                            hover:bg-red-200 transition duration-300">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span class="hidden sm:hidden md:block lg:block xl:block ">Logout</span>
                    </a>
                </li>

            </ul>
        </aside>

        <main class="  h-[calc(100vh-4rem)] col-span-13 ">

            <div class=" text-sm overflow-auto  flex flex-col gap-4  shadow-[inset_0_2px_8px_rgba(0,0,0,0.2)] bg-gray-200 p-3 ">
            
                <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.146),rgba(0, 0, 0, 0.531)) ,url('shop9.jpg')" class=" p-4  bg-black/70 relative h-70 bg-cover bg-[position:50%_20%]  px-3 py-3  rounded-lg shadow-lg-flex md:flex-col flex-col lg:flex-row   gap-2 ">
                    <div class="relative flex justify-between p-2 items-end h-full ">
                    <div class="  ">
                    <h2 class="text-gray-100 text-shadow-lg text-shadow-gray-800 text-2xl md:text-5xl font-extrabold">KOSTIC</h2>
                    <p class="text-orange-400 text-base md:text-2xl">Make a purchase online</p>
                    </div>
                    <img src="logo7.png" alt="" class="h-12 md:h-20  opacity-90">
                    
                </div>
            </div>

            {{-- <div class=" px-3 py-3  rounded-lg shadow-lg bg-gray-100 flex md:flex-col flex-col lg:flex-row   gap-2">

                <div class=" w-full  bg-gray-100 rounded-md border  border-[#f77f00] p-4 ">
                    <div class=" flex flex-row items-center justify-start  gap-1 ">

                        <h3 class="font-bold md:text-lg text-md">Search criteria</h3>
                        <i class="fa-solid fa-magnifying-glass-plus text-xl text-gray-900 "></i>

                    </div>

                    <div class="bg-[#f77f00]  h-[1px] mt-1"></div>

                    <div class="flex flex-row justify-start gap-5 mt-2 py-1  flex-wrap mb-1">

                        <div class="flex flex-row justify-start gap-2 0 ">
                            <div class="">
                                <label for="">Search for</label>
                                <input type="text" name="" id="" class="p-1 border border-orange-400 bg-gray-100 rounded-lg w-full">
                            </div>


                            <div class="">
                                <label for="">Search by</label>
                                <select name="" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100 w-full">
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
            </div> --}}
            <!-- this is for the table container -->
            <div class="rounded-lg shadow-lg bg-gray-100 p-3 flex flex-col gap-4">




                <div class="flex flex-row flex-wrap bg-gray-100 gap-6 justify-center lg:justify-center py-4 rounded-lg  p-4 border border-[#f77f00]">

                    <div class="w-full flex flex-row items-center gap-4  shadow-lg rounded-lg p-4 flex-wrap  bg-gray-200">
                        <p class="md:text-lg text-md font-bold">Filter</p>
                        <select name="" id="" class="visible md:hidden p-1 border border-[#f77f00] rounded-lg bg-gray-200 w-full ">
                            <option value="">All</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category ?? "" }}">{{ $category ?? "" }}</option>       
                            @endforeach
                        </select>
                        
                        <ul class=" hidden md:flex     flex-row gap-2 justify-start lg:justify-between  items-center flex-wrap text-xs">
                            <li class="transition duration-300 hover:scale-105 "><a href=""class="border border-[#f77f00] hover:bg-[#f77f00] hover:text-white font-bold px-5 py-1 rounded-full  ">All</a></li>
                            @foreach ($categories as $category)
                                <li class="transition duration-300 hover:scale-105"><a href="" class="border border-[#f77f00] hover:bg-[#f77f00] hover:text-white  px-5 py-1 rounded-full">{{ $category ?? "" }}</a></li>       
                            @endforeach
                        </ul>
                    </div>

            <!-- Tile  -->
            @foreach($products as $product)

                    <div class="group relative flex flex-col justify-between w-80 bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative w-full h-48 bg-gray-50 overflow-hidden flex items-center justify-center">
                            <img src="laptop.jpg" alt="Pro Ultra-Slim Laptop" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-2.5 left-2.5 bg-[#f77f00] text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">{{ $product->extra_info ?? ""}}</span>
                            <button type="button" title="Add to wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white shadow-sm flex items-center justify-center transition-all active:scale-90">
                                <i class="fa-regular fa-heart text-sm"></i>
                            </button>
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between gap-2.5">
                            <div>
                                <div class="flex items-center justify-between text-[11px] mb-1">
                                    <span class="font-bold text-[#f77f00] uppercase tracking-wider">{{ $product->category ?? "" }}</span>
                                    <span class="flex items-center gap-1 text-amber-600 font-medium"><span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>{{ $product->stock ?? "" }} left</span>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base leading-snug group-hover:text-[#f77f00] transition-colors truncate" title="Pro Ultra-Slim Laptop 15.6">{{ $product->name }}</h3>
                                <ul class="flex flex-wrap gap-1 text-[11px] text-gray-600 mb-2 mt-3">
                                    @php
                                        
                                        $tags = array_map('trim', explode(",", $product->tags));
                                        
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <li class="px-2 py-0.5 rounded-md bg-gray-100 border border-gray-200">{{ $tag }}</li>
                                    @endforeach
                                </ul>

                            </div>
                            <div class="pt-2.5 border-t border-gray-100 flex items-center justify-between gap-2">
                                <div>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-lg font-bold text-gray-900">${{ $product->usd_price }}</span>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#f77f00]">{{ $product->zar_price }} ZAR</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <a href="#" title="Preview" class="w-8 h-8 rounded-lg border border-gray-200 text-gray-500 hover:text-[#f77f00] hover:border-[#f77f00] hover:bg-orange-50 flex items-center justify-center transition-colors">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>
                                    <a href="/products/add-to-cart/{{ $product->id }}" class="bg-[#f77f00] hover:bg-[#d96e00] active:scale-95 text-white px-3 h-8 rounded-lg text-xs font-semibold shadow-sm hover:shadow flex items-center gap-1.5 transition-all">
                                        <i class="fa-solid fa-cart-shopping text-xs"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

            @endforeach

            <!-- Tile  -->


                </div>

            </div>


            </div>


            </div>


        </main>

    </div>

    
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
