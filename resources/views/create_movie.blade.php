@extends('layouts.core')
@section('content')
<div class="bg-gray-900 min-h-screen py-12">
    <div class="max-w-3xl mx-auto px-4">
        <!-- Form Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white">Add New Movie</h1>
            <p class="text-gray-400 mt-2">Enter the movie details below</p>
        </div>

        <!-- Add Movie Form -->
        <form class="bg-gray-800 rounded-lg p-6 space-y-6" action="{{Route('movie.store')}}" method="POST">
          @csrf
            <!-- Movie Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-300 mb-2">
                    Movie Title *
                </label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       class="w-full bg-gray-700 text-white rounded-lg px-4 py-2.5 
                              focus:ring-2 focus:ring-blue-500 focus:outline-none @error('title') border-2 border-red-600 @enderror "
                       placeholder="Enter movie title">

              @error('title')
                <div class="invalid-feedback text-red-600">
                {{ $message }}
                </div>
              @enderror      
            </div>

            <!-- Movie Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-300 mb-2">
                    Description *
                </label>
                <textarea id="description" 
                          name="description" 
                          rows="4" 
                          class="w-full bg-gray-700 text-white rounded-lg px-4 py-2.5 
                                 focus:ring-2 focus:ring-blue-500 focus:outline-none @error('description') border-2 border-red-600 @enderror "
                          placeholder="Enter movie description"></textarea>
              @error('description')
                <div class="invalid-feedback text-red-600">
                {{ $message }}
                </div>
              @enderror  
            </div>

            <!-- Two Columns Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Duration -->
                <div>
                    <label for="duration" class="block text-sm font-medium text-gray-300 mb-2">
                        Duration (minutes) *
                    </label>
                    <input type="number" 
                           id="duration" 
                           name="duration" 
                           class="w-full bg-gray-700 text-white rounded-lg px-4 py-2.5 
                                  focus:ring-2 focus:ring-blue-500 focus:outline-none @error('duration') border-2 border-red-600 @enderror "
                           placeholder="Enter duration">
              @error('duration')
                <div class="invalid-feedback text-red-600">
                {{ $message }}
                </div>
              @enderror 
                </div>

                <!-- Release Date -->
                <div>
                    <label for="release_date" class="block text-sm font-medium text-gray-300 mb-2">
                        Release Date *
                    </label>
                    <input type="date" 
                           id="release_date" 
                           name="release_date" 
                           class="w-full bg-gray-700 text-white rounded-lg px-4 py-2.5 
                                  focus:ring-2 focus:ring-blue-500 focus:outline-none @error('release_date') border-2 border-red-600 @enderror ">
              @error('release_date')
                <div class="invalid-feedback text-red-600">
                {{ $message }}
                </div>
              @enderror 
                </div>

                <!-- Language -->
                <div>
                    <label for="language" class="block text-sm font-medium text-gray-300 mb-2">
                        Language *
                    </label>
                    <select id="language" 
                            name="language" 
                            class="w-full bg-gray-700 text-white rounded-lg px-4 py-2.5 
                                   focus:ring-2 focus:ring-blue-500 focus:outline-none @error('language') border-2 border-red-600 @enderror ">
                        <option value="">Select language</option>
                        <option value="english">English</option>
                        <option value="sinhala">Sinhala</option>
                        <option value="tamil">Tamil</option>
                        <option value="hindi">Hindi</option>
                    </select>
              @error('language')
                <div class="invalid-feedback text-red-600">
                {{ $message }}
                </div>
              @enderror 
                </div>

                <!-- Genre -->
                <div>
                    <label for="genre" class="block text-sm font-medium text-gray-300 mb-2">
                        Genre *
                    </label>
                    <select id="genre" 
                            name="genre" 
                            class="w-full bg-gray-700 text-white rounded-lg px-4 py-2.5 
                                   focus:ring-2 focus:ring-blue-500 focus:outline-none @error('genre') border-2 border-red-600 @enderror ">
                        <option value="">Select genre</option>
                        <option value="action">Action</option>
                        <option value="comedy">Comedy</option>
                        <option value="drama">Drama</option>
                        <option value="horror">Horror</option>
                        <option value="romance">Romance</option>
                        <option value="thriller">Thriller</option>
                    </select>
              @error('genre')
                <div class="invalid-feedback text-red-600">
                {{ $message }}
                </div>
              @enderror 
                </div>

                <!-- Rating -->
                <div>
                    <label for="duration" class="block text-sm font-medium text-gray-300 mb-2">
                        Rating
                    </label>
                    <input type="number" 
                           id="rating" 
                           name="rating" 
                           class="w-full bg-gray-700 text-white rounded-lg px-4 py-2.5 
                                  focus:ring-2 focus:ring-blue-500 focus:outline-none @error('rating') border-2 border-red-600 @enderror "
                           placeholder="Enter rating">
              @error('rating')
                <div class="invalid-feedback text-red-600">
                {{ $message }}
                </div>
              @enderror 
                </div>
            </div>

            <!-- Movie Poster -->
            <div>
                <label class="block text-sm font-medium text-gray-300 mb-2">
                    Movie Poster *
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-600 
                            border-dashed rounded-lg">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" 
                             stroke="currentColor" 
                             fill="none" 
                             viewBox="0 0 48 48">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 
                                     01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 
                                     4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" 
                                  stroke-width="2" 
                                  stroke-linecap="round" 
                                  stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-400">
                            <label for="poster" class="relative cursor-pointer rounded-md 
                                                      font-medium text-red-500 hover:text-red-400">
                                <span>Upload a file</span>
                                <input id="poster" 
                                       name="poster" 
                                       type="file" 
                                       class="sr-only @error('poster') border-2 border-red-600 @enderror "
                                       accept="image/*">
              @error('poster')
                <div class="invalid-feedback text-red-600">
                {{ $message }}
                </div>
              @enderror 
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-400">
                            PNG, JPG, GIF up to 10MB
                        </p>
                    </div>
                </div>
            </div>

            <!-- Movie Price -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-300 mb-2">
                    Ticket Price (LKR) *
                </label>
                <input type="number" 
                       id="price" 
                       name="price" 
                       class="w-full bg-gray-700 text-white rounded-lg px-4 py-2.5 
                              focus:ring-2 focus:ring-blue-500 focus:outline-none @error('price') border-2 border-red-600 @enderror "
                       placeholder="Enter ticket price">
              @error('price')
                <div class="invalid-feedback text-red-600">
                {{ $message }}
                </div>
              @enderror 
            </div>

            <!-- Show Times -->
            <div>
                <label class="block text-sm font-medium text-gray-300 mb-2">
                    Show Times *
                </label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="time1" 
                               name="showtimes1" 
                               value="10:30"
                               class="w-4 h-4 text-red-600 rounded focus:ring-red-500">
                        <label for="time1" class="ml-2 text-gray-300">10:30 AM</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="time2" 
                               name="showtimes2" 
                               value="14:00"
                               class="w-4 h-4 text-red-600 rounded focus:ring-red-500">
                        <label for="time2" class="ml-2 text-gray-300">2:00 PM</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="time3" 
                               name="showtimes3" 
                               value="18:30"
                               class="w-4 h-4 text-red-600 rounded focus:ring-red-500">
                        <label for="time3" class="ml-2 text-gray-300">6:30 PM</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="time4" 
                               name="showtimes4" 
                               value="21:45"
                               class="w-4 h-4 text-red-600 rounded focus:ring-red-500">
                        <label for="time4" class="ml-2 text-gray-300">9:45 PM</label>
                    </div>
                </div>
            </div>

            <!-- Form Buttons -->
            <div class="flex justify-end space-x-4 pt-4">
                <button type="button" 
                        class="px-6 py-2.5 rounded-lg border-2 border-gray-600 text-white 
                               hover:bg-gray-700 transition duration-300">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-6 py-2.5 rounded-lg bg-red-600 text-white 
                               hover:bg-red-700 transition duration-300">
                    Add Movie
                </button>
            </div>
        </form>
    </div>
</div>
@endsection