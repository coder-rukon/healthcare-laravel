<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <ul class="list-group mt-4 ">
                                <li class="list-group-item">
                                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                        {{ __('Dashboard') }}
                                    </x-nav-link>
                                </li>
                                <li class="list-group-item">
                                    <x-nav-link :href="route('admin.home')" :active="request()->routeIs('admin.home')">
                                        {{ __('Home Sections') }}
                                    </x-nav-link>
                                </li>
                                <li class="list-group-item">
                                    <x-nav-link :href="route('settings')" :active="request()->routeIs('settings')">
                                        {{ __('Header / Footer Settings') }}
                                    </x-nav-link>
                                </li>
                                <li class="list-group-item">
                                    <h5>{{ __('Menu') }}</h5>
                                    <x-nav-link :href="route('admin.menu',['location' => 'Header Top Menu'])">
                                        {{ __('Header Top Menu') }}
                                    </x-nav-link>
                                    <br/><x-nav-link :href="route('admin.menu',['location' => 'Main Menu'])">
                                        {{ __('Main menu') }}
                                    </x-nav-link> 
                                    <br/><x-nav-link :href="route('admin.menu',['location' => 'Main Menu right'])">
                                        {{ __('Main menu right') }}
                                    </x-nav-link> 
                                   
                                    <br/><x-nav-link :href="route('admin.menu',['location' => 'Footer Quick Links'])">
                                        {{ __('Footer Quick Links') }}
                                    </x-nav-link>
                                    <br/><x-nav-link :href="route('admin.menu',['location' => 'Footer Services'])">
                                        {{ __('Footer Services') }}
                                    </x-nav-link>
                                    
                                </li> 
                                
                              </ul>
                            
                            
                        </div>
                        <div class="col-10">
                            <div class="mt-4 bg-white shadow-sm sm:rounded-lg p-4">
                                @yield('content')
                                {{ isset($slot) ? $slot : '' }}

                            </div>
                            
                        </div>
                    </div>
                
                </div>
            </main>
        </div>
    </body>
</html>
