<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Projects</h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md p-6 border border-gray-100 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100">Online Information and Management System</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm mt-2">Web-based management platform built for Cathedral.</p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md p-6 border border-gray-100 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100">Laravel Auth & Portfolio</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm mt-2">Responsive personal dashboard built using Laravel Breeze.</p>
            </div>
        </div>
    </div>
</x-app-layout>