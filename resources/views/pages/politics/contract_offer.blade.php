@extends('layouts.main')

@section('title', 'Договор-оферта - Code Kids Academy -  Дополнительное Образование')

@section('content')
<!-- Main -->
<!-- Основной контент -->
<main class="container mx-auto px-4 py-8">
  <div class="max-w-4xl mx-auto">
    <!-- Заголовок -->
    <div class="text-center mb-12">
      <h1 class="text-3xl md:text-4xl font-bold mb-4">Договор-оферта</h1>
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
        <option value="data-collection">2. Предмет договора</option>
        <option value="data-purpose">3. Порядок заключения договора</option>
        <option value="third-parties">4. Права и обязанности сторон</option>
        <option value="data-protection">
          5. Стоимость и порядок оплаты
        </option>
        <option value="user-rights">6. Условия возврата средств</option>
        <option value="payments-and-refunds">
          7. Ответственность сторон
        </option>
        <option value="content-usage">8. Срок действия договора</option>
        <option value="termination-services">9. Персональные данные</option>
        <option value="changes-agreement">
          10. Заключительные положения
        </option>
        <option value="final-provisions">11. Реквизиты исполнителя</option>
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
            >2. Предмет договора</a
          >
          <a
            href="#data-purpose"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="data-purpose"
            >3. Порядок заключения договора</a
          >
          <a
            href="#third-parties"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="third-parties"
            >4. Права и обязанности сторон</a
          >
          <a
            href="#data-protection"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="data-protection"
            >5. Стоимость и порядок оплаты</a
          >
          <a
            href="#user-rights"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >6. Условия возврата средств</a
          >
          <a
            href="#payments-and-refunds"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >7. Ответственность сторон</a
          >
          <a
            href="#content-usage"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >8. Срок действия договора</a
          >
          <a
            href="#termination-services"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >9. Персональные данные</a
          >
          <a
            href="#changes-agreement"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >10. Заключительные положения</a
          >
          <a
            href="#final-provisions"
            class="block px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-gray-900 transition"
            data-section="user-rights"
            >11. Реквизиты исполнителя</a
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
              1.1. Настоящий документ является официальной публичной офертой
              (предложением) Code Kids Academy (далее — Исполнитель) в
              соответствии со ст. 435 и 437 Гражданского кодекса Российской
              Федерации.
            </p>
            <p>
              1.2. CodeKids Academy — образовательный проект,
              предоставляющий платные услуги по обучению детей и подростков
              в возрасте от 7 до 18 лет основам программирования,
              веб-разработки, создания игр и другим цифровым навыкам.
            </p>
            <p>
              1.3. Потребителем услуг может выступать совершеннолетнее
              физическое лицо (родитель или законный представитель
              несовершеннолетнего ребенка), которое принимает условия
              настоящего договора (далее — Заказчик).
            </p>
            <p>
              1.4. Фактом принятия (акцептом) условий настоящей оферты
              считается осуществление Заказчиком оплаты услуг Исполнителя в
              соответствии с условиями, указанными в разделе 5 настоящего
              договора.
            </p>
          </div>
        </section>

        <!-- Предмет договора -->
        <section id="data-collection" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">2. Предмет договора</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              2.1. Исполнитель обязуется предоставить Заказчику
              образовательные услуги в соответствии с выбранной программой
              обучения, а Заказчик обязуется оплатить эти услуги в порядке и
              сроки, установленные настоящим договором.
            </p>
            <p>
              2.2. Образовательные услуги могут предоставляться в следующих
              формах:
            </p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Онлайн-курсы с доступом к обучающей платформе</li>
              <li>
                Очные занятия в учебном центре по адресу: г. Архангельск,
                ул. Карпогорская, 36
              </li>
              <li>
                Индивидуальные занятия с преподавателем (онлайн или офлайн)
              </li>
              <li>Летние и каникулярные образовательные программы</li>
            </ul>
            <p>
              2.3. Точное содержание, продолжительность и расписание занятий
              указываются на странице конкретного курса на сайте
              Исполнителя.
            </p>
          </div>
        </section>

        <!-- Порядок заключения договора -->
        <section id="data-purpose" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            3. Порядок заключения договора
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>3.1. Для заключения договора Заказчик должен:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Выбрать курс на сайте Исполнителя</li>
              <li>
                Заполнить регистрационную форму с указанием необходимых
                данных
              </li>
              <li>Ознакомиться с условиями настоящего договора-оферты</li>
              <li>
                Осуществить оплату выбранного курса одним из доступных
                способов
              </li>
            </ul>
            <p>
              3.2. Договор считается заключенным с момента поступления
              денежных средств на счет Исполнителя.
            </p>
            <p>
              3.3. Доступ к онлайн-курсу предоставляется в течение 24 часов
              с момента подтверждения оплаты. Для очных курсов Заказчик
              получает подтверждение и инструкции по электронной почте.
            </p>
          </div>
        </section>

        <!-- Права и обязанности сторон -->
        <section id="third-parties" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            4. Права и обязанности сторон
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>4.1. Обязанности Исполнителя:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Организовать и обеспечить надлежащее качество предоставления
                образовательных услуг
              </li>
              <li>
                Предоставить доступ к обучающим материалам в соответствии с
                выбранной программой
              </li>
              <li>
                Обеспечить консультационную поддержку в рамках
                установленного расписания
              </li>
              <li>
                Соблюдать конфиденциальность персональных данных Заказчика и
                ребенка
              </li>
            </ul>
            <p>4.2. Обязанности Заказчика:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Своевременно оплатить выбранные образовательные услуги
              </li>
              <li>
                Обеспечить посещение ребенком занятий (для очных курсов)
              </li>
              <li>
                Контролировать выполнение ребенком домашних заданий (при их
                наличии)
              </li>
              <li>
                Соблюдать правила поведения на платформе и в учебном центре
              </li>
            </ul>
            <p>4.3. Права Исполнителя:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Вносить изменения в программу обучения с уведомлением
                Заказчика
              </li>
              <li>
                Отказать в предоставлении услуг при нарушении Заказчиком
                условий договора
              </li>
              <li>
                Использовать работы учащихся в некоммерческих целях
                (демонстрация, портфолио)
              </li>
            </ul>
            <p>4.4. Права Заказчика:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>
                Требовать предоставления услуг в соответствии с условиями
                договора
              </li>
              <li>Получать информацию об успехах ребенка в обучении</li>
              <li>Расторгнуть договор в соответствии с разделом 8</li>
            </ul>
          </div>
        </section>

        <!-- Стоимость и порядок оплаты -->
        <section id="data-protection" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            5. Стоимость и порядок оплаты
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              5.1. Стоимость образовательных услуг указывается на странице
              конкретного курса на сайте Исполнителя и может изменяться без
              уведомления, но не влияет на уже заключенные договоры.
            </p>
            <p>5.2. Оплата может производиться следующими способами:</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
              <div
                class="bg-gray-100 p-3 rounded-lg flex items-center dark:bg-gray-800"
              >
                <i class="fab fa-cc-visa text-3xl text-blue-800 mr-2"></i>
                <span>Банковские карты</span>
              </div>
              <div
                class="bg-gray-100 p-3 rounded-lg flex items-center dark:bg-gray-800"
              >
                <i
                  class="fas fa-mobile-alt text-3xl text-green-600 mr-2"
                ></i>
                <span>СБП</span>
              </div>
              <div
                class="bg-gray-100 p-3 rounded-lg flex items-center dark:bg-gray-800"
              >
                <i
                  class="fas fa-money-bill-wave text-3xl text-purple-600 mr-2"
                ></i>
                <span>ЮMoney</span>
              </div>
            </div>
            <p>
              5.3. Для некоторых курсов возможна оплата в рассрочку. Условия
              рассрочки указываются на странице курса.
            </p>
            <p>
              5.4. Исполнитель вправе предоставлять скидки и специальные
              предложения. Скидки не суммируются, если иное не указано в
              условиях акции.
            </p>
            <p>
              5.5. Все платежи производятся в российских рублях. В случае
              оплаты из-за границы конвертация осуществляется по курсу
              банка-эмитента карты.
            </p>
          </div>
        </section>

        <!-- Условия возврата средств -->
        <section id="user-rights" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            6. Условия возврата средств
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              6.1. Заказчик вправе отказаться от услуг и потребовать
              возврата уплаченных денежных средств в следующих случаях:
            </p>
            <ul class="list-disc pl-6 space-y-2">
              <li>До начала курса — полный возврат средств</li>
              <li>
                В течение 3 дней после первого занятия — полный возврат
                средств
              </li>
              <li>
                По уважительной причине (болезнь, переезд) —
                пропорциональный расчет неиспользованных занятий
              </li>
            </ul>
            <p>
              6.2. Для оформления возврата необходимо направить письменное
              заявление на электронную почту CodeKidsAcademy@yandex.ru с указанием
              причины возврата и реквизитов для перевода средств.
            </p>
            <p>
              6.3. Возврат средств осуществляется в течение 10 рабочих дней
              с момента получения заявления. Возврат производится тем же
              способом, которым была произведена оплата.
            </p>
            <p>
              6.4. В случае, если Заказчик нарушает правила поведения на
              платформе или учебного центра, Исполнитель вправе отказать в
              возврате средств.
            </p>
          </div>
        </section>

        <!-- Ответственность сторон -->
        <section id="payments-and-refunds" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">7. Ответственность сторон</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              7.1. Исполнитель несет ответственность за качество
              предоставляемых образовательных услуг в соответствии с
              условиями настоящего договора.
            </p>
            <p>7.2. Исполнитель не несет ответственности за:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Несвоевременное освоение программы по вине учащегося</li>
              <li>
                Технические проблемы на стороне Заказчика
                (интернет-соединение, оборудование)
              </li>
              <li>Действия третьих лиц, не связанных с Исполнителем</li>
            </ul>
            <p>
              7.3. Стороны освобождаются от ответственности за неисполнение
              обязательств по договору, если это неисполнение вызвано
              обстоятельствами непреодолимой силы (форс-мажор).
            </p>
            <p>
              7.4. Максимальная ответственность Исполнителя ограничивается
              суммой оплаты по соответствующему курсу.
            </p>
          </div>
        </section>

        <!-- Срок действия договора -->
        <section id="content-usage" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">8. Срок действия договора</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              8.1. Договор вступает в силу с момента акцепта оферты (оплаты
              услуг) и действует до полного исполнения сторонами своих
              обязательств.
            </p>
            <p>8.2. Договор может быть расторгнут досрочно:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>По соглашению сторон</li>
              <li>
                По инициативе Заказчика с условиями возврата средств
                согласно разделу 6
              </li>
              <li>
                По инициативе Исполнителя в случае грубого нарушения
                Заказчиком условий договора
              </li>
            </ul>
            <p>
              8.3. В случае расторжения договора по инициативе Исполнителя
              не по вине Заказчика, последнему возвращаются неиспользованные
              средства.
            </p>
          </div>
        </section>

        <!-- Персональные данные -->
        <section id="termination-services" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">9. Персональные данные</h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              9.1. Заказчик дает согласие на обработку своих персональных
              данных и персональных данных ребенка в соответствии с
              Федеральным законом от 27.07.2006 № 152-ФЗ "О персональных
              данных".
            </p>
            <p>9.2. Цели обработки персональных данных:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Заключение и исполнение договора</li>
              <li>Организация образовательного процесса</li>
              <li>Информирование о новых курсах и мероприятиях</li>
            </ul>
            <p>
              9.3. Исполнитель обязуется не передавать персональные данные
              третьим лицам, за исключением случаев, предусмотренных
              законодательством РФ.
            </p>
            <p>
              9.4. Заказчик вправе отозвать согласие на обработку
              персональных данных, направив соответствующее уведомление на
              электронную почту Исполнителя.
            </p>
          </div>
        </section>

        <!-- Заключительные положения -->
        <section id="changes-agreement" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">
            10. Заключительные положения
          </h2>
          <div class="space-y-4 text-gray-700 dark:text-gray-100">
            <p>
              10.1. Настоящий договор составлен в соответствии с
              законодательством Российской Федерации.
            </p>
            <p>
              10.2. Все споры и разногласия, возникающие из настоящего
              договора, стороны будут стремиться урегулировать путем
              переговоров.
            </p>
            <p>
              10.3. В случае невозможности урегулирования спора мирным
              путем, он подлежит рассмотрению в суде по месту нахождения
              Исполнителя.
            </p>
            <p>
              10.4. Исполнитель вправе вносить изменения в условия оферты.
              Изменения вступают в силу с момента их публикации на сайте.
            </p>
            <p>
              10.5. Заказчик подтверждает, что ознакомлен со всеми условиями
              настоящего договора и принимает их безоговорочно.
            </p>
          </div>
        </section>

        <!-- Реквизиты исполнителя -->
        <section id="final-provisions" class="section-content mb-12">
          <h2 class="text-2xl font-bold mb-4">11. Реквизиты исполнителя</h2>
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
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <p class="font-semibold">Название:</p>
                  <p>Code Kids Academy</p>
                </div>
                <div>
                  <p class="font-semibold">Юридический адрес:</p>
                  <p>163065, г. Архангельск, ул. Карпогорская, 36</p>
                </div>
                <div>
                  <p class="font-semibold">ИНН:</p>
                  <p>290127597863</p>
                </div>
                <div>
                  <p class="font-semibold">ОГРНИП:</p>
                  <p>325290000018902</p>
                </div>
                <div>
                  <p class="font-semibold">Телефон:</p>
                  <p>+7 (960) 000-46-12</p>
                </div>
                <div>
                  <p class="font-semibold">Электронная почта:</p>
                  <p>CodeKidsAcademy@yandex.ru</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- Acceptance Block -->
    <div
      class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg mt-8 dark:bg-gray-800"
    >
      <h3 class="text-xl font-semibold text-blue-600 mb-4">
        Подтверждение ознакомления
      </h3>
      <p class="mb-4 dark:text-gray-100">
        Нажимая кнопку "Я согласен", вы подтверждаете, что ознакомились со
        всеми условиями настоящего договора-оферты и принимаете их
        безоговорочно.
      </p>
      <div class="flex flex-col sm:flex-row gap-4">
        <button
          id="acceptBtn"
          class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 flex items-center justify-center"
        >
          <i class="fas fa-check-circle mr-2"></i> Я согласен с условиями
          договора
        </button>
        <a href="./assets/files/Оферта Code Kids Academy.docx"
          class="bg-white hover:bg-gray-100 text-blue-600 border border-blue-600 font-bold py-3 px-6 rounded-lg transition duration-300 flex items-center justify-center"
        >
          <i class="fas fa-download mr-2"></i> Скачать PDF
        </a>
      </div>
      <div
        id="acceptanceMessage"
        class="hidden mt-4 p-4 bg-green-100 text-green-800 rounded-lg"
      ></div>
    </div>
  </div>
</main>
@endsection