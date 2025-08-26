@extends('layouts.main')

@section('title', 'Пользовательское соглашение - Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Main -->
<!-- Основной контент -->
<main class="container mx-auto px-4 py-8">
  <div class="max-w-4xl mx-auto">
    <!-- Заголовок -->
    <div class="text-center mb-12">
      <h1 class="text-3xl md:text-4xl font-bold mb-4">
        Пользовательское соглашение
      </h1>
      <p class="text-gray-600 dark:text-gray-100">
        Дата вступления в силу:
        <span id="current-date" class="font-medium"></span>
      </p>
    </div>

    <!-- Навигация по разделам (для мобильных) -->
    <div class="md:hidden mb-8">
      <select
        id="mobile-nav"
        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-gray-100"
      >
        <option value="general">1. Введение</option>
        <option value="data-collection">2. Общие положения</option>
        <option value="data-purpose">3. Регистрация и безопасность</option>
        <option value="third-parties">4. Обязанности пользователей</option>
        <option value="data-protection">
          5. Обязанности CodeKids Academy
        </option>
        <option value="user-rights">
          6. Конфиденциальность и защита данных
        </option>
        <option value="payments-and-refunds">7. Платежи и возвраты</option>
        <option value="content-usage">8. Использование контента</option>
        <option value="termination-services">
          9. Прекращение использования услуг
        </option>
        <option value="changes-agreement">
          10. Изменения в соглашении
        </option>
        <option value="final-provisions">
          11. Заключительные положения
        </option>
      </select>
    </div>

    <!-- Основной контент с боковой навигацией -->
    <div class="flex flex-col md:flex-row gap-8">
      <!-- Боковая навигация (для десктопа) -->
      <aside class="md:w-64 flex-shrink-0 hidden md:block">
        <nav class="sticky top-24 space-y-2">
          <a
            href="#general"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition active-section"
            data-section="general"
            >1. Введение</a
          >
          <a
            href="#data-collection"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="data-collection"
            >2. Общие положения</a
          >
          <a
            href="#data-purpose"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="data-purpose"
            >3. Регистрация и безопасность</a
          >
          <a
            href="#third-parties"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="third-parties"
            >4. Обязанности пользователей</a
          >
          <a
            href="#data-protection"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="data-protection"
            >5. Обязанности CodeKids Academy</a
          >
          <a
            href="#user-rights"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >6. Конфиденциальность и защита данных</a
          >
          <a
            href="#payments-and-refunds"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >7. Платежи и возвраты</a
          >
          <a
            href="#content-usage"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >8. Использование контента</a
          >
          <a
            href="#termination-services"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >9. Прекращение использования услуг</a
          >
          <a
            href="#changes-agreement"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >10. Изменения в соглашении</a
          >
          <a
            href="#final-provisions"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >11. Заключительные положения</a
          >
        </nav>
      </aside>

      <!-- Контент разделов -->
      <div class="flex-1">
        <!-- Общие положения -->
        <section id="general" class="section-content active mb-12">
          <h2 class="text-2xl font-bold mb-4">1. Введение</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              CodeKids Academy — это онлайн-школа программирования для детей
              и подростков в возрасте от 7 до 18 лет. Мы предлагаем курсы по
              различным направлениям IT, включая основы программирования,
              веб-разработку, создание игр и мобильных приложений.
            </p>
            <div class="highlight-box dark:bg-gray-800 dark:text-gray-100">
              <p class="font-medium">
                <b>
                  Регистрируясь на нашем сайте или записываясь на курсы, вы
                  (родитель или законный представитель) и ваш ребенок
                  соглашаетесь с условиями настоящего пользовательского
                  соглашения.</b
                >
              </p>
            </div>
          </div>
        </section>

        <!-- Сбор персональных данных -->
        <section id="data-collection" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">2. Общие положения</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              2.1. Настоящее соглашение регулирует отношения между CodeKids
              Academy (далее — "Школа") и пользователями услуг (далее —
              "Пользователи").
            </p>
            <p>2.2. Услуги Школы включают:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Онлайн-курсы программирования</li>
              <li>Доступ к учебным материалам и платформе</li>
              <li>Поддержку преподавателей</li>
              <li>Проверку домашних заданий</li>
              <li>Сертификаты об окончании курсов</li>
            </ul>
            <p>2.3. Возрастные ограничения:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Для детей 7-13 лет требуется регистрация и контроль со
                стороны родителей
              </li>
              <li>
                Подростки 14-18 лет могут регистрироваться самостоятельно,
                но родители несут ответственность за их действия
              </li>
            </ul>
          </div>
        </section>

        <!-- Цели обработки данных -->
        <section id="data-purpose" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            3. Регистрация и безопасность
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>3.1. Процесс регистрации:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Для детей младше 14 лет регистрацию осуществляют родители
              </li>
              <li>
                Требуется указать действительный email и телефон родителя
              </li>
              <li>
                Для некоторых курсов может потребоваться дополнительная
                информация
              </li>
            </ul>
            <p>3.2. Обязанности родителей:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Контролировать активность ребенка на платформе</li>
              <li>Обеспечивать соблюдение ребенком правил поведения</li>
              <li>Следить за выполнением домашних заданий</li>
            </ul>
            <div class="highlight-box dark:bg-gray-800 dark:text-gray-100">
              <p class="font-medium">
                <b>
                  Школа принимает все необходимые меры для защиты
                  персональных данных пользователей в соответствии с
                  законодательством РФ. Мы используем шифрование данных и
                  современные системы защиты.</b
                >
              </p>
            </div>
          </div>
        </section>

        <!-- Раскрытие информации третьим лицам -->
        <section id="third-parties" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            4. Обязанности пользователей
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>4.1. Пользователи обязуются:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Предоставлять достоверную информацию при регистрации</li>
              <li>Соблюдать правила поведения на платформе</li>
              <li>
                Не использовать платформу для распространения вредоносного
                ПО
              </li>
              <li>Не нарушать авторские права на учебные материалы</li>
            </ul>
            <p>4.2. Правила поведения:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Запрещены оскорбления преподавателей и других учеников
              </li>
              <li>Запрещено размещение нецензурной лексики</li>
              <li>
                Запрещено распространение личной информации других
                пользователей
              </li>
            </ul>
            <p>4.3. Авторские права:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Все учебные материалы являются собственностью Школы</li>
              <li>
                Запрещено копирование и распространение материалов без
                разрешения
              </li>
              <li>
                Проекты, созданные учениками, могут использоваться Школой в
                портфолио
              </li>
            </ul>
          </div>
        </section>

        <!--  Обязанности CodeKids Academy -->
        <section id="data-protection" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            5. Обязанности CodeKids Academy
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>5.1. Школа обязуется:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Предоставлять доступ к курсам согласно расписанию</li>
              <li>
                Обеспечивать качественную обратную связь по домашним
                заданиям
              </li>
              <li>Поддерживать работоспособность платформы</li>
              <li>Обеспечивать конфиденциальность персональных данных</li>
            </ul>
            <p>5.2. В случае технических проблем Школа:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Предоставит дополнительное время для выполнения заданий
              </li>
              <li>Перенесет занятия при необходимости</li>
              <li>Вернет средства за несостоявшиеся занятия</li>
            </ul>
          </div>
        </section>

        <!-- Конфиденциальность и защита данных -->
        <section id="user-rights" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            6. Конфиденциальность и защита данных
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>6.1. Школа собирает следующие данные:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Персональные данные родителей и учеников</li>
              <li>Данные об успеваемости</li>
              <li>Технические данные (IP, cookies)</li>
            </ul>
            <p>6.2. Данные используются для:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Предоставления образовательных услуг</li>
              <li>Коммуникации с пользователями</li>
              <li>Улучшения качества услуг</li>
            </ul>
            <div class="highlight-box dark:bg-gray-800 dark:text-gray-100">
              <p class="font-medium">
                <b>
                  Все данные хранятся на защищенных серверах на территории
                  РФ. Мы не передаем данные третьим лицам без согласия
                  пользователя, за исключением случаев, предусмотренных
                  законодательством.</b
                >
              </p>
            </div>
          </div>
        </section>

        <!-- Платежи и возвраты -->
        <section id="payments-and-refunds" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">7. Платежи и возвраты</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>7.1. Условия оплаты:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Оплата производится через безопасные платежные системы
              </li>
              <li>Доступ к курсу открывается после подтверждения оплаты</li>
              <li>Возможна оплата частями для некоторых курсов</li>
            </ul>
            <p>7.2. Возврат средств:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Возврат 100% суммы — в течение 3 дней после оплаты</li>
              <li>Возврат 50% суммы — до начала третьего занятия</li>
              <li>После третьего занятия возврат не производится</li>
            </ul>
            <p>7.3. Для возврата необходимо:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Написать заявление на почту support@codekids.academy</li>
              <li>Указать причину возврата</li>
              <li>Приложить платежные документы</li>
            </ul>
          </div>
        </section>

        <!-- Использование контента -->
        <section id="content-usage" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">8. Использование контента</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>8.1. Учебные материалы:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Предназначены только для личного использования</li>
              <li>Запрещено коммерческое использование без разрешения</li>
              <li>Цитирование возможно с указанием источника</li>
            </ul>
            <p>8.2. Проекты учеников:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Могут быть использованы Школой в маркетинговых целях</li>
              <li>Авторские права сохраняются за создателями</li>
              <li>Лучшие проекты могут быть опубликованы на сайте Школы</li>
            </ul>
          </div>
        </section>

        <!-- Прекращение использования услуг -->
        <section id="termination-services" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            9. Прекращение использования услуг
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>9.1. Пользователь может прекратить использование услуг:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>В любой момент, уведомив Школу</li>
              <li>При нарушении условий соглашения Школой</li>
            </ul>
            <p>9.2. Школа может прекратить доступ:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>При нарушении пользователем условий соглашения</li>
              <li>При неоплате услуг</li>
              <li>При некорректном поведении ученика</li>
            </ul>
          </div>
        </section>

        <!-- Изменения в соглашении -->
        <section id="changes-agreement" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            10. Изменения в соглашении
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              10.1. Школа оставляет за собой право вносить изменения в
              соглашение.
            </p>
            <p>10.2. Пользователи будут уведомлены об изменениях:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>По электронной почте</li>
              <li>Через уведомления на платформе</li>
              <li>На главной странице сайта</li>
            </ul>
            <p>
              10.3. Продолжение использования услуг после изменений означает
              согласие с новыми условиями.
            </p>
          </div>
        </section>

        <!-- Заключительные положения -->
        <section id="final-provisions" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            11. Заключительные положения
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              11.1. Настоящее соглашение регулируется законодательством РФ.
            </p>
            <p>11.2. Все споры решаются путем переговоров</p>
            <p>
              11.3. В случае невозможности разрешения спора мирным путем,
              спор передается в суд по месту нахождения Школы.
            </p>
            <div class="highlight-box dark:bg-gray-800 dark:text-gray-100">
              <p class="font-medium">
                <b
                  >По всем вопросам, связанным с пользовательским
                  соглашением, обращайтесь:</b
                >
                <br />
                Email: CodeKidsAcademy@yandex.ru <br />
                Телефон: +7 (960) 000-46-12 <br />
                Адрес: г. Архангельск, ул. Карпогорская, 36
              </p>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
@endsection