@extends('layouts.main')

@section('title', 'Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero-gradient text-white py-16 md:py-24">
    <div
    class="container mx-auto px-4 flex flex-col md:flex-row items-center"
    >
    <div
        id="hero-content"
        class="md:w-1/2 mb-10 md:mb-0 fade-transition fade-in"
    >
        <h1
        id="hero-title"
        class="text-4xl md:text-5xl font-bold mb-6 leading-tight"
        >
        Программирование — <br />суперсила будущего!
        </h1>
        <p id="hero-text" class="text-xl mb-8 opacity-90">
        Современные онлайн и офлайн-курсы программирования для детей от 7 до
        18 лет. Развиваем логическое мышление, творчество и навыки будущего.
        </p>
        <div
        class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4"
        >
        <a
            href="#courses"
            class="bg-white text-indigo-600 hover:bg-gray-100 px-6 py-3 rounded-lg font-bold text-center transition duration-300"
        >
            Выбрать курс
        </a>
        <a
            href="#contact"
            class="border-2 border-white text-white hover:bg-white hover:text-indigo-600 px-6 py-3 rounded-lg font-bold text-center transition duration-300"
        >
            Бесплатный урок 11
        </a>
        </div>
    </div>
    <div
        id="hero-image-wrapper"
        class="md:w-1/2 flex justify-center fade-transition fade-in"
    >
        <img
        id="hero-image"
        src="./assets/images/main/slider/slider_1.jpg"
        alt="Дети программируют"
        class="rounded-xl shadow-xl w-full max-w-md animate-float"
        />
    </div>
    </div>
</section>

<!-- Преимущества -->
<section class="py-16 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 p-6 flex flex-col rounded shadow-md items-center text-center"
        >
        <div
            class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4"
        >
            <i class="fas fa-laptop-code text-indigo-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3 text-primary">
            Интерактивное обучение
        </h3>
        <p class="text-gray-600 dark:text-gray-100">
            Увлекательные занятия в малых группах с индивидуальным подходом к
            каждому ученику
        </p>
        </div>
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 p-6 rounded flex flex-col shadow-md items-center text-center"
        >
        <div
            class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4"
        >
            <i class="fas fa-user-graduate text-purple-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3 text-primary">
            Опытные преподаватели
        </h3>
        <p class="text-gray-600 dark:text-gray-100">
            Наши педагоги — практикующие разработчики с опытом преподавания
            детям
        </p>
        </div>
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 p-6 rounded flex flex-col shadow-md items-center text-center"
        >
        <div
            class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4"
        >
            <i class="fas fa-medal text-blue-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3 text-primary">
            Практические проекты
        </h3>
        <p class="text-gray-600 dark:text-gray-100">
            Каждый курс завершается созданием собственного проекта, которым
            можно гордиться
        </p>
        </div>
    </div>
    </div>
</section>

<!-- Курсы -->
<section id="courses" class="py-16">
    <div class="container mx-auto px-4">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">
        Наши курсы
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto dark:text-gray-100">
        Программы для разных возрастов и уровней подготовки. Выбирайте то,
        что интересно вашему ребенку!
        </p>
    </div>

    <div class="mb-8 flex flex-wrap justify-center gap-4">
        <button
        class="filter-btn active bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 !rounded-button font-medium whitespace-nowrap"
        data-age="all"
        >
        Все курсы
        </button>
        <button
        class="filter-btn px-4 py-2 !rounded-button font-medium hover:bg-gray-300 transition whitespace-nowrap bg-gray-200 text-gray-700"
        data-age="age-7-9"
        >
        7-9 лет
        </button>
        <button
        class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 !rounded-button font-medium hover:bg-gray-300 transition whitespace-nowrap"
        data-age="age-10-13"
        >
        10-13 лет
        </button>
        <button
        class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 !rounded-button font-medium hover:bg-gray-300 transition whitespace-nowrap"
        data-age="age-14-18"
        >
        14-18 лет
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-7-9"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/roblox_junior.jpg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >7-9 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >13 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Разработка игр в Roblox (Junior)
            </h3>
            <p class="mb-4 text-gray-600 dark:text-gray-100">
            Создание собственных игр на платформе Roblox с использованием
            языка Lua.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">9 750 ₽</span>
            <a
                href="{{ route('roblox_junior') }}"
                class="text-blue-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Курс 2 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-10-13"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/python_junior.jpg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >10-13 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >15 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Python для детей (Junior)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Основы программирования на Python: переменные, циклы, условия.
            Создание простых игр и программ.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">11 250 ₽</span>
            <a
                href="{{ route('python_junior') }}"
                class="text-green-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Курс 3
            <div
                class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-7-9"
            >
                <div
                class="h-48 bg-cover bg-center"
                style="background-image: url('https://readdy.ai/api/search-image?query=Minecraft%20education%20edition%20with%20code%20blocks%20visible%2C%20children%20creating%20and%20programming%20in%20Minecraft%20world%2C%20educational%20gaming%20environment%20with%20coding%20elements&width=600&height=400&seq=4&orientation=landscape')"
                ></div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-3">
                        <span
                        class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded"
                        >7-9 лет</span
                        >
                        <span class="text-gray-500 text-sm dark:text-gray-300">10 недель</span>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">
                        Программирование в Minecraft
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Изучение основ программирования через создание модификаций в
                        любимой игре Minecraft.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-primary">9 900 ₽</span>
                        <a
                        href="#course-details"
                        class="text-blue-600 font-medium flex items-center hover:underline"
                        >
                        Подробнее
                        <div class="w-5 h-5 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                        </a>
                    </div>
                </div>
            </div> -->

        <!-- Курс 4 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-10-13"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/unity_junior.jpg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >10-13 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >12 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Разработка игр на Unity (Junior)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Создание 2D и 3D игр на профессиональном движке Unity.
            Программирование на C#.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">9 000 ₽</span>
            <a
                href="{{ route('unity_junior') }}"
                class="text-green-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Курс 5 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-10-13"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/web_junior.jpg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >10-13 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >16 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Веб-разработка для детей (Junior)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            HTML, CSS и JavaScript для создания собственных веб-сайтов и
            интерактивных проектов.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">12 000 ₽</span>
            <a
                href="{{ route('web_junior') }}"
                class="text-green-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Курс 6 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-10-13"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/roblox_middle.jpg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >10-13 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >14 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Разработка игр в Roblox (Middle)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Создание собственных игр на платформе Roblox с использованием
            языка Lua.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">10 500 ₽</span>
            <a
                href="{{ route('roblox_middle') }}"
                class="text-green-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>
        <!-- Курс 7 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-14-18"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/python_middle.jpeg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >14-18 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >12 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Python Pro (Middle)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Продвинутый уровень программирования на Python: ООП, ИИ, базы
            данных. Создание сложных игр и программ.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">11 250 ₽</span>
            <a
                href="{{ route('python_middle') }}"
                class="text-purple-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>
        <!-- Курс 8 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-14-18"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="background-image: url('./assets/images/main/use.jpg')"
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >14-18 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >12 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Подготовка к ЕГЭ (по Информатике)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Интенсивная подготовка к экзамену по информатике: теория,
            практика, решения заданий. Разбор всех типов задач, тренировки,
            пробные тесты.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">9 000 ₽</span>
            <a
                href="{{ route('use') }}"
                class="text-purple-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Курс 9 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-10-13 age-14-18"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai_middle.png');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >10-18 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >13 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            ИИ Уровень (Middle)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Основы искусственного интеллекта: машинное обучение, нейросети,
            анализ данных. Создание умных программ и первых ИИ-проектов.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">9 750 ₽</span>
            <a
                href="{{ route('ai_middle') }}"
                class="text-purple-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Курс 10 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-7-9"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai_junior.png');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >7-9 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >12 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            ИИ Уровень (Junior)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Введение в искусственный интеллект: что такое ИИ и где он
            применяется. Создание простых ИИ-проектов с помощью визуальных и
            понятных инструментов.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">12 500 ₽</span>
            <a
                href="{{ route('ai_junior') }}"
                class="text-blue-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Курс 11
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-10-13"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('https://img.freepik.com/free-photo/close-up-hand-writing-notebook-top-view_23-2148888824.jpg?t=st=1746445155~exp=1746448755~hmac=67beffda1082881559a1735b646bbd1a9f26a9a3ac2912fb0560a785bd2250fd&w=996');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >10-13 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300">12 недель</span>
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Подготовка к ОГЭ
            </h3>
            <p class="text-gray-600 mb-4">
            Полный курс по подготовке к ОГЭ по информатике: теория, практика
            и решение типовых заданий. Разбор всех тем экзамена, тренировка
            по тестам и заданиям с развернутым ответом.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">12 500 ₽</span>
            <a
                href="./pages_detailed/oge.html"
                class="text-green-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div> -->
        <!-- Курс 12 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-14-18"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/web_middle.png');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >14-18 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >15 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Веб-разработка (Middle)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            HTML, CSS, JavaScript, PHP и Python для создания собственных
            веб-сайтов и интерактивных проектов.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">11 250 ₽</span>
            <a
                href="{{ route('web_middle') }}"
                class="text-purple-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>
        <!-- Курс 13 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card age-10-13 age-14-18"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/unity_middle.png');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >10-18 лет</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >15 недель</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Разработка игр на Unity (Middle)
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Создание 2D и 3D игр на профессиональном движке Unity.
            Программирование на C#.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">11 250 ₽</span>
            <a
                href="{{ route('unity_middle') }}"
                class="text-purple-600 font-medium flex items-center hover:underline"
            >
                Подробнее
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- Promo Banner -->
@include('includes.promo_banner.promo_banner')

<!-- About -->
<section id="about" class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
        <h2 class="text-3xl font-bold mb-6">О нашей школе</h2>
        <p class="text-gray-600 mb-6 dark:text-gray-100">
            CodeKids Academy — это место, где дети не просто учатся
            программировать, а развивают логическое мышление, креативность и
            навыки решения сложных задач.
        </p>
        <p class="text-gray-600 mb-6 dark:text-gray-100">
            Наша миссия — сделать обучение программированию увлекательным и
            доступным для каждого ребенка, независимо от начального уровня
            подготовки.
        </p>
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800">
            <div class="text-indigo-600 text-2xl mb-2">
                <i class="fas fa-users"></i>
            </div>
            <h4 class="font-bold mb-1">150+</h4>
            <p class="text-sm text-gray-600 dark:text-gray-100">Учеников</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800">
            <div class="text-purple-600 text-2xl mb-2">
                <i class="fas fa-project-diagram"></i>
            </div>
            <h4 class="font-bold mb-1">100+</h4>
            <p class="text-sm text-gray-600 dark:text-gray-100">
                Завершенных проектов
            </p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800">
            <div class="text-blue-600 text-2xl mb-2">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <h4 class="font-bold mb-1">4+</h4>
            <p class="text-sm text-gray-600 dark:text-gray-100">
                Преподавателей
            </p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800">
            <div class="text-green-600 text-2xl mb-2">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <h4 class="font-bold mb-1">3 года</h4>
            <p class="text-sm text-gray-600 dark:text-gray-100">
                Опыта работы
            </p>
            </div>
        </div>
        </div>
        <div class="lg:w-1/2">
        <img
            src="./assets/images/main/about.jpg"
            alt="Дети учатся программированию"
            class="w-full rounded-lg shadow-lg"
        />
        </div>
    </div>
</section>

<!-- Reviews -->
<section id="reviews" class="py-16 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">Отзывы родителей и учеников</h2>
        <p class="text-gray-600 max-w-2xl mx-auto dark:text-gray-100">
        Что говорят о нас те, кто уже попробовал наши курсы
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Review 1 -->
        <div
        class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md testimonial-card"
        >
        <div class="flex items-center mb-4">
            <img
            src="./assets/images/main/reviews/review_1.jpg"
            alt="Ольга"
            class="w-12 h-12 rounded-full mr-4"
            />
            <div>
            <h4 class="font-bold">Ольга, мама Саши (9 лет)</h4>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            </div>
        </div>
        <p class="text-gray-600 dark:text-gray-100">
            "Саша с нетерпением ждет каждое занятие! За 3 месяца научился
            создавать простые игры в Scratch. Преподаватели умеют
            заинтересовать детей и объясняют все очень доступно."
        </p>
        </div>

        <!-- Review 2 -->
        <div
        class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md testimonial-card"
        >
        <div class="flex items-center mb-4">
            <img
            src="./assets/images/main/reviews/review_2.jpg"
            alt="Алексей"
            class="w-12 h-12 rounded-full mr-4"
            />
            <div>
            <h4 class="font-bold">Алексей, папа Маши (12 лет)</h4>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            </div>
        </div>
        <p class="text-gray-600 dark:text-gray-100">
            "Дочь занимается Python уже полгода. Вижу реальный прогресс —
            теперь сама пишет небольшие программы. Очень нравится подход:
            теория сразу закрепляется практикой."
        </p>
        </div>

        <!-- Review 3 -->
        <div
        class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md testimonial-card"
        >
        <div class="flex items-center mb-4">
            <img
            src="./assets/images/main/reviews/review_3.jpg"
            alt="Ирина"
            class="w-12 h-12 rounded-full mr-4"
            />
            <div>
            <h4 class="font-bold">Ирина, мама Димы (14 лет)</h4>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            </div>
        </div>
        <p class="text-gray-600 dark:text-gray-100">
            "Сын мечтал создавать игры, но не знал с чего начать. После курса
            Unity сделал свою первую 3D-игру! Теперь планирует связать жизнь с
            геймдевом. Спасибо школе за вдохновение!"
        </p>
        </div>

        <!-- Review 4 -->
        <div
        class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md testimonial-card"
        >
        <div class="flex items-center mb-4">
            <img
            src="./assets/images/main/reviews/review_4.jpg"
            alt="Михаил"
            class="w-12 h-12 rounded-full mr-4"
            />
            <div>
            <h4 class="font-bold">Михаил, папа Коли (10 лет)</h4>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            </div>
        </div>
        <p class="text-gray-600 dark:text-gray-100">
            "Коля обожает Minecraft, а теперь еще и программирует в нем! Вижу,
            как развивается его логика и креативность. Занятия проходят в
            комфортном темпе, без лишнего давления."
        </p>
        </div>

        <!-- Review 5 -->
        <div
        class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md testimonial-card"
        >
        <div class="flex items-center mb-4">
            <img
            src="./assets/images/main/reviews/review_5.jpg"
            alt="Светлана"
            class="w-12 h-12 rounded-full mr-4"
            />
            <div>
            <h4 class="font-bold">Светлана, мама Алисы (16 лет)</h4>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            </div>
        </div>
        <p class="text-gray-600 dark:text-gray-100">
            "Алиса прошла курс веб-разработки и сделала сайт для школьного
            проекта. Теперь хочет стать frontend-разработчиком. Преподаватель
            смог заинтересовать сложной темой — это дорогого стоит."
        </p>
        </div>

        <!-- Review 6 -->
        <div
        class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md testimonial-card"
        >
        <div class="flex items-center mb-4">
            <img
            src="./assets/images/main/reviews/review_6.jpg"
            alt="Артем"
            class="w-12 h-12 rounded-full mr-4"
            />
            <div>
            <h4 class="font-bold">Артем, папа Васи (14 лет)</h4>
            <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            </div>
        </div>
        <p class="text-gray-600 dark:text-gray-100">
            "Мой сын делает игры в Roblox! Научился всему
            на курсе. Преподаватель круто объясняет, всегда помогает если
            что-то не получается. Хочет еще учиться!"
        </p>
        </div>
    </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">Часто задаваемые вопросы</h2>
        <p class="text-gray-600 max-w-2xl mx-auto dark:text-gray-100">
        Ответы на самые популярные вопросы от родителей
        </p>
    </div>

    <div class="max-w-3xl mx-auto">
        <!-- FAQ Item 1 -->
        <div
        class="faq-item border border-gray-200 rounded-lg overflow-hidden mb-4 dark:bg-gray-800"
        >
        <button
            class="toggle-btn w-full flex justify-between items-center p-4 text-left"
        >
            <span class="font-medium"
            >С какого возраста можно начинать обучение?</span
            >
            <i
            class="fas fa-chevron-down text-indigo-600 transition-transform duration-300 rotate-0"
            ></i>
        </button>
        <div
            class="toggle-content transition-all duration-500 ease-in-out px-4"
            style="height: 0; overflow: hidden"
        >
            <p class="py-4 text-gray-600 dark:text-gray-100">
            Мы принимаем детей с 7 лет. Для самых маленьких у нас есть курс
            Scratch...
            </p>
        </div>
        </div>

        <!-- FAQ Item 2 -->
        <div
        class="faq-item border border-gray-200 rounded-lg overflow-hidden mb-4 dark:bg-gray-800"
        >
        <button
            class="toggle-btn w-full flex justify-between items-center p-4 text-left"
        >
            <span class="font-medium"
            >Нужен ли ребенку свой компьютер для занятий?</span
            >
            <i
            class="fas fa-chevron-down text-indigo-600 transition-transform duration-300 rotate-0"
            ></i>
        </button>
        <div
            class="toggle-content transition-all duration-500 ease-in-out px-4"
            style="height: 0; overflow: hidden"
        >
            <p class="py-4 text-gray-600 dark:text-gray-100">
            Да, для занятий потребуется компьютер или ноутбук с доступом в
            интернет. На некоторых курсах (например, Unity или
            веб-разработка) лучше подойдет устройство с более мощными
            характеристиками. 
            </p>
        </div>
        </div>

        <!-- FAQ Item 3 -->
        <div
        class="faq-item border border-gray-200 rounded-lg overflow-hidden mb-4 dark:bg-gray-800"
        >
        <button
            class="toggle-btn w-full flex justify-between items-center p-4 text-left"
        >
            <span class="font-medium">Как проходят занятия?</span>
            <i
            class="fas fa-chevron-down text-indigo-600 transition-transform duration-300 rotate-0"
            ></i>
        </button>
        <div
            class="toggle-content transition-all duration-500 ease-in-out px-4"
            style="height: 0; overflow: hidden"
        >
            <p class="py-4 text-gray-600 dark:text-gray-100">
            Занятия проходят онлайн в Zoom или других аналогичных платформах (зависит от предпочтений клиента).
            Есть индивидуальные занятие, а так же групповые (до 6 человек), что позволяет преподавателю
            уделять внимание каждому ребенку. После каждого урока дается
            домашнее задание для закрепления материала.
            </p>
        </div>
        </div>

        <!-- FAQ Item 4
            <div class="mb-4 border border-gray-200 rounded-lg faq-item overflow-hidden">
                <button class="toggle-btn w-full flex justify-between items-center p-4 text-left">
                    <span class="font-medium">Можно ли получить налоговый вычет за обучение?</span>
                    <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300 rotate-0"></i>
                </button>
                <div class="toggle-content transition-all duration-500 ease-in-out px-4">
                    <p class="text-gray-600">
                        Да, наша школа имеет лицензию на образовательную деятельность, поэтому вы можете получить налоговый вычет в размере 13% от стоимости обучения (но не более установленного законом лимита). Мы предоставляем все необходимые документы для налоговой.
                    </p>
                </div>
            </div> -->

        <!-- FAQ Item 5 -->
        <div
        class="faq-item border border-gray-200 rounded-lg overflow-hidden mb-4 dark:bg-gray-800"
        >
        <button
            class="toggle-btn w-full flex justify-between items-center p-4 text-left"
        >
            <span class="font-medium"
            >Что если ребенок пропустил занятие?</span
            >
            <i
            class="fas fa-chevron-down text-indigo-600 transition-transform duration-300 rotate-0"
            ></i>
        </button>
        <div
            class="toggle-content transition-all duration-500 ease-in-out px-4"
            style="height: 0; overflow: hidden"
        >
            <p class="py-4 text-gray-600 dark:text-gray-100">
               В случае, если ребёнок пропустил занятие, его 
               можно будет перенести или отработать. Если же это 
               было групповое занятие, ребёнок сможет посмотреть запись 
               прошлой встречи и уточнить непонятный материал у преподавателя.
            </p>
        </div>
        </div>

        <!-- FAQ Item 6 -->
        <div
        class="faq-item border border-gray-200 rounded-lg overflow-hidden mb-4 dark:bg-gray-800"
        >
        <button
            class="toggle-btn w-full flex justify-between items-center p-4 text-left"
        >
            <span class="font-medium">Какой курс выбрать для начала?</span>
            <i
            class="fas fa-chevron-down text-indigo-600 transition-transform duration-300 rotate-0"
            ></i>
        </button>
        <div
            class="toggle-content transition-all duration-500 ease-in-out px-4"
            style="height: 0; overflow: hidden"
        >
            <p class="py-4 text-gray-600 dark:text-gray-100">
            Выбор курса зависит от возраста и интересов ребенка. Детям 7-10
            лет рекомендуем начать со Scratch. Если ребенок любит Unity
            или Roblox — соответствующие курсы. Подросткам 12+ можно
            начинать с Python или веб-разработки. Если сомневаетесь —
            запишитесь на бесплатный пробный урок, наш методист поможет
            подобрать подходящий курс.
            <br>
            <br>
           <b>C Нетерпение Ждём Вас На Наших Курсках :)</b> 
            </p>
        </div>
        </div>
    </div>
    </div>
</section>

<!-- Contact -->
@include('includes.contact.contact')

<!-- Payment Methods -->
@include('includes.pay.pay')

<!-- New Sletters -->
@include('includes.new_sletter.new_sletter')
@endsection
