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
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-bl from-red-50 to-red-500">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-2 text-4xl text-center text-red-400 font-bold">Login</span>
                <span class="font-light text-center text-gray-400 mb-2">
                    Welcome to
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
                <button class="w-full bg-red-800 text-white p-2 rounded-lg mt-5 mb-6 hover:bg-white hover:text-orange-600 hover:border hover:border-red-400">Login</button>
                <div class="text-center text-gray-400">
                    Don't have and account?
                    <span class="font-bold text-red-500 hover:underline hover:cursor-pointer">Sign up for free</span>
                </div>
            </div>

            <div class="relative">
                <img src="https://images.pexels.com/photos/13094356/pexels-photo-13094356.jpeg?auto=compress&cs=tinysrgb&w=600" alt="img" class="w-[400px] h-full hidden rounded-r-2xl md:block object-cove" />
                <div>

                </div>
                <div class="absolute hidden top-28 right-10 left-10 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block" >
                    <span class="text-red-50 text-smr">
                        "Find Your Perfect Rental, Where Comfort and Convenience Unite."
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
