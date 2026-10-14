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

        <style>
            .banner-image {
                position: absolute;
                inset: 0;
                background-size: cover;
                background-position: 50% 40%;
                background-repeat: no-repeat;
                opacity: 0;
                animation: bannerFade 36s infinite;
            }

            /* Background images */
            .banner-image-1 {
                background-image: url('/shop25.jpg');
                animation-delay: 0s;
            }

            .banner-image-2 {
                background-image: url('/shop20.jpg');
                animation-delay: 6s;
            }

            .banner-image-3 {
                background-image: url('/shop26.jpg');
                animation-delay: 12s;
            }

            .banner-image-4 {
                background-image: url('/shop29.jpg');
                animation-delay: 18s;
            }

            .banner-image-5 {
                background-image: url('/shop28.jpg');
                animation-delay: 24s;
            }

            .banner-image-6 {
                background-image: url('/shop9.jpg');
                animation-delay: 30s;
            }

            @keyframes bannerFade {
                0% {
                    opacity: 0;
                }

                4% {
                    opacity: 1;
                }

                15% {
                    opacity: 1;
                }

                19% {
                    opacity: 0;
                }

                100% {
                    opacity: 0;
                }
            }
        </style>
    </head>
<body class="bg-gray-200 ">
 <header class="w-full h-16 bg-[#f77f00] flex flex-row p-1  items-center justify-between">
 

            <div class="flex flex-row gap-3 items-center justify-center py-3 px-1 ">
                <img src="images/logo15.png" alt="" class="h-9 ">
                <h3 class="text-white lg:text-xl sm:text-sm font-bold"><i class="fa-solid fa-house mr-2"></i>Home</h3>
            </div>
 
        <div class="flex flex-row gap-2 items-center justify-end  px-3">
            <div class="flex flex-row gap-2 items-center justify-center ">

                {{-- <button class="text-white font-bold rounded-lg px-3 py-1 hover:scale-105 transition duration-300 mr-9  border-2 border-gray-600 bg-gray-600 flex flex-row gap-3 items-center">Search </button> --}}
            </div>
            <p class="text-white font-bold hidden sm:block">{{ $currentUser->first_name ?? "" }}</p>
            <div>
                <button type="button" id="profile-view" class="relative block focus:outline-none rounded-full cursor-pointer transition duration-300 hover:scale-105 active:scale-95 focus:ring-2 focus:ring-white/80" aria-label="Toggle profile menu" aria-expanded="false">
                    <img src="{{ asset('whatsapp2.png') }}" alt="Profile" class="h-11 w-11 rounded-full object-cover bg-gray-700 border-2 border-white shadow-sm">
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
                    <img src="{{ asset('whatsapp2.png') }}" alt="Promise Siafwiyo" class="w-14 h-14 rounded-full border-2 border-white object-cover shadow-md bg-gray-700">
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
                    class="flex items-center gap-3  md:w-full p-3 rounded-md bg-[#ffb86d]
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


<div class="text-sm overflow-auto flex flex-col gap-4 shadow-[inset_0_2px_8px_rgba(0,0,0,0.2)] bg-gray-200 p-3">

    <!-- Banner container: original styling preserved -->
    <div
        class="p-4 bg-black/70 relative h-70 bg-cover bg-[position:50%_40%] px-3 py-3 rounded-lg shadow-lg-flex md:flex-col flex-col lg:flex-row gap-2 overflow-hidden"
    >

        <!-- Background image layers -->
        <div class="absolute inset-0 banner-image banner-image-1"></div>
        <div class="absolute inset-0 banner-image banner-image-2"></div>
        <div class="absolute inset-0 banner-image banner-image-3"></div>
        <div class="absolute inset-0 banner-image banner-image-4"></div>
        <div class="absolute inset-0 banner-image banner-image-5"></div>
        <div class="absolute inset-0 banner-image banner-image-6"></div>

        <!-- Dark overlay: preserves your original gradient -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/15 to-black/55"></div>

        <!-- Original banner content -->
        <div class="relative z-10 flex justify-between p-2 items-end h-full">

            <div>
                <h2 class="text-gray-100 text-2xl md:text-5xl font-extrabold">
                    KOSTIC
                </h2>

                <p class="text-orange-400 text-base md:text-2xl">
                    Make a purchase online
                </p>
            </div>

            <img
                src="{{ asset('logo7.png') }}"
                alt=""
                class="h-12 md:h-20 opacity-90"
            >

        </div>

    </div>

</div>

            <!-- this is for the table container -->
            

           


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
