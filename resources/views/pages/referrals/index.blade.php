@extends('layouts.main')

@section('title', 'Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Курсы -->
<section id="courses" class="py-16">
    <div class="container mx-auto px-4">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">
        Станьте нашим рефералом
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto dark:text-gray-100">
        Мы сделали удобный сервис: все реферальные и партнерские программы собраны на одной странице, 
        отсортированы по категориям и оформлены в приятном интерфейсе.
        </p>
    </div>

    <div class="mb-8 flex flex-wrap justify-center gap-4">
        <button
        class="filter-btn active bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 !rounded-button font-medium whitespace-nowrap"
        data-age="all"
        >
        Все Реферальные ссылки
        </button>
        <button
        class="filter-btn px-4 py-2 !rounded-button font-medium hover:bg-gray-300 transition whitespace-nowrap bg-gray-200 text-gray-700"
        data-age="text-yandex"
        >
        Яндекс
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Нейронка 1 -->
        <div
        class="bg-white text-gray-800 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition course-card text-yandex"
        >
        <div
            class="h-48 bg-cover bg-center"
            style="
            background-image: url('./assets/images/main/referrals/yandex_org.webp');
            "
        ></div>
        <div class="p-6">
            <div class="flex justify-between items-center mb-3">
            <span
                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded"
                >Бесплатный</span
            >
            <span class="text-gray-500 text-sm dark:text-gray-300"
                >Есть встроенный КриптоПро</span
            >
            </div>
            <h3 class="text-xl font-bold text-primary mb-2">
            Яндекс Браузера для организаций
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
                href="https://ya.cc/827xfV"
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
