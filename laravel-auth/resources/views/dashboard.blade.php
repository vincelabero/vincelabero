<x-app-layout>
    <!-- Top Navigation Bar -->
    <nav class="bg-white border-b-2 border-black shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <span class="font-bold text-xl text-black tracking-wide uppercase">Portfolio</span>
            
            <!-- Navigation Links with Spacing -->
            <div class="flex items-center gap-6 sm:gap-8 text-sm font-medium text-black">
                <a href="#about" class="hover:underline transition inline-block px-1 text-black">About</a>
                <a href="#education" class="hover:underline transition inline-block px-1 text-black">Education</a>
                <a href="#projects" class="hover:underline transition inline-block px-1 text-black">Projects</a>
                <a href="https://github.com/vincelabero/vincelabero" target="_blank" class="hover:underline transition inline-block px-1 text-black">GitHub</a>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="bg-gray-100 min-h-screen py-10 px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- About Section (Profile Card) -->
        <section id="about" class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8 border border-black text-black">
            <div class="flex flex-col sm:flex-row items-center gap-8">
                
                <!-- Fixed XL Size Avatar (192px / 12rem) -->
                <div class="w-48 h-48 min-w-[12rem] min-h-[12rem] max-w-[12rem] max-h-[12rem] rounded-full border-4 border-black p-1 flex-shrink-0 shadow-sm overflow-hidden" style="width: 192px; height: 192px;">
                    <!-- Removed 'grayscale' class to show true color -->
                    <img src="{{ asset('images/2.png') }}" alt="Marc Vincel Abero" class="w-full h-full object-cover rounded-full block">
                </div>
                
                <!-- Info Details -->
                <div class="text-center sm:text-left space-y-2 text-black">
                    <h1 class="text-3xl font-bold text-black">Marc Vincel Abero</h1>
                    <p class="font-semibold text-lg text-black">BSIT Student</p>
                    <p class="text-sm max-w-xl text-black">
                        Passionate developer trying to learn and explore new technologies. I enjoy building web applications and solving complex problems through code.
                    </p>
                    <div class="pt-2 flex items-center justify-center sm:justify-start gap-2 text-sm font-medium text-black">
                        <svg class="w-4 h-4 flex-shrink-0 text-black" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <span class="text-black">+63 995 981 8303 </span>
                    </div>
                </div>

            </div>
        </section>

        <!-- Educational Background Section -->
        <section id="education" class="max-w-4xl mx-auto space-y-6">
            <h2 class="text-2xl font-bold text-center text-black">Educational Background</h2>
            
            <div class="bg-white rounded-2xl shadow-md p-8 border border-black space-y-6 text-black">
                <!-- College -->
                <div class="pl-4 border-l-4 border-black space-y-1">
                    <h3 class="text-lg font-bold text-black">Data Center College of the Philippines</h3>
                    <p class="font-medium text-sm text-black">Bachelor of Science in Information Technology</p>
                    <p class="text-xs text-black">Ubbog Lipcan, Bangued Abra</p>
                </div>

                <!-- Senior High School -->
                <div class="pl-4 border-l-4 border-black space-y-1">
                    <h3 class="text-lg font-bold text-black">Divine Word College of Bangued, Philippines</h3>
                    <p class="font-medium text-sm text-black">Senior High School</p>
                    <p class="text-xs text-black">Bangued, Abra</p>
                </div>

                <!-- Elementary -->
                <div class="pl-4 border-l-4 border-black space-y-1">
                    <h3 class="text-lg font-bold text-black">Divine Word College of Bangued, Philippines</h3>
                    <p class="font-medium text-sm text-black">Elementary</p>
                    <p class="text-xs text-black">Bangued, Abra</p>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="max-w-4xl mx-auto space-y-6 pb-12">
            <h2 class="text-2xl font-bold text-center text-black">Projects</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl shadow-md p-6 border border-black space-y-2 text-black">
                    <h3 class="text-lg font-bold text-black">Online Information and Management System</h3>
                    <p class="text-sm text-black">Web-based management platform built for Cathedral.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-md p-6 border border-black space-y-2 text-black">
                    <h3 class="text-lg font-bold text-black">Laravel Auth & Portfolio</h3>
                    <p class="text-sm text-black">Responsive personal dashboard built using Laravel Breeze.</p>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>