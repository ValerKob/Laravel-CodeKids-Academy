@extends('layouts.main')

@section('title', 'Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Курсы -->
<section id="courses" class="py-16">
    <div class="container mx-auto px-4">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">
        Искусственный Интеллект - Ai
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto dark:text-gray-100">
        Мы сделали удобный сервис: все AI-инструменты собраны на одной странице, 
        отсортированы по категориям и оформлены в приятном интерфейсе.
        </p>
    </div>

    <div class="mb-8 flex flex-wrap justify-center gap-4">
        <button
        class="filter-btn active bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 !rounded-button font-medium whitespace-nowrap"
        data-age="all"
        >
        Все Нейронки
        </button>
        <button
        class="filter-btn px-4 py-2 !rounded-button font-medium hover:bg-gray-300 transition whitespace-nowrap bg-gray-200 text-gray-700"
        data-age="text-ai"
        >
        Текстовые
        </button>
        <button
        class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 !rounded-button font-medium hover:bg-gray-300 transition whitespace-nowrap"
        data-age="graphic-ai"
        >
        Графические
        </button>
        <button
        class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 !rounded-button font-medium hover:bg-gray-300 transition whitespace-nowrap"
        data-age="video-ai"
        >
        Видео
        </button>
         <button
        class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 !rounded-button font-medium hover:bg-gray-300 transition whitespace-nowrap"
        data-age="presentations-ai"
        >
        Презентаций
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Нейронка 1 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card text-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai/chat_gpt.webp');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Платный (Нужен VPN)</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >Есть бесплатный период.</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            ChatGPT
            </h3>
            <p class="mb-4 text-gray-600 dark:text-gray-100">
            Умный ИИ-ассистент для учебы, работы и идей.
            Поможет с текстами, кодом и любыми вопросами.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span>
            <a
                href="https://chatgpt.com/"
                class="text-blue-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Нейронка 2 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card text-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai/deepseek_ai.png');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Бесплатный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >Ай Тигр)</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            DeepSeek
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Открытая китайская LLM-нейросеть, сравнимая с GPT-4 по возможностям, 
            но дешевле и быстрее; доступна бесплатно и в виде API.
            </p>
            <div class="flex justify-between items-center">
             <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="https://chat.deepseek.com/"
                class="text-green-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Нейронка 3 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card text-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai/gemini_ai.jpeg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Бесплатный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >От Google.</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Gemini
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Модель Google для текста, картинок и кода.
            Доступна прямо в поиске.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="https://gemini.google.com/"
                class="text-green-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Нейронка 4 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card text-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai/gigachat_ai.jpg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Бесплатный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >От Сбера</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            GigaChat
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Российская нейросеть от Сбера для текста, кода и изображений.
            Поддерживает русский язык, генерацию контента и бизнес-интеграции.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="https://giga.chat/"
                class="text-green-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Нейронка 5 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card graphic-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai/midJourney_ai.jpg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Платный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >Есть бесплатный период.</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            MidJourney
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
             ИИ для художественной генерации изображений.
             Особенно хорош в концепт-арте и стилизованных иллюстрациях.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="{{ route('roblox_middle') }}"
                class="text-purple-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>
        <!-- Нейронка 6 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card graphic-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai/kandinsky_ai.jpeg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Платный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >20 картинок бесплатно.</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Kandinsky
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Российская нейросеть от Сбера для генерации изображений и видео по тексту.
            Поддерживает редактирование, микширование и улучшение картинок.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="https://fusionbrain.ai/editor/"
                class="text-purple-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>
        <!-- Нейронка 7 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card graphic-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="background-image: url('./assets/images/main/ai/leonardo_ai.webp')"
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Платный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >Есть 5 бесплатных картинок.</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Leonardo
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Австралийская нейросеть для генерации изображений и 3D-моделей по тексту.
            Поддерживает различные художественные стили и редактирование в реальном времени.
            Идеальна для дизайнеров, художников и разработчиков игр.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="https://app.leonardo.ai/"
                class="text-purple-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>
        <!-- Нейронка 8 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card video-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai/runway_ai.png');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Платный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >Есть 3 генерации бесплатно.</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Runway ML
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Генерация и редактирование видео с помощью ИИ.
            Поддерживает текстовые подсказки, замены фона и эффекты в реальном времени.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="https://app.runwayml.com/login"
                class="text-purple-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Нейронка 9 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card video-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai/kaiber_ai.webp');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Платный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >Ай Тигр.</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Kaiber AI
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
                Создание анимаций и видеороликов по тексту или картинкам.
                Используется для концепт-артов и коротких видеороликов.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="https://kaiber.ai/register"
                class="text-purple-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>

        <!-- Нейронка 10 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card video-ai"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/ai/pika_labs_ai.jpeg');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Платный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >Ай Лев.</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Pika Labs
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
            Генерация 3D и 2D видео из текста с возможностью кастомизации сцены.
            Подходит для маркетинга, соцсетей и креативных проектов.
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="https://pika.art/login"
                class="text-purple-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
                <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-arrow-right-line"></i>
                </div>
            </a>
            </div>
        </div>
        </div>
        <!-- Курс 13 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card presentations-ai"
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
                >Платная</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >Есть бесплатные презентаций.</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Gamma
            </h3>
            <p class="text-gray-600 mb-4 dark:text-gray-100">
                Нейросеть для быстрого создания презентаций, документов и веб-сайтов.
                Автоматически подбирает макеты, слайды и визуальные элементы.
                Простая в использовании, не требует навыков дизайна или программирования
            </p>
            <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-primary">
                {{-- Тут что-то будет --}}
            </span> 
            <a
                href="https://gamma.app/"
                class="text-purple-600 font-medium flex items-center hover:underline"
                target="_blank"
            >
                Перейти
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

<!-- Contact -->
@include('includes.contact.contact')

<!-- Payment Methods -->
@include('includes.pay.pay')

<!-- New Sletters -->
@include('includes.new_sletter.new_sletter')
@endsection
