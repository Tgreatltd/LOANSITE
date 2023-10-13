<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto mt-8">
        <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
               <div class="flex justify-between h-16">
                  <div class="flex ">
                   <div class="shrink-0 flex items-center">
                       {{-- <a >
                           <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                       </a> --}}
                       <a href="">TEEGREAT'S LOAN</a>
                   </div>
                   <div class="hidden space-x-12 sm:-my-px sm:ml-20 sm:flex">
                       <x-nav-link>
                           {{ __('Home') }}
                       </x-nav-link>
       
                       <x-nav-link>
                           {{ __('Services') }}
                       </x-nav-link>
       
                       <x-nav-link>
                           {{ __('How We Work') }}
                       </x-nav-link>
       
                       <x-nav-link>
                           {{ __('About Us') }}
                       </x-nav-link> 
                       <div style="width: 200px"></div>
                       <div class="flex justify-between h-16 ml-20">
                           <x-nav-link>
                               {{ __('Contact Us') }}
                           </x-nav-link>
                       </div>
                   </div>
                  </div>
       
                   {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
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
                     </div> --}}
               </div>
           </div>   
               
          </nav>
    </div>
</body>
</html>