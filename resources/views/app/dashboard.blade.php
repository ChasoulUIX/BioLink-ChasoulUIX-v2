@extends('layouts.app')

@section('content')
    <div class="py-12 bg-gradient-to-b from-gray-900 to-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Profile Section -->
            <div id="profile" class="bg-gradient-to-r from-gray-800 to-gray-700 overflow-hidden shadow-xl sm:rounded-2xl mb-8 transform hover:scale-[1.02] transition-all duration-300">
                <div class="p-4 sm:p-8 text-center relative">
                    <div class="w-32 h-32 sm:w-40 sm:h-40 mx-auto mb-4 sm:mb-6 relative">
                        <div class="absolute inset-0 bg-blue-600 rounded-full animate-pulse"></div>
                        <img class="w-full h-full rounded-full object-cover border-4 border-gray-700 shadow-lg relative z-10 transform hover:rotate-6 transition-transform duration-300" src="{{ asset('images/IMG_0836.jpeg') }}" alt="Profile Picture">
                    </div>
                    <h1 class="text-2xl sm:text-3xl font-bold text-white mb-2 tracking-wide">Chasoul UIX</h1>
                    <p class="text-base sm:text-lg text-gray-300 font-light">Full-Stack Website & Mobile Developer | Freelance Programming</p>
                    <div class="flex justify-center space-x-4 sm:space-x-6 mt-4 sm:mt-6">
                        <a href="#" class="text-gray-300 hover:text-blue-400 transform hover:scale-110 transition-all duration-200">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                            </svg>
                        </a>
                        <a href="https://instagram.com/chasoul.uix" class="text-gray-300 hover:text-blue-400 transform hover:scale-110 transition-all duration-200">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@chasoul.uix" class="text-gray-300 hover:text-blue-400 transform hover:scale-110 transition-all duration-200">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 015.17-2.39V12.1v-8.8a8.16 8.16 0 004.65 3.37c.42.13.85.22 1.28.27v-3.35a4.85 4.85 0 01-1.85-.83z"/>
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com/@chasoul.uix" class="text-gray-300 hover:text-blue-400 transform hover:scale-110 transition-all duration-200">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex flex-wrap justify-center gap-2 sm:gap-4 mb-8">
                <a href="#profile" class="px-4 sm:px-8 py-2 sm:py-3 text-sm sm:text-base bg-gradient-to-r from-gray-700 to-gray-600 text-white rounded-full font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">Profile</a>
                <a href="#projects" class="px-4 sm:px-8 py-2 sm:py-3 text-sm sm:text-base bg-gradient-to-r from-gray-700 to-gray-600 text-white rounded-full font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">Projects</a>
                <a href="#cooperation" class="px-4 sm:px-8 py-2 sm:py-3 text-sm sm:text-base bg-gradient-to-r from-gray-700 to-gray-600 text-white rounded-full font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">Cooperation</a>
                <a href="#contact" class="px-4 sm:px-8 py-2 sm:py-3 text-sm sm:text-base bg-gradient-to-r from-gray-700 to-gray-600 text-white rounded-full font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">Contact</a>
            </div>

            <!-- Projects Grid -->
            <div id="projects" class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <!-- Project Card 1 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('images/project1.jpg') }}" alt="Project 1" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold mb-2">E-Commerce Platform</h3>
                        <p class="text-sm sm:text-base text-gray-300 mb-4">A full-featured online shopping platform with cart, payments, and order management.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Laravel</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Vue.js</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Tailwind</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('images/project2.jpg') }}" alt="Project 2" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold mb-2">Social Media App</h3>
                        <p class="text-sm sm:text-base text-gray-300 mb-4">Mobile application for connecting people with similar interests and hobbies.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">React Native</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Firebase</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('images/project3.jpg') }}" alt="Project 3" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold mb-2">Task Management System</h3>
                        <p class="text-sm sm:text-base text-gray-300 mb-4">Professional project management tool with team collaboration features.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Laravel</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Alpine.js</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 4 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('images/project4.jpg') }}" alt="Project 4" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold mb-2">Learning Management System</h3>
                        <p class="text-sm sm:text-base text-gray-300 mb-4">Online education platform with course management and student tracking.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">PHP</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">MySQL</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">jQuery</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 5 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('images/project5.jpg') }}" alt="Project 5" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold mb-2">Real Estate Portal</h3>
                        <p class="text-sm sm:text-base text-gray-300 mb-4">Property listing and management system with advanced search features.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Next.js</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 6 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('images/project6.jpg') }}" alt="Project 6" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold mb-2">Fitness Tracking App</h3>
                        <p class="text-sm sm:text-base text-gray-300 mb-4">Mobile app for tracking workouts, nutrition, and fitness progress.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Flutter</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Firebase</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 7 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('images/project7.jpg') }}" alt="Project 7" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold mb-2">Restaurant Management</h3>
                        <p class="text-sm sm:text-base text-gray-300 mb-4">Complete solution for restaurant operations and online ordering.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Laravel</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">React</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 8 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('images/project8.jpg') }}" alt="Project 8" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold mb-2">Event Management Platform</h3>
                        <p class="text-sm sm:text-base text-gray-300 mb-4">System for planning, organizing, and managing events and tickets.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Django</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Vue.js</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 9 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300">
                    <img src="{{ asset('images/project9.jpg') }}" alt="Project 9" class="w-full h-40 sm:h-48 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-bold mb-2">Healthcare Portal</h3>
                        <p class="text-sm sm:text-base text-gray-300 mb-4">Patient management and appointment scheduling system for clinics.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Laravel</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs sm:text-sm">Livewire</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection