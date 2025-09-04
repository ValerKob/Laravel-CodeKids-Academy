<!--================ Start Header Area =================-->
<header
    class="sticky top-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800"
>
    <div
    class="container mx-auto px-4 py-3 flex justify-between items-center"
    >
    <a href="{{ route('main') }}" class="flex items-center space-x-2">
        <div
        class="w-10 h-10 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 flex items-center justify-center"
        >
        <i class="fas fa-code text-white text-lg"></i>
        </div>
        <span
        class="text-2xl font-heading font-bold bg-gradient-to-r from-primary-600 to-secondary-600 bg-clip-text text-transparent"
        >CodeKids</span
        >
    </a>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-8">
        <a
        href="{{ route('main') }}"
        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition"
        >Главная</a
        >
        <a
        href="{{ route('main') }}#courses"
        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition"
        >Курсы</a
        >
        <a
        href="{{ route('main') }}#about"
        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition"
        >О нас</a
        >
        {{-- <a
        href="{{ route('main') }}#teacher"
        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition"
        >Преподаватели</a
        > --}}
        <a
        href="{{ route('main') }}#reviews"
        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition"
        >Отзывы</a
        >
        <a
        href="{{ route('main') }}#faq"
        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition"
        >FAQ</a
        >
        <a
        href="#contact"
        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition"
        >Контакты</a
        >
         <a
        href="{{ route('ai') }}"
        class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition"
        >AI</a
        >
    </nav>
    <div class="hidden md:flex items-center space-x-4">
        <button
        class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition"
        >
        <i class="fas fa-moon text-black dark:hidden"></i>
        <i class="fas fa-sun text-yellow-400 hidden dark:block"></i>
        </button>
        <a href="#contact" class="hidden md:flex items-center space-x-4">
        <button
            class="hidden md:block px-4 py-2 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition"
        >
            Записаться
        </button>
        </a>
    </div>

    <!-- Mobile menu button -->
    <div class="md:hidden flex items-center space-x-2">
        <button
        class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition"
        >
        <i class="fas fa-moon dark:hidden"></i>
        <i class="fas fa-sun hidden dark:block"></i>
        </button>
        <button id="menu-btn" class="hamburger focus:outline-none">
        <span class="hamburger-top"></span>
        <span class="hamburger-middle"></span>
        <span class="hamburger-bottom"></span>
        </button>
    </div>
    </div>

    <!-- Mobile Menu -->
    <div
    id="menu"
    class="hidden md:hidden bg-white border-t border-gray-200 dark:bg-gray-800"
    >
    <div class="container mx-auto px-4 py-3 flex flex-col space-y-3">
        <a
        href="{{ route('main') }}#home"
        class="text-gray-700 hover:text-indigo-600 font-medium py-2 dark:text-gray-100"
        >Главная</a
        >
        <a
        href="{{ route('main') }}#courses"
        class="text-gray-700 hover:text-indigo-600 font-medium py-2 dark:text-gray-100"
        >Курсы</a
        >
        <a
        href="{{ route('main') }}#about"
        class="text-gray-700 hover:text-indigo-600 font-medium py-2 dark:text-gray-100"
        >О нас</a
        >
        {{-- <a
        href="{{ route('main') }}#teacher"
        class="text-gray-700 hover:text-indigo-600 font-medium py-2 dark:text-gray-100"
        >Преподаватели</a
        > --}}
        <a
        href="{{ route('main') }}#reviews"
        class="text-gray-700 hover:text-indigo-600 font-medium py-2 dark:text-gray-100"
        >Отзывы</a
        >
        <a
        href="{{ route('main') }}#faq"
        class="text-gray-700 hover:text-indigo-600 font-medium py-2 dark:text-gray-100"
        >FAQ</a
        >
        <a
        href="#contact"
        class="text-gray-700 hover:text-indigo-600 font-medium py-2 dark:text-gray-100"
        >Контакты</a
        >
         <a
        href="{{ route('ai') }}"
        class="text-gray-700 hover:text-indigo-600 font-medium py-2 dark:text-gray-100"
        >AI</a
        >
        <a
        href="#contact"
        class="bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-lg font-medium text-center transition duration-300"
        >
        Записаться
        </a>
    </div>
    </div>
</header>
<!--================ End Header Area =================-->