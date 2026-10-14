
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        @fonts

    <title>{{ config('app.name', 'KOSTIC') }} | Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
</head>

<body
    style="background-image: linear-gradient(rgba(233,233,233,0.85), rgba(255,255,255,0.94)), url('{{ asset('shop8.jpg') }}')"
    class="min-h-screen bg-gray-200 bg-cover bg-center flex flex-col"
>
    <!-- Header -->
    <header class="w-full h-14 shrink-0 bg-[#f77f00] shadow-md">
        <div class="h-full flex items-center justify-center gap-3 px-4">
            <img src="{{ asset('logo15.png') }}" alt="KOSTIC logo" class="h-8 w-auto">

            <h1 class="text-white text-2xl font-bold tracking-wide">
                KOSTIC
            </h1>
        </div>
    </header>

    <!-- Login Section -->
    <main class="flex-1 flex items-center justify-center p-3 sm:p-5">

        <div
            id="login-container"
            class="w-full max-w-md bg-[#f77f00] p-4 sm:p-6 rounded-2xl shadow-xl"
        >
            <!-- Logo and Heading -->
            <div class="flex flex-col items-center mb-4">
                <img
                    src="{{ asset('logo15.png') }}"
                    alt=""
                    class="h-10 w-auto mb-2"
                >

                <h2 class="text-white text-xl font-bold text-center">
                    Welcome Back
                </h2>

                <p class="text-white/90 text-sm mt-1 text-center">
                    Enter your login details to continue
                </p>
            </div>

            <!-- General Login Error -->
            @error('errormessage')
                <div class="mb-3 rounded-lg bg-red-100 border border-red-300 p-3 text-red-800 text-sm">
                    <i class="fas fa-circle-exclamation mr-2"></i>
                    {{ $message }}
                </div>
            @enderror

            <!-- Login Form -->
            <form
                action="/users/login"
                method="POST"
                class="flex flex-col gap-3"
            >
                @csrf

                <!-- Username -->
                <div class="flex flex-col gap-1">
                    <label for="username" class="text-white font-semibold text-sm">
                        Username
                    </label>

                    <div class="relative">
                        <i class="fas fa-user absolute left-3 top-1/2 -translate-y-1/2 text-gray-500"></i>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            value="{{ old('username') }}"
                            placeholder="Enter your username"
                            autocomplete="username"
                            required
                            class="w-full rounded-lg bg-white py-2 pl-10 pr-3 text-gray-800 outline-none border-2 border-transparent focus:border-black focus:ring-2 focus:ring-black/20"
                        >
                    </div>

                    @error('username')
                        <span class="text-white text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="flex flex-col gap-1">
                    <label for="password" class="text-white font-semibold text-sm">
                        Password
                    </label>

                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-500"></i>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                            class="w-full rounded-lg bg-white py-2 pl-10 pr-3 text-gray-800 outline-none border-2 border-transparent focus:border-black focus:ring-2 focus:ring-black/20"
                        >
                    </div>

                    @error('password')
                        <span class="text-white text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Forgot Password -->
                <div class="flex justify-start mt-2">
                    <a
                        href="/register"
                        class="text-black text-sm  hover:text-white transition duration-300"
                    >
                        Ready to shop? Create an account
                    </a>
                </div>

                <!-- Login Button -->
                <button
                    type="submit"
                    id="login-btn"
                    class="w-full h-10 rounded-lg bg-black text-white font-bold shadow-md cursor-pointer hover:scale-[1.02] active:scale-[0.98] transition duration-300"
                >
                    Login
                </button>

            </form>
        </div>
    </main>


</body>
</html>
