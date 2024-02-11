<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-emerald-200 to-emerald-600">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <div class="relative">
                <img src="https://images.pexels.com/photos/13354728/pexels-photo-13354728.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img" class="w-[400px] h-full hidden rounded-l-2xl md:block object-cove" />
                <div>

                </div>
                <div class="absolute hidden top-28 right-10 left-10 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block" >
                    <span class="text-red-50 text-smr">
                        "Start Your Journey with Us. Sign Up Today to Find Your Ideal Home!"
                    </span>
                </div>
            </div>

            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-2 text-4xl text-center text-red-400 font-bold">Sign Up</span>
                <span class="font-light text-center text-gray-400 mb-2">
                    Sign Up to
                    <span class="font-semibold text-lg text-center text-red-500 mb-2">
                        House Rental System
                    </span>
                </span>
                <div class="py-4">
                    <span class="mb-2 text-md">Username</span>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" name="username" id="username" />
                </div>
                <div class="py-4">
                    <span class="mb-2 text-md">Password</span>
                    <input type="password" name="pass" id="pass" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                </div>
                <div class="py-4">
                    <span class="mb-2 text-md">Password</span>
                    <input type="password" name="pass" id="pass" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                </div>
                <button class="w-full bg-red-800 text-white p-2 rounded-lg mt-5 mb-6 hover:bg-white hover:text-orange-600 hover:border hover:border-red-400">
                    Sign Up
                </button>
                <div class="text-center text-gray-400">
                    Already got an account?
                    <span class="font-bold text-red-500 hover:underline hover:cursor-pointer">Login</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Custom styles */
        body {
            background: linear-gradient(to bottom right, #ff4444, #8b0000);
        }

        /* Adjusted styles */
        .small-container {
            margin-right: 2rem; /* Adjust the margin as needed */
        }
    </style>
</head>
<body class="flex justify-center items-center h-screen">
    <div class="w-full h-full bg-no-repeat bg-cover bg-left rounded-lg p-8 shadow-2xl" style="background-image: url('https://images.pexels.com/photos/5313170/pexels-photo-5313170.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); width: 95%; max-width: 1200px; height: 90%; max-height: 800px;">
        <div class="flex justify-left items-center h-full">
            <div class="ml-32 small-container bg-gray-100 rounded-lg p-6 shadow-lg" style="width: 35%; height; 90%">
                <h1 class="text-2xl font-bold text-center mb-8 text-gray-800">Sign Up</h1>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div class="ml-10 mt-3 justify-between items-center">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" id="username" class="mt-1 w-64 border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                    </div>
                    <hr class="m-5">
                    <div class="ml-10 mt-3 justify-between items-center">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" class="mt-1 w-64 border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                    </div>
                    <div class="ml-10 mt-3 justify-between items-center">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" class="mt-1 w-64 border-gray-300 rounded-md shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="w-full py-2 px-4 bg-red-600 hover:bg-red-700 text-white rounded-md focus:outline-none focus:ring focus:ring-red-500 focus:ring-opacity-50">Sign Up</button>
                    </div>
                </form>
                <div class="mt-4 flex items-center justify-center">
                    <p class="text-gray-700">Already got an account?</p>
                    <a href="#" class="text-red-600 ml-1 hover:text-red-700">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}
