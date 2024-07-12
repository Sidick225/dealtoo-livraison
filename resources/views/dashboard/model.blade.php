
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}" type="image/x-icon">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="font-sans antialiased">

        <!-- tailwind.config.js -->
{{-- module.exports = {
    plugins: [require('@tailwindcss/forms'),]
}; --}}



        <!-- component -->
        <div>
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

            <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

                <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-500 lg:translate-x-0 lg:static lg:inset-0">
                    <div class="flex items-center justify-center mt-8">
                        <div class="flex items-center">
                            {{-- <svg class="w-12 h-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>
                            </svg>

                            <span class="mx-2 text-2xl font-semibold text-white">Dashboard</span> --}}
                            <a href="/"><img class="mainLogo" src="{{asset('assets/thumb-816x460-logo-6659f6148571a.png')}}" alt="logo Deli" style=""></a>
                        </div>
                    </div>

                    <nav class="mt-10">
                        <a class="flex items-center px-6 py-2 mt-4 @if(Route::currentRouteName() == 'dashboard')) text-gray-100 bg-gray-700 bg-opacity-25 @else text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 @endif"
                        href="{{route('dashboard')}}">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>

                            <span class="mx-3">Tableau de bord</span>
                        </a>

                        @if (Auth::user()->role != 3)
                            <a class="flex items-center px-6 py-2 mt-4 @if(Route::currentRouteName() == 'demande_certification')) text-gray-100 bg-gray-700 bg-opacity-25 @else text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 @endif"
                                href="{{route('demande_certification')}}">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>

                                <span class="mx-3">Demandes de certification</span>
                                @isset($livreurs)
                                    @php
                                        $nbrDemande = 0;
                                    @endphp
                                    @foreach ($livreurs as $livreur)
                                        @if ($livreur->certified == "en attente")
                                            @php
                                                $nbrDemande+=1
                                            @endphp
                                        @endif
                                    @endforeach
                                    @if ($nbrDemande > 0)
                                    <span class="inline-flex px-2 text-xs font-semibold leading-5 text-gray-800 bg-gray-100 rounded-full">
                                        {{$nbrDemande}}
                                    </span>
                                    @endif
                                @endisset
                            </a>
                            <a class="flex items-center px-6 py-2 mt-4 @if(Route::currentRouteName() == 'registerLivreur')) text-gray-100 bg-gray-700 bg-opacity-25 @else text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 @endif"
                                href="{{route('registerLivreur')}}">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="mx-3">Ajouter une société de livraison</span>
                            </a>
                            <a class="flex items-center px-6 py-2 mt-4 @if(Route::currentRouteName() == 'publicite')) text-gray-100 bg-gray-700 bg-opacity-25 @else text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 @endif"
                                href="{{route('publicite')}}">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"stroke="currentColor">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 9H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6m0-6v6m0-6 5.419-3.87A1 1 0 0 1 18 5.942v12.114a1 1 0 0 1-1.581.814L11 15m7 0a3 3 0 0 0 0-6M6 15h3v5H6v-5Z"/>
                                  </svg>
                                <span class="mx-3">Pub de société</span>
                            </a>
                            {{-- @else
                            <a class="flex items-center px-6 py-2 mt-4 @if(Route::currentRouteName() == 'avis.show')) text-gray-100 bg-gray-700 bg-opacity-25 @else text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 @endif"
                                href="{{route('avis.show', Auth::user()->id)}}">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 10.5h.01m-4.01 0h.01M8 10.5h.01M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.6a1 1 0 0 0-.69.275l-2.866 2.723A.5.5 0 0 1 8 18.635V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
                                </svg>
                                <span class="mx-3">Avis sur ma société</span>
                            </a> --}}
                        @endif

                        {{-- <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            href="#">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>

                            <span class="mx-3">Forms</span>
                        </a> --}}
                    </nav>
                </div>
                <div class="flex flex-col flex-1 overflow-hidden">
                    <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-yellow-400">
                        <div class="flex items-center">
                            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            @yield('search')
                        </div>

                        <div class="flex items-center">
                            {{-- <div x-data="{ notificationOpen: false }" class="relative">
                                <button @click="notificationOpen = ! notificationOpen"
                                    class="flex mx-4 text-gray-600 focus:outline-none">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </button>

                                <div x-show="notificationOpen" @click="notificationOpen = false"
                                    class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>

                                <div x-show="notificationOpen"
                                    class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-80"
                                    style="width: 20rem; display: none;">
                                    <a href="#"
                                        class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-yellow-400">

                                        <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                            alt="photo de profil utilisateur">
                                        <p class="mx-2 text-sm">
                                            <span class="font-bold" href="#">Sara Salah</span> replied on the <span
                                                class="font-bold text-yellow-400" href="#">Upload Image</span> artical . 2m
                                        </p>
                                    </a>
                                    <a href="#"
                                        class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-yellow-400">
                                        <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                            src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                                            alt="avatar">
                                        <p class="mx-2 text-sm">
                                            <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                                        </p>
                                    </a>
                                    <a href="#"
                                        class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-yellow-400">
                                        <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                            src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                            alt="avatar">
                                        <p class="mx-2 text-sm">
                                            <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span
                                                class="font-bold text-yellow-400" href="#">Test with TDD</span> artical . 1h
                                        </p>
                                    </a>
                                    <a href="#"
                                        class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-yellow-400">
                                        <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                            src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=398&amp;q=80"
                                            alt="avatar">
                                        <p class="mx-2 text-sm">
                                            <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                                        </p>
                                    </a>
                                </div>
                            </div> --}}

                            <div x-data="{ dropdownOpen: false }" class="relative flex">
                                <div @click="dropdownOpen = ! dropdownOpen" class="flex">
                                    <span class="m-auto">{{Auth::user()->name}}</span>
                                    <button
                                        class="relative block ms-2 w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                        <img class="object-cover w-full h-full"
                                            src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                                            alt="Your avatar">

                                    </button>
                                    <svg class="w-6 h-6 mt-1 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                    </svg>
                                </div>

                                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full"
                                    style="display: none;"></div>

                                <div x-show="dropdownOpen"
                                    class="absolute right-0 z-10 w-48 mt-2 pt-3 overflow-hidden bg-white rounded-md shadow-xl"
                                    style="display: none;">
                                    <a href="{{route('profile.edit')}}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-400 hover:text-white">Profile</a>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button class="block w-[100%] text-left px-4 py-2 text-sm text-gray-700 hover:bg-yellow-400 hover:text-white">
                                            Deconnexion
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </header>
                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                        <div class="container px-6 py-8 mx-auto">
                            @yield('content')
                        </div>
                    </main>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        @include('sweetalert::alert')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Opération réussie!',
                timer: 1500,  // Durée en millisecondes après laquelle la notification se ferme automatiquement
                showConfirmButton: false,  // Ne pas afficher le bouton "OK"
                timerProgressBar: true  // Afficher une barre de progression du timer
            });
        </script>
    </body>
</html>
