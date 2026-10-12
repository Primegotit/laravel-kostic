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
<body  class="bg-gray-200">

   <header class="w-full h-16 bg-[#f77f00]">
        <div class="flex flex-row gap-3 items-center justify-center p-3 ">
            <img src="logo15.png" alt="" class="h-9 ">
            <h3 class="text-white text-2xl font-bold">KOSTIC</h3>
        </div>
   </header>


   <main class="flex flex-col justify-center items-center h-[calc(100vh-4rem)]">
        <div id="popup-container" class="w-full h-full bg-[#f77f00]/30 backdrop-blur-sm hidden"></div>


        <div class="w-11/12 md:w-7/12 lg:w-5/12  h-6/7 bg-[#f77f00] p-6 rounded-lg flex flex-col items-center gap-2 shadow-lg " id="login-container">
            <h3 class="text-white  font-bold  ">Enter your login details</h3>
            @error('errormessage')
                <p class="text-black text-sm bg-red-700 p-2 ">{{ $message }}</p>
            @enderror
            <form action="/users/login" method="POST" class="w-full flex flex-col gap-6 h-full  p-2 justify-start ">
                @csrf
                <div class="flex flex-col justfiy-center items-center ">
                    <img src="logo15.png" alt="" class="h-10 ">
                </div>

                <div class="flex flex-col gap-6 self-center w-11/12">
                    <div class="flex flex-col gap-1">
                        <label for="" class="text-white font-bold">Username</label>
                        <input type="text" placeholder="Enter your username" class="p-1 rounded-lg bg-white" name="username" >
                        @error('username')
                            <span class="text-black text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="" class="text-white font-bold">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" class="p-1 rounded-lg bg-white" >
                        @error('password')
                            <span class="text-black text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <a href="/register" class="text-black text-md underline cursor-pointer transition duration-300 hover:text-gray-100   ">Forgot password?</a>
                    </div>
                
                </div>
                
                <button type="submit" id="login-btn" class="w-11/12 mt-2 flex flex-col self-center items-center justify-center shadow-lg hover:scale-105 p-1 rounded-lg h-10 text-md font-bold bg-black text-white transition duration-300 " >Login</button>
            </form>
        </div>

        <!-- <div class="lg:w-1/4  h-72 px-3 py-3 bg-white/65 fixed  border border-[#f77f00] rounded-lg shadow-lg shadow-[#3a3939] hidden " id="successful-login-popup">

            <div class="flex flex-row justify-center items-center">
                <img src="images/logo1.png" alt="" class="h-24  fixed translate-y-[-35px]  ">
            </div>
            <h1 class="text-3xl font-bold text-center mt-6">Welcome Promise!</h1>
                <i class="fas fa-circle-check text-[50px] text-center text-[#f77f00] flex flex-row justify-center w-full pt-1"></i>

            <p class="text-center text-gray-600 flex flex-row justify-center items-center w-4/5 m-auto py-6">Hie login was successful, welcome to our application </p>

            <a href="user_management.html" class=" w-4/5 self-center m-auto flex flex-col  items-center justify-center shadow-lg hover:scale-105 p-1 rounded-lg h-10 text-md font-bold bg-black text-white transition duration-300   ">Ok</a>
        </div>


        <div class="lg:w-1/4  h-72 px-3 py-3 bg-white/65 fixed  border border-[#f77f00] rounded-lg shadow-lg shadow-[#3a3939] hidden " id="failed-login-popup">

            <div class="flex flex-row justify-center items-center">
                <img src="images/logo1.png" alt="" class="h-24  fixed translate-y-[-35px]  ">
            </div>
            <h1 class="text-3xl font-bold text-center mt-6">Login failed!</h1>
                <i class="fas fa-circle-xmark text-[50px] text-center text-[#f70000] flex flex-row justify-center w-full pt-1"></i>

            <p class="text-center text-gray-600 flex flex-row justify-center items-center w-4/5 m-auto py-6">Sorry Login failed, please try again or exit the application.</p>

            <a href="index.html" class=" w-4/5 self-center m-auto flex flex-col  items-center justify-center shadow-lg hover:scale-105 p-1 rounded-lg h-10 text-md font-bold bg-black text-white transition duration-300   ">Try again</a>
        </div> -->
   </main>

   {{-- <script>
    var popup = document.getElementById("popup")
    var popupContainer;
    var loginContainer;
    var popup;
    var loginBtn;

    loginBtn = document.getElementById("login-btn");
    loginBtn.addEventListener("click", showSuccessPopup)

    function showSuccessPopup() {
        popupContainer = document.getElementById("popup-container");
        loginContainer = document.getElementById("login-container");
        popup = document.getElementById("successful-login-popup");

        popupContainer.classList.add("visible")
        popupContainer.classList.remove("hidden");

        loginContainer.classList.add("hidden");

        popup.classList.add("visible");
        popup.classList.remove("hidden");
    }

    function showFailPopup() {
        popupContainer = document.getElementById("popup-container");
        loginContainer = document.getElementById("login-container");
        popup = document.getElementById("failed-login-popup");

        popupContainer.classList.add("visible")
        popupContainer.classList.remove("hidden");

        loginContainer.classList.add("hidden");

        popup.classList.add("visible");
        popup.classList.remove("hidden");
    }

   </script> --}}
</body>
</html>