@extends('layouts.main')

@section('title', 'Разработка игр в Roblox (Junior) - Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Hero Section -->
<section class="hero-pattern py-12 md:py-20">
  <div
    class="container mx-auto px-4 flex flex-col md:flex-row items-center"
  >
    <div class="md:w-1/2 mb-8 md:mb-0">
      <div
        class="inline-block px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm font-medium mb-4"
      >
        Для детей 7-9 лет
      </div>
      <h1 class="text-4xl md:text-5xl font-heading font-bold mb-6">
        Разработка <br />
        игр в Roblox (Junior)
      </h1>
      <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-lg">
        Создание собственных игр на платформе Roblox с использованием языка
        Lua.
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
        src="./../assets/images/pages/roblox_junior.jpg"
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
            Курс «Разработка игр в Roblox» создан для детей 7–9 лет, которые
            мечтают создавать свои собственные игры и миры на популярной
            платформе Roblox. Мы учим детей основам визуального и текстового
            программирования с использованием языка Lua в Roblox Studio.
          </p>
          <p class="text-lg">
            Занятия проходят в игровом формате: ребёнок создаёт собственные
            уровни, управляет персонажами и изучает логику геймдизайна.
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
                Основы Roblox Studio
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Работаем с 3D-сценами, объектами и игровыми элементами
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
                Язык программирования Lua
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Изучаем команды, события и скрипты для управления игровыми
                механиками
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
                Геймдизайн
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Планируем уровни, балансируем сложность и создаём интересный
                игровой процесс
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
                Создание и публикация игр
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Ребёнок сделает собственную игру и научится выкладывать её
                на платформе Roblox
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
                Каждый ученик создаёт полноценную игру с интерфейсом и
                заданиями
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
                    class="fas fa-lock-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span
                    >Занятия проходят на нашей платформе с интерактивной
                    доской</span
                  >
                </li>
                <li class="flex items-start">
                  <i
                    class="fas fa-lock-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span>Можно заниматься из любой точки мира</span>
                </li>
                <li class="flex items-start">
                  <i
                    class="fas fa-lock-circle text-accent-500 mt-1 mr-2"
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
                    class="fas fa-lock-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span
                    >Группы до 8 человек для индивидуального подхода</span
                  >
                </li>
                <li class="flex items-start">
                  <i
                    class="fas fa-lock-circle text-accent-500 mt-1 mr-2"
                  ></i>
                  <span>1 занятие в неделю по 60 минут</span>
                </li>
                <li class="flex items-start">
                  <i
                    class="fas fa-lock-circle text-accent-500 mt-1 mr-2"
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
                  ><strong>Установленный Roblox Studio</strong> (поможем с
                  установкой на первом занятии)</span
                >
              </li>
              <li class="flex items-start">
                <i class="fas fa-child text-secondary-500 mt-1 mr-3"></i>
                <span
                  ><strong>Возраст:</strong> 7–9 лет. Предыдущий опыт
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
    class="container mx-auto bg-white rounded-lg shadow-sm p-6 mb-8 dark:bg-gray-800"
  >
    <h2 class="text-3xl font-bold mb-6">Программа курса</h2>

    <div class="space-y-6">
      <!-- Модуль 1 -->
      <div class="border border-gray-200 rounded-lg p-4">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="font-semibold">
              Модуль 1: Изучаем основы в Roblox Studio.
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-100">
              5 урока • 5 часа
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
                <span class="text-gray-400"
                  >Учимся взаимодействовать с объектами Part и Cylinder.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Изучаем как работать с Folder, Explorer, Properties.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Работаем со свойствами объектов Appearance, Data, Transform.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Изучаем вкалдку Model, учимся генерировать ландшафт.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Повторяем материал и изучаем новую вкладку Create свойства (Hinge и Weld).</span
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
              Модуль 2: Создаём свой мир (Изучам язык программирования Lua).
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
                  >Работаем с моделями, основы языка программирования Lua. Да да, тут напишешь свой первый код)</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Пишим скрипт, для создания Дня и Ночи. Заставим с тобой вращаться солнце;)</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Погружаемся в изучение if, for, while и других синтаксических операторов </span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Создаём анимаций, изучаем свойства Effects, Material, color. Сделам этот мир ярче.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400">Закрепляем материал, повторяем свойства Union, Intersect, Negate, Separate.</span>
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
              Модуль 3: Содаём логику и анимацию в игре с помощью языка Lua.
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-100">
              5 урока • 5 часа
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
                  >Создаём сюжетную линию в нашей игре.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Создаём квесты в нашей игре.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Реализуем телепортацию и анимации в игре.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Дублируем свой построики, строим город и выкладываем в сеть</span
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
            <h3 class="font-semibold">
              Модуль 4: Создаём свой шутеры, гонки, квесты.
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-100">
              4 уроков • 4 часов
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
                  >Создаём шутер, делать очки опыта и здоровья.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Создаём гонки, делаем гоночную трассу, старт и финишь. Тут мы с тобой, заставим всё кататься.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Реализуаем систему диалогов, анимаций, покупки и продажи.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Повторение пройденного материала. И выкладываем в Roblox Player наши игры.</span
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
              Модуль 5: Разработка многопользовательских игр.
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
                  >Создаем карту, с помощью Editor, ToolBox, Material</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Делам возможность разрабатывать игру с другом или компанией.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Работаем с языком  Lua, пишем скирпт для создания команд.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Делам диалоги, переходы, создаём свой объекты и множим их с помощью скрипта.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Проверяем работу игры, доделываем анимаций и переходы.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Выкладываем игру в сеть и тестируем.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Закрепляем пройденный материал и делаем своё мини-портфолио.</span
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