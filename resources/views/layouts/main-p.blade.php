<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title> Movie App </title>
</head>
<body class=" bg-gray-900 font-sans text-white">

    <nav class=" border-b border-gray-800">
        <div class="container flex  flex-col md:flex-row mx-auto items-center justify-between  px-4 py-6">

            <ul class=" flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        ShakMovie
                    </a>
                </li>

                <li class=" md:ml-16"> <a href="#" class=" hover:text-gray-300">Movies </a></li>
                <li class=" md:ml-6"> <a href="#" class=" hover:text-gray-300"> Actors </a></li>
                <li class=" md:ml-6"> <a href="#" class=" hover:text-gray-300"> TV Shows </a></li>

            </ul>

            <div class=" flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class=" rounded-full bg-gray-800 w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline text-sm" placeholder="Search Movies">

                </div>

                <div class=" md:ml-4 mt-3 md:mt-0">

                    <a href="#">
                    <img src="/images/avata-pic.jpg" alt="avatar" class=" rounded-full w-8 h-8">
                    </a>

                </div>

            </div>
        </div>
    </nav>

    @yield('content')

</body>
</html>
