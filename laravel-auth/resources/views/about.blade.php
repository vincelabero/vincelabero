<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">About Me</h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md p-8 text-center sm:text-left flex flex-col sm:flex-row items-center gap-8">
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-indigo-500 flex-shrink-0">
                    <img src="{{ asset('images/1.jpg') }}" alt="Laurence Andrew Perlas" class="w-full h-full object-cover">
                </div>
                <div class="space-y-2">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">Laurence Andrew B. Perlas</h1>
                    <p class="text-indigo-600 dark:text-indigo-400 font-medium text-lg">BSIT Student</p>
                    <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                        Passionate developer trying to learn and explore new technologies. I enjoy building web applications and solving complex problems through code.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>