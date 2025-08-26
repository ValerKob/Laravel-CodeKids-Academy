// Tailwind
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#f0f9ff",
                    100: "#e0f2fe",
                    200: "#bae6fd",
                    300: "#7dd3fc",
                    400: "#38bdf8",
                    500: "#0ea5e9",
                    600: "#0284c7",
                    700: "#0369a1",
                    800: "#075985",
                    900: "#0c4a6e",
                },
                secondary: {
                    50: "#f5f3ff",
                    100: "#ede9fe",
                    200: "#ddd6fe",
                    300: "#c4b5fd",
                    400: "#a78bfa",
                    500: "#8b5cf6",
                    600: "#7c3aed",
                    700: "#6d28d9",
                    800: "#5b21b6",
                    900: "#4c1d95",
                },
                accent: {
                    50: "#f0fdf4",
                    100: "#dcfce7",
                    200: "#bbf7d0",
                    300: "#86efac",
                    400: "#4ade80",
                    500: "#22c55e",
                    600: "#16a34a",
                    700: "#15803d",
                    800: "#166534",
                    900: "#14532d",
                },
                violet: "#1E3D59",
            },
            fontFamily: {
                sans: ['"Comic Neue"', "sans-serif"],
                heading: ['"Baloo 2"', "sans-serif"],
            },
            borderRadius: {
                none: "0px",
                sm: "4px",
                DEFAULT: "8px",
                md: "12px",
                lg: "16px",
                xl: "20px",
                "2xl": "24px",
                "3xl": "32px",
                full: "9999px",
                button: "8px",
            },
        },
    },
};

// Mobile menu toggle
const menuBtn = document.getElementById("menu-btn");
const menu = document.getElementById("menu");

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("open");
    menu.classList.toggle("hidden");
    menu.classList.toggle("flex");
});

// FAQ accordion
document.querySelectorAll(".toggle-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
        const content = btn.nextElementSibling;
        const icon = btn.querySelector("i");

        if (content.style.height === "0px" || !content.style.height) {
            content.style.height = content.scrollHeight + "px";
            icon.classList.add("rotate-180");
        } else {
            content.style.height = "0";
            icon.classList.remove("rotate-180");
        }
    });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: "smooth",
            });

            // Close mobile menu if open
            if (!menu.classList.contains("hidden")) {
                menuBtn.classList.remove("open");
                menu.classList.add("hidden");
                menu.classList.remove("flex");
            }
        }
    });
});

// Readdy
// Совмещённая логика фильтра и активной кнопки
const filterButtons = document.querySelectorAll(".filter-btn");
const cards = document.querySelectorAll(".course-card");

filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
        // Обновление активной кнопки
        filterButtons.forEach((btn) => {
            btn.classList.remove(
                "active",
                "bg-indigo-600",
                "hover:bg-indigo-700",
                "text-white"
            );
            btn.classList.add("bg-gray-200", "text-gray-700");
        });

        this.classList.remove("bg-gray-200", "text-gray-700");
        this.classList.add(
            "active",
            "bg-indigo-600",
            "hover:bg-indigo-700",
            "text-white"
        );

        // Фильтрация карточек
        const age = this.getAttribute("data-age");

        cards.forEach((card) => {
            if (age === "all" || card.classList.contains(age)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Мобильное меню
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    mobileMenuButton.addEventListener("click", function () {
        mobileMenu.classList.toggle("hidden");
    });

    // // Совмещённая логика фильтра и активной кнопки
    // const filterButtons = document.querySelectorAll(".filter-btn");
    // const cards = document.querySelectorAll(".course-card");

    // filterButtons.forEach((button) => {
    //     button.addEventListener("click", function () {
    //         // Обновление активной кнопки
    //         filterButtons.forEach((btn) => {
    //             btn.classList.remove("active", "bg-indigo-600", "hover:bg-indigo-700", "text-white");
    //             btn.classList.add("bg-gray-200", "text-gray-700");
    //         });

    //         this.classList.remove("bg-gray-200", "text-gray-700");
    //         this.classList.add("active", "bg-indigo-600", "hover:bg-indigo-700", "text-white");

    //         // Фильтрация карточек
    //         const age = this.getAttribute("data-age");

    //         cards.forEach((card) => {
    //             if (age === "all" || card.classList.contains(age)) {
    //                 card.style.display = "block";
    //             } else {
    //                 card.style.display = "none";
    //             }
    //         });
    //     });
    // });

    // Кнопка наверх
    const backToTopButton = document.getElementById("back-to-top");

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove("opacity-0", "invisible");
            backToTopButton.classList.add("opacity-100", "visible");
        } else {
            backToTopButton.classList.remove("opacity-100", "visible");
            backToTopButton.classList.add("opacity-0", "invisible");
        }
    });

    backToTopButton.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });

    // Плавная прокрутка к якорям
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href");
            if (targetId === "#") return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerHeight =
                    document.querySelector("header").offsetHeight;
                const targetPosition =
                    targetElement.getBoundingClientRect().top +
                    window.pageYOffset -
                    headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth",
                });

                // Закрыть мобильное меню при клике на ссылку
                if (!mobileMenu.classList.contains("hidden")) {
                    mobileMenu.classList.add("hidden");
                }
            }
        });
    });

    // Кастомные чекбоксы
    const checkboxes = document.querySelectorAll(
        '.custom-checkbox input[type="checkbox"]'
    );
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", function () {
            const checkmark = this.nextElementSibling;
            if (this.checked) {
                checkmark.classList.add("checked");
            } else {
                checkmark.classList.remove("checked");
            }
        });
    });
});

