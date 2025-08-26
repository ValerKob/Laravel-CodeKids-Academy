@extends('layouts.main')

@section('title', 'Веб-разработка (Middle) - Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Hero Section -->
<section class="hero-pattern py-12 md:py-20">
  <div
    class="container mx-auto px-4 flex flex-col md:flex-row items-center"
  >
    <div class="md:w-1/2 mb-8 md:mb-0">
      <div
        class="inline-block px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full text-sm font-medium mb-4"
      >
        Для детей 14-18 лет
      </div>
      <h1 class="text-4xl md:text-5xl font-heading font-bold mb-6">
        Веб-разработка <br />
        (Middle)
      </h1>
      <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-lg">
        HTML, CSS, JavaScript, PHP и Python для создания собственных
        веб-сайтов и интерактивных проектов.
      </p>
      <div
        class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4"
      >
        <a
          href="#contact"
          class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition shadow-lg hover:shadow-primary-200/50 dark:hover:shadow-primary-900/20"
        >
          Записаться на курс
        </a>
        <!-- <button class="px-6 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-gray-800 rounded-lg font-medium transition">
                    <i class="fas fa-play mr-2"></i> Видео о курсе
                </button> -->
      </div>
    </div>
    <div class="md:w-1/2 flex justify-center">
      <img
        src="./../assets/images/pages/web_middle.jpg"
        alt="Дети программируют"
        class="rounded-xl shadow-xl w-full max-w-md animate-float"
      />
    </div>
  </div>
</section>

<!-- Course Details -->
<section class="pt-12 bg-white dark:bg-gray-900">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Main Content -->
      <div class="lg:w-2/3">
        <!-- About Course -->
        <div class="mb-12">
          <h2 class="text-3xl font-heading font-bold mb-6">О курсе</h2>
          <p class="text-lg mb-6">
            Этот курс по веб-разработке предназначен для подростков 14–18
            лет, которые хотят освоить создание современных сайтов и
            веб-приложений. Мы изучаем HTML, CSS, JavaScript, а также основы
            серверной разработки на PHP и Python.
          </p>
          <p class="text-lg">
            Программа построена на практике: с первых уроков дети создают
            настоящие веб-проекты и постепенно переходят к более сложным
            задачам.
          </p>
        </div>

        <!-- What You'll Learn -->
        <div class="mb-12">
          <h2 class="text-3xl font-heading font-bold mb-6">
            Что будем изучать
          </h2>
          <div class="grid md:grid-cols-2 gap-4">
            <div
              class="p-5 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700"
            >
              <div
                class="w-10 h-10 rounded-full bg-primary-100 dark:bg-primary-900 flex items-center justify-center mb-3"
              >
                <i
                  class="fas fa-code text-primary-600 dark:text-primary-400"
                ></i>
              </div>
              <h3 class="font-heading font-bold text-lg mb-2">
                HTML и CSS
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Создание структуры и стиль страниц
              </p>
            </div>
            <div
              class="p-5 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700"
            >
              <div
                class="w-10 h-10 rounded-full bg-secondary-100 dark:bg-secondary-900 flex items-center justify-center mb-3"
              >
                <i
                  class="fas fa-random text-secondary-600 dark:text-secondary-400"
                ></i>
              </div>
              <h3 class="font-heading font-bold text-lg mb-2">
                JavaScript
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Интерактивные элементы и динамика на сайте
              </p>
              <p></p>
            </div>

            <div
              class="p-5 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700"
            >
              <div
                class="w-10 h-10 rounded-full bg-accent-100 dark:bg-accent-900 flex items-center justify-center mb-3"
              >
                <i
                  class="fas fa-trophy text-accent-600 dark:text-accent-400"
                ></i>
              </div>
              <h3 class="font-heading font-bold text-lg mb-2">
                PHP и Python
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Основы серверной логики и взаимодействия с базами данных
              </p>
            </div>
            <div
              class="p-5 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700"
            >
              <div
                class="w-10 h-10 rounded-full bg-primary-100 dark:bg-primary-900 flex items-center justify-center mb-3"
              >
                <i
                  class="fas fa-gamepad text-primary-600 dark:text-primary-400"
                ></i>
              </div>
              <h3 class="font-heading font-bold text-lg mb-2">
                Фреймворки и инструменты
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Знакомство с Bootstrap, GitHub и простыми API
              </p>
            </div>
            <div
              class="p-5 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700"
            >
              <div
                class="w-10 h-10 rounded-full bg-secondary-100 dark:bg-secondary-900 flex items-center justify-center mb-3"
              >
                <i
                  class="fas fa-project-diagram text-secondary-600 dark:text-secondary-400"
                ></i>
              </div>
              <h3 class="font-heading font-bold text-lg mb-2">
                Финальный проект
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Каждый ученик создаст личный сайт и мини-портфолио
              </p>
            </div>
            <div
              class="p-5 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700"
            >
              <div
                class="w-10 h-10 rounded-full bg-accent-100 dark:bg-accent-900 flex items-center justify-center mb-3"
              >
                <i
                  class="fas fa-trophy text-accent-600 dark:text-accent-400"
                ></i>
              </div>
              <h3 class="font-heading font-bold text-lg mb-2">
                Сертификат
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                По окончании курса выдается красочный сертификат о
                прохождении
              </p>
            </div>
          </div>
        </div>

        <!-- Learning Format -->
        <div class="mb-12">
          <h2 class="text-3xl font-heading font-bold mb-6">
            Формат обучения
          </h2>
          <div class="grid md:grid-cols-2 gap-6">
            <div
              class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700"
            >
              <h3
                class="font-heading font-bold text-xl mb-4 flex items-center"
              >
                <i class="fas fa-laptop-house text-primary-500 mr-3"></i>
                Онлайн-занятия
              </h3>
              <ul class="space-y-3">
                <li class="flex items-start">
                  <i
                    class="fas fa-check-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span
                    >Занятия проходят на нашей платформе с интерактивной
                    доской</span
                  >
                </li>
                <li class="flex items-start">
                  <i
                    class="fas fa-check-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span>Можно заниматься из любой точки мира</span>
                </li>
                <li class="flex items-start">
                  <i
                    class="fas fa-check-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span>Записи занятий доступны в личном кабинете</span>
                </li>
              </ul>
            </div>
            <div
              class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700"
            >
              <h3
                class="font-heading font-bold text-xl mb-4 flex items-center"
              >
                <i class="fas fa-users text-secondary-500 mr-3"></i>
                Групповые занятия
              </h3>
              <ul class="space-y-3">
                <li class="flex items-start">
                  <i
                    class="fas fa-check-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span
                    >Группы до 8 человек для индивидуального подхода</span
                  >
                </li>
                <li class="flex items-start">
                  <i
                    class="fas fa-check-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span>1 занятие в неделю по 60 минут</span>
                </li>
                <li class="flex items-start">
                  <i
                    class="fas fa-check-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span>Домашние задания с проверкой преподавателем</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Requirements -->
        <div class="mb-12">
          <h2 class="text-3xl font-heading font-bold mb-6">
            Технические требования
          </h2>
          <div
            class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700"
          >
            <ul class="space-y-3">
              <li class="flex items-start">
                <i class="fas fa-desktop text-primary-500 mt-1 mr-3"></i>
                <span
                  ><strong>Компьютер/ноутбук</strong> с Windows или
                  macOS</span
                >
              </li>
              <li class="flex items-start">
                <i class="fas fa-wifi text-secondary-500 mt-1 mr-3"></i>
                <span
                  ><strong>Стабильный интернет</strong> для
                  онлайн-занятий</span
                >
              </li>
              <li class="flex items-start">
                <i class="fas fa-microphone text-accent-500 mt-1 mr-3"></i>
                <span
                  ><strong>Наушники с микрофоном</strong> для общения с
                  преподавателем</span
                >
              </li>
              <li class="flex items-start">
                <i class="fas fa-download text-primary-500 mt-1 mr-3"></i>
                <span
                  ><strong>Современный браузер</strong>(Google Chrome или
                  аналог)</span
                >
              </li>
              <li class="flex items-start">
                <i class="fas fa-download text-primary-500 mt-1 mr-3"></i>
                <span
                  ><strong
                    >Текстовый редактор (например, Visual Studio
                    Code)</strong
                  >
                  (поможем с установкой на первом занятии)</span
                >
              </li>
              <li class="flex items-start">
                <i class="fas fa-child text-secondary-500 mt-1 mr-3"></i>
                <span
                  ><strong>Возраст:</strong> 14–18 лет. Предыдущий опыт
                  программирования не требуется!</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900">
  <!-- Программа курса -->
  <div
    class="container dark:bg-gray-800 mx-auto bg-white rounded-lg shadow-sm p-6 mb-8"
  >
    <h2 class="text-3xl font-bold mb-6">Программа курса</h2>

    <div class="space-y-6">
      <!-- Модуль 1 -->
      <div class="border border-gray-200 rounded-lg p-4">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="font-semibold">Модуль 1: Основы веб-строительства. Погружение в HTML.</h3>
            <p class="text-sm text-gray-600 dark:text-gray-100">
              4 урока • 4 часа
            </p>
          </div>
          <button
            class="toggle-btn w-8 h-8 flex items-center justify-center text-gray-500 hover:bg-gray-100 rounded-full"
          >
            <i
              class="ri-arrow-down-s-line transition-transform duration-300 rotate-180"
            ></i>
          </button>
        </div>

        <div
          class="toggle-content overflow-hidden transition-all duration-500 ease-in-out"
          style="height: auto"
        >
          <div class="inner p-0">
            <div class="mb-3">
              <div class="progress-bar">
                <div class="progress" style="width: 100%"></div>
              </div>
            </div>

            <ul class="space-y-3">
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400">Первые шаги в HTML</span>
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Оформление контента: текст, изображения и списки.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Таблицы и блоки. Тот самый, легендарный (DIV)!</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Закрепляем пройденный материал.</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Модуль 2 -->
      <div class="border border-gray-200 rounded-lg p-4">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="font-semibold">
              Модуль 2: CSS: стиль, порядок, магия
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-100">
              7 уроков • 7 часов
            </p>
          </div>
          <button
            class="toggle-btn w-8 h-8 flex items-center justify-center text-gray-500 hover:bg-gray-100 rounded-full"
          >
            <i
              class="ri-arrow-down-s-line transition-transform duration-300"
            ></i>
          </button>
        </div>

        <div
          class="toggle-content overflow-hidden transition-all duration-500 ease-in-out"
          style="height: 0"
        >
          <div class="inner p-0">
            <div class="mb-3">
              <div class="progress-bar">
                <div class="progress" style="width: 100%"></div>
              </div>
            </div>

            <ul class="space-y-3">
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Основы стилей: цвета, шрифты и селекторы. Изучаем CSS.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Продвинутые селекторы и каскадность стилей. :focus, :active.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Контейнеры, эффекты наведения и интерактивные элементы. :hover.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Верстка по макету: Flexbox в действии.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Отступы, размеры и плавные переходы</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Grid и Анимации. :animation.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Закрепляем пройденный материал.</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Модуль 3 -->
      <div class="border border-gray-200 rounded-lg p-4">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="font-semibold">
              Модуль 3: JavaScript с нуля до интерактива. Это JS Друг мой.
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-100">
              5 уроков • 5 часов
            </p>
          </div>
          <button
            class="toggle-btn w-8 h-8 flex items-center justify-center text-gray-500 hover:bg-gray-100 rounded-full"
          >
            <i
              class="ri-arrow-down-s-line transition-transform duration-300"
            ></i>
          </button>
        </div>

        <div
          class="toggle-content overflow-hidden transition-all duration-500 ease-in-out"
          style="height: 0"
        >
          <div class="inner p-0">
            <div class="mb-3">
              <div class="progress-bar">
                <div class="progress" style="width: 100%"></div>
              </div>
            </div>

            <ul class="space-y-3">
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Знакомство с JavaScript. Почему он так крут!</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Функция, ловим нажатия и действия пользователя на странице.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Условия, циклы, массивы. Храним данные, Даа ТЕ самые COOKIES (Печеньки).</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Основы ООП. Тема где ты всё по папкам сортируешь.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Закрепляем пройденный материал.</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Модуль 4 -->
      <div class="border border-gray-200 rounded-lg p-4">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="font-semibold">Модуль 4: Создаём свой Snake (Змейку) на сайте)</h3>
            <p class="text-sm text-gray-600 dark:text-gray-100">
              4 урока • 4 часа
            </p>
          </div>
          <button
            class="toggle-btn w-8 h-8 flex items-center justify-center text-gray-500 hover:bg-gray-100 rounded-full"
          >
            <i
              class="ri-arrow-down-s-line transition-transform duration-300"
            ></i>
          </button>
        </div>

        <div
          class="toggle-content overflow-hidden transition-all duration-500 ease-in-out"
          style="height: 0"
        >
          <div class="inner p-0">
            <div class="mb-3">
              <div class="progress-bar">
                <div class="progress" style="width: 100%"></div>
              </div>
            </div>

            <ul class="space-y-3">
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Структурируем проект.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Все начинаем красить.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Тут мы делаем всю логику игры на js.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Тестируем и Закрепляем пройденный материал.</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Модуль 5 -->
      <div class="border border-gray-200 rounded-lg p-4">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="font-semibold">
              Модуль 5: Командная разработка, изучаем запросы Git, Работаем с тем самым GitHub.
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-100">
              6 уроков • 6 часов
            </p>
          </div>
          <button
            class="toggle-btn w-8 h-8 flex items-center justify-center text-gray-500 hover:bg-gray-100 rounded-full"
          >
            <i
              class="ri-arrow-down-s-line transition-transform duration-300"
            ></i>
          </button>
        </div>

        <div
          class="toggle-content overflow-hidden transition-all duration-500 ease-in-out"
          style="height: 0"
        >
          <div class="inner p-0">
            <div class="mb-3">
              <div class="progress-bar">
                <div class="progress" style="width: 100%"></div>
              </div>
            </div>

            <ul class="space-y-3">
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Git: история и работа с репозиториями/</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >VS Code, терминал и работа с ветками.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Планирование группового проекта</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400">Совместная вёрстка</span>
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Программирование логики приложения</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Закрепляем пройденный материал и делаем Публикацию проекта: хостинг и запуск</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div
    class="container mx-auto bg-white rounded-lg shadow-sm p-6 mb-8 dark:bg-gray-800"
  >
    <!-- Learning Format -->
    <div class="mb-12">
      <h2 class="text-3xl font-heading font-bold mb-6">
        Тарифы на занятия
      </h2>
      <div class="card-container">
        <!-- Кнопка 1 -->
        <div
          class="card-1 bg-white rounded p-6 flex flex-col dark:bg-gray-800"
        >
          <h3 class="text-xl font-bold mb-2">Знакомство</h3>
          <div class="text-primary-500 text-2xl font-bold mb-4">
            Бесплатно
            <span class="text-gray-500 text-base font-normal"
              >первое занятие</span
            >
          </div>
          <ul class="flex-grow space-y-3 mb-6">
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Поддержка в чате</span>
            </li>
          </ul>
          <a
            href="#contact"
            class="w-full bg-primary-500 text-white text-center py-3 !rounded-button font-medium hover:bg-primary-500/90 transition whitespace-nowrap"
          >
            Записаться
          </a>
          <p class="text-center text-gray-500 mt-4 text-sm">
            Попробуйте первое занятие бесплатно
          </p>
        </div>

        <!-- Кнопка 2 -->
        <div
          class="card-1 bg-white rounded p-6 flex flex-col dark:bg-gray-800"
        >
          <h3 class="text-xl font-bold mb-2">Одно занятие</h3>
          <div class="text-primary-500 text-2xl font-bold mb-4">
            750 ₽
            <span class="text-gray-500 text-base font-normal"
              >Одно занятие</span
            >
          </div>
          <ul class="flex-grow space-y-3 mb-6">
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Доступ к базовым урокам</span>
            </li>
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Проверка домашних заданий</span>
            </li>
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Поддержка в чате</span>
            </li>
          </ul>
          <a
            href="#contact"
            class="w-full text-center bg-primary-500 text-white py-3 !rounded-button font-medium hover:bg-primary-500/90 transition whitespace-nowrap"
          >
            Выбрать тариф
          </a>
          <p class="text-center text-gray-500 mt-4 text-sm">
            Попробуйте первое занятие бесплатно
          </p>
        </div>
        <!-- Кнопка 3 -->
        <div
          class="card-1 bg-white rounded p-6 flex flex-col dark:bg-gray-800"
        >
          <h3 class="text-xl font-bold mb-2">Старт</h3>
          <div class="text-primary-500 text-2xl font-bold mb-4">
            9 750 ₽
            <span class="text-gray-500 text-base font-normal"
              >За 13 уроков</span
            >
          </div>
          <ul class="flex-grow space-y-3 mb-6">
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Доступ к половине урокам</span>
            </li>
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Проверка домашних заданий</span>
            </li>
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Обратная связь</span>
            </li>
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Поддержка в чате</span>
            </li>
          </ul>
          <a
            href="#contact"
            class="w-full text-center bg-primary-500 text-white py-3 !rounded-button font-medium hover:bg-primary-500/90 transition whitespace-nowrap"
          >
            Выбрать тариф
          </a>
          <p class="text-center text-gray-500 mt-4 text-sm">
            Попробуйте первое занятие бесплатно
          </p>
        </div>
        <!-- Кнопка 4 -->
        <div
          class="card-1 bg-white rounded p-6 flex flex-col dark:bg-gray-800"
        >
          <h3 class="text-xl font-bold mb-2">Pro</h3>
          <div class="text-primary-500 text-2xl font-bold mb-4">
            19 500 ₽
            <span class="text-gray-500 text-base font-normal"
              >за 26 уроков</span
            >
          </div>
          <ul class="flex-grow space-y-3 mb-6">
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Доступ ко всем урокам</span>
            </li>
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Проверка домашних заданий</span>
            </li>
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Обратная связь</span>
            </li>
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Отчёт родителю об успехах ребёнка каждый месяц</span>
            </li>
            <li class="flex items-start">
              <div
                class="w-5 h-5 flex items-center justify-center text-primary-500 mr-2"
              >
                <i class="ri-check-line"></i>
              </div>
              <span>Поддержка в чате</span>
            </li>
          </ul>
          <a
            href="#contact"
            class="w-full text-center bg-primary-500 text-white py-3 !rounded-button font-medium hover:bg-primary-500/90 transition whitespace-nowrap"
          >
            Выбрать тариф
          </a>
          <p class="text-center text-gray-500 mt-4 text-sm">
            Попробуйте первое занятие бесплатно
          </p>
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
