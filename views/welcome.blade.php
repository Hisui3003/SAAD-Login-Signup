<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom styles */
        body {
            background: linear-gradient(to bottom right, #ff4444, #8b0000);
        }
    </style>
</head>
<body class="flex justify-center items-center h-screen">
    <div class="w-full h-full bg-no-repeat bg-cover bg-left rounded-lg p-8 shadow-2xl" style="background-image: url('https://images.pexels.com/photos/12955837/pexels-photo-12955837.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); width: 95%; max-width: 1200px; height: 90%; max-height: 800px;">
        <div class="ml-28 rounded-lg p-8 flex justify-left items-center h-full" style="height: 100%;">

            <div class="bg-transparent rounded-lg p-8 shadow-2xl " style="width: 40%;">
                <h1 class="text-4xl font-bold text-center mb-8 text-red-600">Login</h1>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div class="ml-5 mt-3 justify-between items-center">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" id="username" class="mt-1 w-64 text-xl bg-transparent border-gray-300 rounded-md shadow-xl focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                    </div>
                    <hr class="m-5">
                    <div class="ml-5 mt-3 justify-between items-center">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" class="mt-1 w-64 bg-transparent border-gray-300 rounded-md shadow-xl focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="w-full py-2 px-4 bg-red-600 hover:bg-red-700 text-white rounded-md focus:outline-none focus:ring focus:ring-red-500 focus:ring-opacity-50">Login</button>
                    </div>
                </form>
                <hr class="mb-10">
                <div class="mt-4 flex items-center justify-center">
                    <p class="text-gray-700">Don't have an account?</p>
                    <a href="#" class="text-red-600 ml-1 hover:text-red-700">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
