<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-semibold">Home</a>
    
            <ul class="flex space-x-4">
                <li><a href="/services" class="text-white hover:text-gray-300">Services</a></li>
                <li><a href="/about-us" class="text-white hover:text-gray-300">About Us</a></li>
                <li><a href="/login" class="text-white hover:text-gray-300">Login/Sign Up</a></li>
            </ul>
        </div>
        
        <div class="hidden sm:flex sm:items-center sm:ml-6">
          <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>OLUWATOBI</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <div>Name</div>
                </x-slot>
          </x-dropdown>
        </div>
    </nav>
</body>
</html>