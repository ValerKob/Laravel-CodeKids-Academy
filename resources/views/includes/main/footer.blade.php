<!--================Footer Area =================-->
<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div>
        <div class="flex items-center mb-4">
            <div
            class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center mr-3"
            >
            <i class="fas fa-code text-white"></i>
            </div>
            <a href="#" class="text-xl font-bold">
            <span class="text-indigo-400">Code</span
            ><span class="text-purple-400">Kids</span> Academy
            </a>
        </div>
        <p class="text-gray-400 mb-4">
            Школа программирования для детей и подростков. Помогаем освоить
            цифровые навыки с удовольствием!
        </p>
        <div class="flex space-x-3">
            <a target="_blank"
            href="https://vk.com/codekids_academy"
            class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-indigo-600 transition duration-300"
            >
            <i class="fab fa-vk"></i>
            </a>
            <a target="_blank"
            href="https://www.instagram.com/codekids29"
            class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-pink-600 transition duration-300"
            >
            <i class="fab fa-instagram"></i>
            </a>
            <a target="_blank"
            href="https://t.me/codekids_academy"
            class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-blue-500 transition duration-300"
            >
            <i class="fab fa-telegram"></i>
            </a>
            <a target="_blank"
            href="https://youtube.com/@codekids_academy"
            class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-red-600 transition duration-300"
            >
            <i class="fab fa-youtube"></i>
            </a>
             <a target="_blank"
            href="https://rutube.ru/channel/63620817"
            class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-indigo-600 transition duration-300"
            >
                <img width="20" height="20" style="border-radius: 90%" src="https://yastatic.net/naydex/yandex-search/m8nl6cD85/5c82fcRGZ/CWgqL4J-bGToBH7cw_j7VjkJPCemnX43PrkHFt8_fuzpOBRDDHflLLFxAMQ3LzUbWQYGKaFvwN9ZwZcSjuxUlVRlBgarVzl0_EUegJuc3icVcA1m2oV6X0vELwund271yYlJA7yzReh5mexBrvbc6nxCZyiwrnQ" alt="">
            </a>
              <a target="_blank"
            href="https://dzen.ru/codekids"
            class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-purple-600 transition duration-300"
            >
                <img width="20" height="20" style="border-radius: 90%" src="./assets/images/main/links/ya_zen.gif" alt="">
            </a>
        </div>
        </div>

        <div>
        <h4 class="text-lg font-bold mb-4">Курсы</h4>
        <ul class="space-y-2">
            <li>
            <a
                href="{{ route('roblox_junior') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >Разработка игр в Roblox (Junior) 7-9 лет</a
            >
            </li>
            <li>
            <a
                href="{{ route('roblox_middle') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >Разработка игр в Roblox (Middle) 10-13 лет</a
            >
            </li>
            <li>
            <a
                href="{{ route('python_junior') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >Python для детей (Junior) 10-13 лет</a
            >
            </li>
            <li>
            <a
                href="{{ route('python_middle') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >Python Pro (Middle) 14-18 лет</a
            >
            </li>
            <li>
            <a
                href="{{ route('web_junior') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >Веб-разработка для детей (Junior) 10-13 лет</a
            >
            </li>
            <li>
            <a
                href="{{ route('web_middle') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >Веб-разработка (Middle) 14-18 лет</a
            >
            </li>
             <li>
            <a
                href="{{ route('unity_junior') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >Разработка игр на Unity (Junior) 10-13 лет</a
            >
            </li>
             <li>
            <a
                href="{{ route('unity_middle') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >Разработка игр на Unity (Middle) 10-18 лет</a
            >
            </li>
              <li>
            <a
                href="{{ route('ai_junior') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >ИИ Уровень (Junior) 7-9 лет</a
            >
            </li>
              <li>
            <a
                href="{{ route('ai_middle') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >ИИ Уровень (Middle) 10-18 лет</a
            >
            </li>
             <li>
            <a
                href="{{ route('use') }}"
                class="text-gray-400 hover:text-white transition duration-300"
                >Подготовка к ЕГЭ 14-18 лет</a
            >
            </li>
        </ul>
        </div>

        <div>
        <h4 class="text-lg font-bold mb-4">Информация</h4>
        <ul class="space-y-2">
             <li>
            <a
                href="{{ route('main') }}#courses"
                class="text-gray-400 hover:text-white transition duration-300"
                >Курсы</a
            >
            </li>
            <li>
            <a
                href="{{ route('main') }}#about"
                class="text-gray-400 hover:text-white transition duration-300"
                >О нас</a
            >
            </li>
            {{-- <li>
            <a
                href="#"
                class="text-gray-400 hover:text-white transition duration-300"
                >Преподаватели</a
            >
            </li> --}}
            <li>
            <a
                href="{{ route('main') }}#reviews"
                class="text-gray-400 hover:text-white transition duration-300"
                >Отзывы</a
            >
            </li>
             <li>
            <a
                href="{{ route('main') }}#faq"
                class="text-gray-400 hover:text-white transition duration-300"
                >FAQ</a
            >
            </li>
             <li>
            <a
                href="{{ route('main') }}#contact"
                class="text-gray-400 hover:text-white transition duration-300"
                >Контакты</a
            >
            </li>
            {{-- <li>
            <a
                href="#"
                class="text-gray-400 hover:text-white transition duration-300"
                >Блог</a
            >
            </li> --}}
            {{-- <li>
            <a
                href="#"
                class="text-gray-400 hover:text-white transition duration-300"
                >Вакансии</a
            >
            </li>
            <li>
            <a
                href="#"
                class="text-gray-400 hover:text-white transition duration-300"
                >Партнерство</a
            >
            </li> --}}
        </ul>
        </div>

        <div>
        <h4 class="text-lg font-bold mb-4">Контакты</h4>
        <ul class="space-y-2 text-gray-400">
            <li class="flex items-start">
            <i class="fas fa-map-marker-alt mt-1 mr-2 text-indigo-400"></i>
            г. Архангельск, ул. Карпогорская, 36
            </li>
            <li class="flex items-start">
            <i class="fas fa-phone-alt mt-1 mr-2 text-indigo-400"></i>
            +7 (960) 000-46-12
            </li>
            <li class="flex items-start">
            <i class="fas fa-envelope mt-1 mr-2 text-indigo-400"></i>
            CodeKidsAcademy@yandex.ru
            </li>
            <li class="flex items-start">
            <i class="fas fa-clock mt-1 mr-2 text-indigo-400"></i>
            Пн-Пт: 10:00 - 20:00<br />
            Сб-Вс: 10:00 - 18:00
            </li>
        </ul>
        </div>
    </div>

    <div
        class="border-t border-gray-800 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center"
    >
        <p class="text-gray-400 mb-4 md:mb-0">
        © 2025 CodeKids Academy. Все права защищены.
        </p>
        <div class="flex space-x-6">
        <a
            href="{{ route('privacy_policy') }}"
            class="text-gray-400 hover:text-white transition duration-300"
            >Политика конфиденциальности</a
        >
        <a
            href="{{ route('user_agreement') }}"
            class="text-gray-400 hover:text-white transition duration-300"
            >Пользовательское соглашение</a
        >
        <a
            href="{{ route('contract_offer') }}"
            class="text-gray-400 hover:text-white transition duration-300"
            >Договор-оферта</a
        >
        </div>
    </div>
    </div>
</footer>
<!--================End Footer Area =================-->