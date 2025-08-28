<!--================ Start Contact =================-->
<section id="contact" class="py-16 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">Свяжитесь с нами</h2>
        <p class="text-gray-600 max-w-2xl mx-auto dark:text-gray-100">
        Остались вопросы? Напишите нам или запишитесь на бесплатный пробный
        урок
        </p>
    </div>

    <div class="flex flex-col lg:flex-row gap-10">
        <div class="lg:w-1/2">
            <form class="bg-white p-6 rounded-xl shadow-md dark:bg-gray-800" action="{{ route('send.message') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="dark:text-gray-100 block text-gray-700 font-medium mb-2">Ваше имя</label>
                    <input type="text" id="name" name="name" class="w-full dark:bg-gray-800 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required />
                </div>

                <div class="mb-4">
                    <label for="email" class="dark:text-gray-100 block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full dark:bg-gray-800 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required />
                </div>

                <div class="mb-4">
                    <label for="phone" class="dark:text-gray-100 block text-gray-700 font-medium mb-2">Телефон</label>
                    <input type="tel" id="phone" name="phone" class="w-full dark:bg-gray-800 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required />
                </div>

                <div class="mb-4">
                    <label for="course" class="dark:text-gray-100 block text-gray-700 font-medium mb-2">Интересующий курс</label>
                    <select id="course" name="course" class="dark:text-gray-100 dark:bg-gray-800 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                        <option value="">Выберите курс</option>
                        <option value="Разработка игр в Roblox (Junior) 7-9 лет">Разработка игр в Roblox (Junior) 7-9 лет</option>
                        <option value="Разработка игр в Roblox (Middle) 10-13 лет">Разработка игр в Roblox (Middle) 10-13 лет</option>
                        <option value="Python для детей (Junior) 10-13 лет">Python для детей (Junior) 10-13 лет</option>
                        <option value="Python Pro (Middle) 14-18 лет">Python Pro (Middle) 14-18 лет</option>
                        <option value="Веб-разработка для детей (Junior) 10-13 лет">Веб-разработка для детей (Junior) 10-13 лет</option>
                        <option value="Веб-разработка (Middle) 14-18 лет">Веб-разработка (Middle) 14-18 лет</option>
                        <option value="Разработка игр на Unity (Junior) 10-13 лет">Разработка игр на Unity (Junior) 10-13 лет</option>
                        <option value="Разработка игр на Unity (Middle) 10-18 лет">Разработка игр на Unity (Middle) 10-18 лет</option>
                        <option value="ИИ Уровень (Junior) 7-9 лет">ИИ Уровень (Junior) 7-9 лет</option>
                        <option value="ИИ Уровень (Middle) 10-18 лет">ИИ Уровень (Middle) 10-18 лет</option>
                        <option value="Подготовка к ЕГЭ 14-18 лет">Подготовка к ЕГЭ 14-18 лет</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="message" class="block dark:text-gray-100 text-gray-700 font-medium mb-2">Сообщение</label>
                    <textarea id="message" name="message" rows="4" class="w-full dark:text-gray-100 dark:bg-gray-800 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required></textarea>
                </div>

                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-bold transition duration-300">
                    Отправить сообщение
                </button>
            </form>
        </div>

        <div class="lg:w-1/2">
        <div
            class="dark:bg-gray-800 bg-white p-6 rounded-xl shadow-md h-full"
        >
            <h3 class="text-xl font-bold mb-6">Контактная информация</h3>

            <div class="space-y-4 mb-8">
            <div class="flex items-start">
                <div class="bg-indigo-100 p-2 rounded-full mr-4">
                <i class="fas fa-map-marker-alt text-indigo-600"></i>
                </div>
                <div>
                <h4 class="font-medium">Адрес</h4>
                <p class="text-gray-600 dark:text-gray-100">
                    г. Архангельск, ул. Карпогорская, 36
                </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="bg-purple-100 p-2 rounded-full mr-4">
                <i class="fas fa-phone-alt text-purple-600"></i>
                </div>
                <div>
                <h4 class="font-medium">Телефон</h4>
                <p class="text-gray-600 dark:text-gray-100">
                    +7 (960) 000-46-12
                </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="bg-blue-100 p-2 rounded-full mr-4">
                <i class="fas fa-envelope text-blue-600"></i>
                </div>
                <div>
                <h4 class="font-medium">Email</h4>
                <p class="text-gray-600 dark:text-gray-100">
                    CodeKidsAcademy@yandex.ru
                </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="bg-green-100 p-2 rounded-full mr-4">
                <i class="fas fa-clock text-green-600"></i>
                </div>
                <div>
                <h4 class="font-medium">Режим работы</h4>
                <p class="text-gray-600 dark:text-gray-100">
                    Пн-Пт: 10:00 - 20:00<br />Сб-Вс: 10:00 - 18:00
                </p>
                </div>
            </div>
            </div>

            <div class="mb-8">
            <h4 class="font-medium mb-3">Мы в соцсетях</h4>
            <div class="flex space-x-3">
                <a target="_blank"
                href="https://vk.com/codekids_academy"
                class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-200 transition duration-300"
                >
                <i class="fab fa-vk"></i>
                </a>
                <a target="_blank"
                href="https://www.instagram.com/codekids29"
                class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center text-pink-600 hover:bg-pink-200 transition duration-300"
                >
                <i class="fab fa-instagram"></i>
                </a>
                <a target="_blank"
                href="https://t.me/codekids_academy"
                class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-400 hover:bg-blue-200 transition duration-300"
                >
                <i class="fab fa-telegram"></i>
                </a>
                <a target="_blank"
                href="https://youtube.com/@codekids_academy"
                class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center text-red-600 hover:bg-red-200 transition duration-300"
                >
                <i class="fab fa-youtube"></i>
                </a>
                 <a target="_blank"
                href="https://rutube.ru/channel/63620817"
                class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 hover:bg-indigo-200 transition duration-300"
                >
                    <img width="20" height="20" style="border-radius: 90%" src="https://yastatic.net/naydex/yandex-search/m8nl6cD85/5c82fcRGZ/CWgqL4J-bGToBH7cw_j7VjkJPCemnX43PrkHFt8_fuzpOBRDDHflLLFxAMQ3LzUbWQYGKaFvwN9ZwZcSjuxUlVRlBgarVzl0_EUegJuc3icVcA1m2oV6X0vELwund271yYlJA7yzReh5mexBrvbc6nxCZyiwrnQ" alt="">
                </a>
                <a target="_blank"
                href="https://rutube.ru/channel/63620817"
                class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center text-pink-600 hover:bg-pink-200 transition duration-300"
                >
                    <img width="20" height="20" style="border-radius: 90%" src="https://www.ph4.ru/DL/LOGO_ICON/y/ya_zen.gif" alt="">
                </a>
            </div>
            </div>

            <!-- <div>
                        <h4 class="font-medium mb-3">Как нас найти</h4>
                        <div class="h-64 bg-gray-200 rounded-lg overflow-hidden">
                            Здесь будет карта
                            <div class="w-full h-full flex items-center justify-center text-gray-500">
                                <i class="fas fa-map-marked-alt text-4xl"></i>
                            </div>
                        </div>
                    </div> -->
        </div>
        </div>
    </div>
    </div>
</section>
<!--================ End Contact =================-->