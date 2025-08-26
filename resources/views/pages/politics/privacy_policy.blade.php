@extends('layouts.main')

@section('title', 'Политика конфиденциальности - Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Main -->
<!-- Основной контент -->
<main class="container mx-auto px-4 py-8">
  <div class="max-w-4xl mx-auto">
    <!-- Заголовок -->
    <div class="text-center mb-12">
      <h1 class="text-3xl md:text-4xl font-bold mb-4">
        Политика конфиденциальности
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
        <option value="general">1. Общие положения</option>
        <option value="data-collection">2. Сбор персональных данных</option>
        <option value="data-purpose">3. Цели обработки данных</option>
        <option value="third-parties">
          4. Раскрытие информации третьим лицам
        </option>
        <option value="data-protection">5. Хранение и защита данных</option>
        <option value="user-rights">6. Права пользователя</option>
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
            >1. Общие положения</a
          >
          <a
            href="#data-collection"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="data-collection"
            >2. Сбор персональных данных</a
          >
          <a
            href="#data-purpose"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="data-purpose"
            >3. Цели обработки данных</a
          >
          <a
            href="#third-parties"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="third-parties"
            >4. Раскрытие информации третьим лицам</a
          >
          <a
            href="#data-protection"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="data-protection"
            >5. Хранение и защита данных</a
          >
          <a
            href="#user-rights"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >6. Права пользователя</a
          >
        </nav>
      </aside>

      <!-- Контент разделов -->
      <div class="flex-1">
        <!-- Общие положения -->
        <section id="general" class="section-content active mb-12">
          <h2 class="text-2xl font-bold mb-4">1. Общие положения</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              1.1. Настоящая Политика конфиденциальности (далее — Политика)
              разработана в соответствии с законодательством Российской
              Федерации и регулирует порядок обработки персональных данных
              пользователей онлайн-школы CodeKids Academy (далее — Школа).
            </p>
            <p>
              1.2. Используя сайт и услуги Школы, вы даете согласие на
              обработку ваших персональных данных в соответствии с настоящей
              Политикой.
            </p>
            <p>
              1.3. Школа обязуется принимать все необходимые меры для защиты
              ваших персональных данных от неправомерного доступа.
            </p>
            <p>
              1.4. Администрация Школы оставляет за собой право вносить
              изменения в настоящую Политику. Актуальная версия всегда
              доступна на нашем сайте.
            </p>
          </div>
        </section>

        <!-- Сбор персональных данных -->
        <section id="data-collection" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            2. Сбор персональных данных
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>2.1. Школа может собирать следующие персональные данные:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Фамилия, имя, отчество</li>
              <li>Контактные данные (электронная почта, телефон)</li>
              <li>Дата рождения</li>
              <li>Данные об образовании (для некоторых курсов)</li>
              <li>Платежные реквизиты (при оплате услуг)</li>
              <li>Данные об успеваемости и прогрессе в обучении</li>
              <li>
                Технические данные (IP-адрес, данные cookies, информация о
                браузере и устройстве)
              </li>
            </ul>
            <p>
              2.2. Персональные данные собираются при регистрации на сайте,
              оформлении заявки на курс, подписке на рассылку, участии в
              опросах и других взаимодействиях с Школой.
            </p>
            <p>
              2.3. Для несовершеннолетних учащихся сбор данных
              осуществляется только с согласия их законных представителей.
            </p>
          </div>
        </section>

        <!-- Цели обработки данных -->
        <section id="data-purpose" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">3. Цели обработки данных</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              3.1. Персональные данные обрабатываются для следующих целей:
            </p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Предоставление образовательных услуг</li>
              <li>Идентификация пользователя</li>
              <li>Обратная связь с пользователем</li>
              <li>Обработка платежей</li>
              <li>
                Улучшение качества услуг и разработка новых образовательных
                продуктов
              </li>
              <li>
                Информирование о новых курсах, акциях и мероприятиях Школы
              </li>
              <li>Выполнение требований законодательства</li>
              <li>Обеспечение безопасности образовательного процесса</li>
            </ul>
            <p>
              3.2. Обработка персональных данных осуществляется с
              использованием автоматизированных систем, а также без
              использования средств автоматизации.
            </p>
          </div>
        </section>

        <!-- Раскрытие информации третьим лицам -->
        <section id="third-parties" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            4. Раскрытие информации третьим лицам
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              4.1. Школа не передает персональные данные третьим лицам, за
              исключением следующих случаев:
            </p>
            <ul class="list-disc pl-6 space-y-2">
              <li>С согласия пользователя</li>
              <li>Для обработки платежей (платежные системы)</li>
              <li>
                Для выполнения требований законодательства (по запросу
                уполномоченных органов)
              </li>
              <li>
                При использовании сторонних сервисов (например, хостинг,
                email-рассылки), при этом обеспечивается конфиденциальность
                данных
              </li>
            </ul>
            <p>
              4.2. При передаче данных третьим лицам Школа заключает
              соответствующие соглашения о конфиденциальности.
            </p>
            <p>
              4.3. Анонимизированные данные могут использоваться для
              статистики и маркетинговых исследований.
            </p>
          </div>
        </section>

        <!-- Хранение и защита данных -->
        <section id="data-protection" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            5. Хранение и защита данных
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              5.1. Персональные данные хранятся на защищенных серверах на
              территории Российской Федерации.
            </p>
            <p>5.2. Срок хранения персональных данных:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Для пользователей, прошедших обучение — 5 лет после
                завершения курса
              </li>
              <li>
                Для пользователей, не завершивших обучение — 3 года после
                последней активности
              </li>
              <li>
                Для платежных данных — в соответствии с требованиями
                платежных систем
              </li>
            </ul>
            <p>
              5.3. Школа принимает технические и организационные меры для
              защиты данных от несанкционированного доступа, утраты или
              уничтожения.
            </p>
            <p>
              5.4. В случае утечки данных Школа уведомит пользователей в
              течение 72 часов с момента обнаружения инцидента.
            </p>
          </div>
        </section>

        <!-- Права пользователя -->
        <section id="user-rights" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">6. Права пользователя</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>6.1. Пользователь имеет право:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Получать информацию об обработке своих персональных данных
              </li>
              <li>
                Требовать уточнения, блокирования или уничтожения данных
              </li>
              <li>Отозвать согласие на обработку персональных данных</li>
              <li>Ограничить обработку персональных данных</li>
              <li>
                Обжаловать действия или бездействие Школы в уполномоченном
                органе
              </li>
            </ul>
            <p>
              6.2. Для реализации своих прав пользователь может направить
              запрос по электронной почте CodeKidsAcademy@yandex.ru или через
              личный кабинет на сайте.
            </p>
            <p>
              6.3. Школа рассмотрит запрос в течение 30 дней с момента его
              получения.
            </p>
            <p>
              6.4. В случае отзыва согласия на обработку данных Школа
              прекратит их обработку, за исключением случаев, когда
              обработка необходима для выполнения обязательств по договору
              или требований законодательства.
            </p>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
@endsection