const slides = [
    {
        title: "Программирование — суперсила будущего!",
        text: "Современные курсы для детей от 7 до 18 лет. Развиваем мышление и творчество.",
        image: "./assets/images/main/slider/slider_1.jpg",
    },
    {
        title: "Создавай игры и сайты с нуля!",
        text: "Обучение Unity, Python, веб-разработке и многому другому.",
        image: "./assets/images/main/slider/slider_2.jpg",
    },
    {
        title: "Твое IT-будущее начинается здесь!",
        text: "Интерактивные курсы, реальные проекты, поддержка преподавателя.",
        image: "./assets/images/main/slider/slider_3.jpg",
    },
];

let currentIndex = 0;
const titleEl = document.getElementById("hero-title");
const textEl = document.getElementById("hero-text");
const imageEl = document.getElementById("hero-image");
const contentWrapper = document.getElementById("hero-content");
const imageWrapper = document.getElementById("hero-image-wrapper");

setInterval(() => {
    // Сначала запускаем исчезновение
    contentWrapper.classList.remove("fade-in");
    contentWrapper.classList.add("fade-out");
    imageWrapper.classList.remove("fade-in");
    imageWrapper.classList.add("fade-out");

    setTimeout(() => {
        // Меняем контент
        currentIndex = (currentIndex + 1) % slides.length;
        titleEl.innerHTML = slides[currentIndex].title;
        textEl.textContent = slides[currentIndex].text;
        imageEl.src = slides[currentIndex].image;

        // Запускаем появление
        contentWrapper.classList.remove("fade-out");
        contentWrapper.classList.add("fade-in");
        imageWrapper.classList.remove("fade-out");
        imageWrapper.classList.add("fade-in");
    }, 500); // Время анимации исчезновения
}, 5000);

// Кнопка "вверх"
(function () {
    const scrollUp = document.querySelector(".scroll-up");
    const path = document.querySelector(".scroll-up__svg-path");
    const pathLength = path.getTotalLength();

    path.style.strokeDasharray = `${pathLength} ${pathLength}`;
    path.style.transition = "stroke-dashoffset 20ms";

    const getScrollTop = () =>
        window.pageYOffset || document.documentElement.scrollTop;

    window.addEventListener("scroll", () => {
        const scrollHeight =
            document.documentElement.scrollHeight - window.innerHeight;
        const scrollOffset =
            pathLength - (getScrollTop() * pathLength) / scrollHeight;
        path.style.strokeDashoffset = scrollOffset;

        if (getScrollTop() > 100) {
            scrollUp.classList.add("scroll-up--active");
        } else {
            scrollUp.classList.remove("scroll-up--active");
        }
    });

    scrollUp.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
})();

