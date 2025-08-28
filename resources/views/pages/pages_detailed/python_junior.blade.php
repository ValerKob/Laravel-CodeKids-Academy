@extends('layouts.main')

@section('title', 'Курс по Python (Junior) - Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Hero Section -->
<section class="hero-pattern py-12 md:py-20">
  <div
    class="container mx-auto px-4 flex flex-col md:flex-row items-center"
  >
    <div class="md:w-1/2 mb-8 md:mb-0">
      <div
        class="inline-block px-3 py-1 bg-accent-100 dark:bg-accent-900 text-accent-800 dark:text-accent-200 rounded-full text-sm font-medium mb-4"
      >
        Для детей 10-13 лет
      </div>
      <h1 class="text-4xl md:text-5xl font-heading font-bold mb-6">
        Курс по Python <br />для начинающих (Junior)
      </h1>
      <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-lg">
        Научись создавать собственные игры и приложения с нуля! Наш курс
        поможет освоить основы программирования в увлекательной игровой
        форме.
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
        src="./../assets/images/pages/python_junior.jpg"
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
            Наш курс по Python специально разработан для детей 10-13 лет,
            которые хотят сделать первые шаги в программировании. Мы учим
            через практику - каждый урок включает создание небольших
            проектов, от простых программ до мини-игр.
          </p>
          <p class="text-lg">
            После прохождения курса ваш ребенок не только освоит основы
            Python, но и разовьет логическое мышление, научится решать
            задачи и создаст свои первые проекты, которыми можно гордиться!
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
                Основы Python
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Переменные, типы данных, операторы и основы синтаксиса
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
                Условия и циклы
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Учимся принимать решения в программах и повторять действия
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
              <h3 class="font-heading font-bold text-lg mb-2">Функции</h3>
              <p class="text-gray-600 dark:text-gray-300">
                Создаем собственные команды для повторного использования
                кода
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
                Создание игр
              </h3>
              <p class="text-gray-600 dark:text-gray-300">
                Пишем простые текстовые игры и графические проекты
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
                Каждый ученик создает свою собственную игру или приложение
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
                По окончании курса выдается сертификат о прохождении
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
                  ><strong>Компьютер/ноутбук</strong> с Windows, macOS или
                  Linux</span
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
                  ><strong>Установленный Python 3.x</strong> (поможем с
                  установкой на первом занятии)</span
                >
              </li>
              <li class="flex items-start">
                <i class="fas fa-child text-secondary-500 mt-1 mr-3"></i>
                <span
                  ><strong>Возраст:</strong> 10-13 лет. Опыт
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
              Модуль 1: Знакомство с основами Python. Переменные и типы данных.
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-100">
              5 уроков • 5 часов
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
                <span class="text-gray-400">Погружаемся в мир Python. Тут мы с тобой узнаем, что это за змея такая.</span>
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Работа с данными, учимся их хранить, передавать и обрабатывать.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Символы и тексты. Что такое String.</span
                >
              </li>
               <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Кто такой этот Boolean? А так же String, Integer и Float.</span
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
              Модуль 2: Построение логики программ. Массивы данных. Function - кто она такая?
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
                  >Как работает if: первый шаг к логике. Что если?</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Углублённая логика: условия внутри условий. if, elif, else.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Повторяем действия: цикл for и while. Бесконечность не предел.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400">Работа с массивами, Array, Insert, Remove.</span>
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Многомерный массив. Массивы внутри массивов.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Что такое функция и зачем она нужна. Function.</span
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
              Модуль 3: Очень важная глава Import, Random, Turtle и другие.
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
                  >Изучаем встроенные модули: случайности и время. Import.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400">Что такое Import Random. Новая библиотека.</span>
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Turtle, что за библиотека такая интересная.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Используем циклы для рисования. For + Turtle</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >9 и 11 класс, так вот зачем нужен был Turtle. В ОГЭ и ЕГЭ.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Решаем сложные задачи с черепахами и чертёжниками.</span
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
            <h3 class="font-semibold">Модуль 5: Работа с файлами и Принципы ООП на Python, база базой.</h3>
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
                  >Учимся дробить весь проект по папкам.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Делам возможность отлавливать события пользователя.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Делаем свой личный ежедневник.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400">Делаем свой калькулятор.</span>
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
      <!-- Модуль 5 -->
      <div class="border border-gray-200 rounded-lg p-4">
        <div class="flex justify-between items-start">
          <div>
            <h3 class="font-semibold">Модуль 5: Теперь у нас с тобой есть знания, значит пора Создавать игры с PyGame</h3>
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
                  >Первые шаги в разработке игр.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Работаем с отрисовкой пространства.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Создаем игру змейка. (Часть 1).</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Продолжаем проект змейка (Часть 2).</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Создаем Dodge the Blocks. Увернись от падающих кубов.</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-6 h-6 flex items-center justify-center bg-gray-200 text-gray-500 rounded-full mr-3"
                >
                  <i class="ri-lock-line text-sm"></i>
                </div>
                <span class="text-gray-400"
                  >Закрепляем пройденный материал и создаём мини-портфолио.</span
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
            11 250 ₽
            <span class="text-gray-500 text-base font-normal"
              >За 15 уроков</span
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
            22 500 ₽
            <span class="text-gray-500 text-base font-normal"
              >за 30 уроков</span
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