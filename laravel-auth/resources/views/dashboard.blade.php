<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Basic Information -->
                <section class="lg:col-span-1 space-y-8">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md overflow-hidden">
                        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-32"></div>
                        <div class="p-6 -mt-16 text-center">
                            <div class="w-32 h-32 mx-auto rounded-full border-4 border-white dark:border-gray-800 bg-gray-200 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
                                <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                            <h3 class="mt-4 text-2xl font-bold text-gray-900 dark:text-gray-100">Jane Perlas</h3>
                            <p class="text-indigo-600 dark:text-indigo-400 font-medium">Web Developer</p>
                            <p class="mt-4 text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                                Passionate developer focused on building clean, responsive, and user-friendly web applications with Laravel and modern JavaScript.
                            </p>
                            <div class="mt-6 space-y-2 text-left">
                                <div class="flex items-center gap-3 text-sm text-gray-700 dark:text-gray-300">
                                    <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                    </svg>
                                    <span>xlaurence02@gmail.com</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm text-gray-700 dark:text-gray-300">
                                    <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                    </svg>
                                    <span>+63 962 251 8929</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm text-gray-700 dark:text-gray-300">
                                    <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Poblacion, Tayum Abra - Philippines</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Educational Background + Projects -->
                <section class="lg:col-span-2 space-y-8">

                    <!-- Educational Background -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L6.667 9.75l.041.02a1 1 0 001.005 0l6.767-2.9a.999.999 0 000-1.84l-7-3zM2 10.414v4.586a1 1 0 001 1h14a1 1 0 001-1V10.414l-8 3.428-8-3.428z"/>
                            </svg>
                            Educational Background
                        </h3>
                        <ol class="relative border-l-2 border-indigo-200 dark:border-gray-700 ml-3 space-y-6">
                            <li class="ml-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 rounded-full bg-indigo-100 dark:bg-indigo-900 ring-4 ring-white dark:ring-gray-800 -left-3">
                                    <svg class="w-3 h-3 text-indigo-600 dark:text-indigo-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16z"/></svg>
                                </span>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Bachelor of Science in Information Technology</h4>
                                <p class="text-indigo-600 dark:text-indigo-400 font-medium">Data Center College of the Philippines</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">2023 – 2026</p>
                            </li>
                            <li class="ml-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 rounded-full bg-indigo-100 dark:bg-indigo-900 ring-4 ring-white dark:ring-gray-800 -left-3">
                                    <svg class="w-3 h-3 text-indigo-600 dark:text-indigo-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16z"/></svg>
                                </span>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Senior High School (TVL)</h4>
                                <p class="text-indigo-600 dark:text-indigo-400 font-medium">University of Bangued, Abra</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">2021 – 2023</p>
                            </li>
                        </ol>
                    </div>

                    <!-- Projects Grid -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Projects
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl p-5 hover:shadow-lg transition-shadow">
                                <h4 class="font-semibold text-gray-900 dark:text-gray-100 mb-2">Github</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">A full-featured task management web app built with Laravel and Livewire, featuring real-time updates and role-based permissions.</p>
                                <a href="https://github.com/supremo-a/andrewlbp" target="_blank" class="inline-flex items-center gap-2 text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-800">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                                    </svg>
                                    View on GitHub
                                </a>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
</x-app-layout>