document.querySelectorAll(".toggle-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
        const container = btn.closest("div").parentElement;
        const content = container.querySelector(".toggle-content");
        const inner = content.querySelector(".inner");
        const icon = btn.querySelector("i");

        if (content.style.height === "0px" || content.style.height === "") {
            const height = inner.scrollHeight;
            content.style.height = height + "px";
            icon.classList.add("rotate-180");

            // После завершения анимации - сбрасываем height, чтобы он подстраивался автоматически
            setTimeout(() => {
                content.style.height = "auto";
            }, 500);
        } else {
            // Устанавливаем высоту явно перед обнулением, чтобы анимация сработала
            content.style.height = inner.scrollHeight + "px";

            // Принудительно перерисовываем (reflow)
            void content.offsetHeight;

            content.style.height = "0px";
            icon.classList.remove("rotate-180");
        }
    });
});

// Проверка и установка темы при загрузке страницы
if (localStorage.getItem("theme") === "dark") {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

// Обработчик клика по кнопке смены темы
document.querySelectorAll("button").forEach((btn) => {
    btn.addEventListener("click", () => {
        if (btn.querySelector(".fa-moon") || btn.querySelector(".fa-sun")) {
            document.documentElement.classList.toggle("dark");
            if (document.documentElement.classList.contains("dark")) {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.setItem("theme", "light");
            }
        }
    });
});

// Privacy policy
// Установка текущей даты
const now = new Date();
const options = { year: "numeric", month: "long", day: "numeric" };
document.getElementById("current-date").textContent = now.toLocaleDateString(
    "ru-RU",
    options
);
// Получаем все ссылки в боковой навигации
const navLinks = document.querySelectorAll("aside nav a");

// Получаем все секции контента
const sections = document.querySelectorAll(".section-content");

// Функция для переключения активного раздела
function switchSection(event) {
    // Отключаем активный класс у всех ссылок
    navLinks.forEach((link) => link.classList.remove("active-section"));

    // Добавляем активный класс к текущей ссылке
    event.target.classList.add("active-section");

    // Скрываем все секции
    sections.forEach((section) => section.classList.remove("active"));

    // Находим нужную секцию по id из ссылки
    const sectionId = event.target.getAttribute("href").substring(1);
    const activeSection = document.getElementById(sectionId);

    // Показываем выбранную секцию
    activeSection.classList.add("active");
}

// Добавляем обработчик кликов на все ссылки
navLinks.forEach((link) => {
    link.addEventListener("click", switchSection);
});

// JavaScript для мобильной навигации
document.getElementById("mobile-nav").addEventListener("change", function () {
    // Сначала скрываем все секции
    const sections = document.querySelectorAll(".section-content");
    sections.forEach((section) => section.classList.remove("active"));

    // Получаем id выбранной секции
    const selectedSection = this.value;

    // Показываем выбранную секцию
    const activeSection = document.getElementById(selectedSection);
    if (activeSection) {
        activeSection.classList.add("active");
    }

    // Обновляем стиль активного пункта меню
    const links = document.querySelectorAll("aside a");
    links.forEach((link) => {
        if (link.getAttribute("data-section") === selectedSection) {
            link.classList.add("active-section");
        } else {
            link.classList.remove("active-section");
        }
    });
});

// Contract Offer
// Accept button
const acceptBtn = document.getElementById("acceptBtn");
const acceptanceMessage = document.getElementById("acceptanceMessage");

acceptBtn.addEventListener("click", function () {
    acceptanceMessage.innerHTML = `
           <p class="font-semibold"><i class="fas fa-check-circle mr-2"></i> Спасибо!</p>
           <p>Вы успешно подтвердили ознакомление с договором-офертой.</p>
       `;
    acceptanceMessage.classList.remove("hidden");

    // Scroll to message
    setTimeout(() => {
        acceptanceMessage.scrollIntoView({ behavior: "smooth" });
    }, 100);
});

// Download button
const downloadBtn = document.getElementById("downloadBtn");

downloadBtn.addEventListener("click", function () {
    // In a real scenario, this would link to a PDF file
    alert(
        "В реальном сценарии здесь будет ссылка на скачивание PDF-версии договора."
    );
});
