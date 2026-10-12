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
        <div>
            <i class="fa-solid fa-arrow-left-long text-2xl cursor-pointer text-white transition-all duration-300  hover:text-gray-900"></i>
        </div>

            <div class="flex flex-row gap-3 items-center justify-center p-3 ">
                <img src="logo15.png" alt="" class="h-9 ">
                <h3 class="text-white lg:text-xl sm:text-sm font-bold">User management</h3>
            </div>

        <div>
            <a href="#" class="text-white font-bold">Welcome {{ $currentUser_name ?? 'User' }}</a>
        </div>
    
    </header>
    

   <main class="flex flex-col lg:flex-row  h-[calc(100vh-4rem)] ">
        <!-- shadow-[inset_0_2px_8px_rgba(0,0,0,0.2)] -->
        <div class="w-full md:w-full lg:w-8/12 xl:w-9/12 text-sm overflow-auto rounded-tr-3xl  rounded-br-3xl shadow-[inset_0_2px_8px_rgba(0,0,0,0.2)] bg-gray-200 p-3 ">
            
            <div class="flex flex-row gap-3 mt-2 items-center justify-between p-3 bg-[#f77f00] mb-3 text-white rounded-lg shadow-lg">
                <div class="flex flex-row gap-2 items-center justify-start">
                    <img src="images/logo15.png" alt="" class="h-6 ">
                    <h3 class="font-bold md:text-md sm:text-md lg:lg xl:text-lg text-md">Employee table</h3>
                </div>

                <div>
                    <a href="/online_purchase" class="bg-[#2e2e2e] text-white px-3  h-9 rounded-lg shadow-md cursor-pointer flex flex-row justify-center gap-2 items-center transition duration-300 hover:scale-105  text-xs sm:text-sm md:text-md lg:text-md xl:text-md">Audit logging system <i class="fa-solid fa-clock-rotate-left text-md text-white  "></i></a>

                </div>
                
            </div>


            <div class=" px-3 py-3 border border-[#f77f00] rounded-lg shadow-md bg-white">

            
                <div class=" flex flex-row items-center justify-start w-full gap-1 ">


                    <h3 class="font-bold ">Search criteria</h3>
                    
                    <i class="fa-solid fa-magnifying-glass-plus text-xl text-gray-900 "></i>

                </div>

                <div class="bg-[#f77f00] w-full h-[1px] mt-1"></div>

                <div class="flex flex-row justify-start gap-6 mt-2 py-1  flex-wrap  mb-3">
                    <div class="flex flex-row justify-start gap-6 ">
                        <div>
                            <label for="">Search for</label>
                            <input type="text" name="" id="" class="p-1 border border-orange-400 bg-gray-100 rounded-lg w-5/6">
                        </div>


                        <div>
                            <label for="">Search by</label>
                            <select name="" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100 w-[99%]">
                                <option value="">Select...</option>
                                <option value="">ID</option>
                                <option value="">First Name</option>
                                <option value="">Last Name</option>
                                <option value="">Gender</option>
                                <option value="">DOB</option>
                                <option value="">Address</option>
                                <option value="">Email</option>
                                <option value="">Phone Number</option>
                                <option value="">Role</option>
                                <option value="">Username</option>
                                <option value="">Password</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="flex flex-row gap-3   items-end justify-center">
                        <a href="#" class="bg-[#f77f00] text-white px-3  h-9 rounded-lg shadow-md cursor-pointer flex flex-row justify-center gap-2 items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md">Search <i class="fa-solid fa-magnifying-glass text-md text-white  "></i></a>
                        <a href="#" class="bg-[#f77f00] text-white px-3 h-9 rounded-lg shadow-md cursor-pointer flex flex-row justify-center gap-2 items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md" >Reset <i class="fa-solid fa-rotate-left text-md text-white  "></i></a>
                    </div>
                    
                </div>
                


            </div>




            <div class="px-3 shadow-md rounded-lg border border-[#f77f00] mt-4 bg-white">
                                    
                <div class="p-3 flex flex-row items-center justify-between w-full gap-2  ">
                    <!-- <div class="h-[2px] w-[30px] bg-[#f77f00]"></div> -->
                    
                    <div class="flex flex-row gap-1 justify-center items-center">
                        <h3 class="font-bold">Employees table</h3>
                        <i class="fa-solid fa-table-list text-xl text-gray-900 "></i>
                    </div>

                    <div class="flex flex-row gap-3 justify-center items-center">
                        <a href="#" class="bg-[#f77f00] text-white h-8 px-2 rounded-lg shadow-md cursor-pointer flex flex-row justify-center items-center gap-2 transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md">View in fullscreen  <i class="fa-solid fa-expand text-md text-white  "></i></a>
                    
                        <a href="#" class="bg-[#f77f00] text-white h-8 px-2 rounded-lg shadow-md cursor-pointer flex flex-row justify-center items-center gap-2 transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-md lg:text-md xl:text-md">View in tiles mode  <i class="fa-solid fa-expand text-md text-white  "></i></a>

                    </div>
                    
                </div>
                <div class="overflow-x-auto mt-2">
                    <table class="w-full p-3 border border-[#f77f00] text-xs  rounded-lg  overflow-auto   table-auto ">
                        <thead class=" bg-[#f77f00] text-white ">
                            <tr class="border   ">
                                <th class=" w-auto p-1 text-left   ">ID</th>
                                <th class=" w-auto p-1 text-left ">First Name</th>
                                <th class=" w-auto p-1 text-left ">Last Name</th>
                                <th class=" w-auto p-1 text-left ">Gender</th>
                                <th class=" w-auto p-1 text-left ">DOB</th>
                                <th class=" w-auto p-1 text-left ">Address</th>
                                <th class=" w-auto p-1 text-left">Email</th>
                                <th class=" w-auto p-1 text-left">Phone Number</th>
                                <th class=" w-auto p-1 text-left">Role</th>
                                <th class=" w-auto p-1 text-left">Username</th>
                                <th class=" w-auto p-1 text-left">Password</th>
                                <th class=" w-auto p-1 text-left">Actions</th>



                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($users as $user)
                                <tr class="border border-[#d0d0d0] transition duration-300 hover:bg-orange-200 ">
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->id }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->first_name }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->last_name }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->gender }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->year_of_birth }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->address }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->email_address }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->phone_number }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->role }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->username }}</td>
                                    <td class="border border-[#d0d0d0] p-1">{{ $user->password }}</td>
                                    <td class="border border-[#d0d0d0] p-1"><a href="/users/edit/{{ $user->id }}" class="bg-[#f73100] text-white w-20 h-7 rounded-lg shadow-md cursor-pointer flex flex-row justify-center items-center transition duration-300 hover:scale-105">Edit</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>

        <div class=" w-full md:w-full lg:w-4/12 xl:w-3/12  p-4 text-sm overflow-auto ">
            <div class="flex flex-row gap-3 items-center justify-center p-3 bg-[#f77f00] mb-3 text-white rounded-lg shadow-lg">
                <img src="images/logo15.png" alt="" class="h-7 ">
                <h3 class="font-bold">Employee details</h3>
            </div>


        <div class="p-4 border border-orange-400 rounded-lg shadow-lg bg-white">

            <form action="/users/insert" method="POST" class="flex flex-col gap-4  " >
                @csrf 
                <div class="flex flex-col  items-center gap-3">
                    <!-- <img src="images/logo1.png" alt="" class="h-40 "> -->
                     <i class="fa-solid fa-user text-9xl text-gray-600 border border-gray-300 p-5 rounded-lg shadow-md"></i>
                    <input type="file" name="" id="" class=" flex justify-center items-center self-center w-7/12 ">
                </div>
                <div class="flex flex-col ">
                    <label for="">ID</label>
                    <input type="text" name="id" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->id ?? '' }}" >
                </div>

                <div class="flex flex-col ">
                    <label for="">First Name</label>
                    <input type="text" name="first_name" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->first_name ?? '' }}">
                </div>

                <div class="flex flex-col ">
                    <label for="">Last Name</label>
                    <input type="text" name="last_name" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->last_name ?? '' }}">
                </div>

                <div class="flex flex-col ">
                    <label for="">Gender</label>
                    <select name="gender" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->gender ?? ''}}">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="flex flex-col ">
                    <label for="">Year of Birth</label>
                    <input type="text" name="year_of_birth" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->year_of_birth  ?? ''}}">
                </div>

                <div class="flex flex-col ">
                    <label for="">Address</label>
                    <input type="text" name="address" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->address ?? ''}}">
                </div>

                <div class="flex flex-col ">
                    <label for="">Email Address</label>
                    <input type="text" name="email_address" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->email_address ?? ''}}">
                </div>

                <div class="flex flex-col ">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone_number" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->phone_number ?? ''}}">
                </div>

                <div class="flex flex-col ">
                    <label for="">Role</label>
                    <select name="role" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->role ?? ''}}">
                        <option value="customer">Customer</option>
                        <option value="manager">Manager</option>

                    </select>
                </div>

                <div class="flex flex-col ">
                    <label for="">Username</label>
                    <input type="text" name="username" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->username ?? '' }}">
                </div>

                <div class="flex flex-col ">
                    <label for="">Password</label>
                    <input type="text" name="password" id="" class="p-1 border border-orange-400 rounded-lg bg-gray-100" value="{{ $editUser->password ?? '' }}">
                </div>

                <div class="flex flex-row gap-3">

                        <button type="submit" formaction="/users/insert" formmethod="POST" class="bg-[#f77f00] text-white w-24 h-9 rounded-lg shadow-md cursor-pointer flex flex-row justify-center items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-sm lg:text-md xl:text-md">Insert</button>

                        <button type="submit" formaction="/users/update/{{ $editUser->id ?? '' }}" formmethod="POST" class="bg-[#f77f00] text-white w-24 h-9 rounded-lg shadow-md cursor-pointer flex flex-row justify-center items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-sm lg:text-md xl:text-md">Update</button>

                        <button type="submit" formaction="/users/delete/{{ $editUser->id ?? '' }}" formmethod="POST" class="bg-[#f77f00] text-white w-24 h-9 rounded-lg shadow-md cursor-pointer flex flex-row justify-center items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-sm lg:text-md xl:text-md">Delete</button>

                        <button type="submit" formaction="/users" formmethod="GET" class="bg-[#f77f00] text-white w-24 h-9 rounded-lg shadow-md cursor-pointer flex flex-row justify-center items-center transition duration-300 hover:scale-105 text-xs sm:text-sm md:text-sm lg:text-md xl:text-md">Reset</button>

                </div>

                
            </form>

        </div>


        </div>
   </main>
</body>
        
</html>
