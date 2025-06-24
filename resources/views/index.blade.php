@extends('layouts.app')
@section('content')
    <div class="bg-gray-900 min-h-screen">
        <!-- Hero Section -->
        <div class="relative h-[600px]">
            <!-- Main Banner/Slider -->
            <div class="absolute inset-0">
                <img src="path-to-your-banner-image.jpg" 
                     class="w-full h-full object-cover opacity-50" 
                     alt="Latest Movie">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
            </div>

            <!-- Content -->
            <div class="relative max-w-7xl mx-auto px-4 h-full flex items-center">
                <div class="text-white max-w-2xl">
                    <h1 class="text-5xl font-bold mb-4">Latest Movies</h1>
                    <p class="text-xl mb-8">Experience the magic of cinema in the most comfortable environment</p>
                    <button class="bg-red-600 hover:bg-red-700 px-8 py-3 rounded-lg 
                                 text-white font-semibold transition duration-300">
                        Book Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Now Showing Movies -->
        <div class="max-w-7xl mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold text-white mb-8">Now Showing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Movie Card -->
                <div class="bg-gray-800 rounded-lg overflow-hidden group">
                    <div class="relative">
                        <img src="path-to-movie-poster.jpg" 
                             class="w-full h-[400px] object-cover transition duration-300 
                                    group-hover:scale-105" 
                             alt="Movie Title">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent 
                                    opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="absolute bottom-0 p-4">
                                <button class="bg-red-600 text-white px-4 py-2 rounded">
                                    Book Tickets
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-white mb-2">Movie Title</h3>
                        <div class="flex justify-between text-gray-400 text-sm">
                            <span>Duration: 2h 30m</span>
                            <span>Rating: PG-13</span>
                        </div>
                    </div>
                </div>
                <!-- Repeat Movie Cards -->
            </div>
        </div>
    </div>
@endsection