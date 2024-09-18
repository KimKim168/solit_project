<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solit Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Start Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Moul&family=Poppins:ital&family=Rubik+Doodle+Shadow&display=swap,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Siemreap&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.css" />
    <link rel="stylesheet" href="js/app.js">
    <style>
        @font-face {
            font-family: "Costum1";
            src: url('assets/fonts/Raleway-Black.ttf') format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum2";
            src: url("assets/fonts/Raleway-BlackItalic.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum3";
            src: url("assets/fonts/Raleway-Bold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum4";
            src: url("assets/fonts/Raleway-Medium.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum5";
            src: url("assets/fonts/Raleway-ExtraBold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum6";
            src: url("assets/fonts/Raleway-ExtraBoldItalic.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum7";
            src: url("assets/fonts/Raleway-ExtraLight.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum8";
            src: url("assets/fonts/Raleway-SemiBold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum9";
            src: url("assets/fonts/Raleway-Italic.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum10";
            src: url("assets/fonts/FunlandParkOpenJLRegular.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        .light-color-gradient {
            position: relative;
            background-color: #f5f6f7;
            background-image: linear-gradient(54deg,
                    rgba(255, 131, 122, 0.25),
                    rgba(255, 131, 122, 0) 28%),
                linear-gradient(241deg,
                    rgba(239, 152, 207, 0.25),
                    rgba(239, 152, 207, 0) 36%);
        }

        .gradient-bg {
            background: linear-gradient(to right, #06b6d4, #3b82f6);
        }

        .shadow-custom {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1),
                0 2px 4px rgba(0, 0, 0, 0.06);
        }

        .layer {
            transition: transform 0.5s ease-out;
        }

        .layer:hover {
            transform: scale(1.05);
        }

        .image-container:hover .layer {
            transition: transform 0.1s ease-out;
            /* Manually defining the transition */
        }

        .layer {
            pointer-events: none;
            /* Ensuring the layer does not block cursor events */
        }

        .primary2 {
            background-color: #3a3e67;
        }

        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-container {
            position: relative;
            overflow: hidden;
        }

        .layer {
            transition: transform 0.3s ease;
        }
    </style>

    <script>
        tailwind.config = {
            darkMode: "class", // Enables dark mode based on class
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                        primary1: "#43428d",
                        primary2: "#3a3e67",
                        primary3: "#565c6a",
                        text_color1: "#787e8c",
                        text_color2: "#565c6a",
                        warning: "#fab105",
                        warningHover: "#ffb915",
                    },
                },
                fontFamily: {
                    koluen: ["Koulen"],
                    costum1: ["Costum1", "sans-serif"],
                    costum2: ["Costum2", "sans-serif"],
                    costum3: ["Costum3", "sans-serif"],
                    costum4: ["Costum4", "sans-serif"],
                    costum5: ["Costum5", "sans-serif"],
                    costum6: ["Costum6", "sans-serif"],
                    costum7: ["Costum7", "sans-serif"],
                    costum8: ["Costum8", "sans-serif"],
                    costum9: ["Costum9", "sans-serif"],
                    rubik: ["Rubik Doodle Shadow"],
                    Costum10: ["FunlandParkOpen", "Rubik Doodle Shadow"],
                    poppin: ["Poppins"]
                },
            },
        };
    </script>
</head>

<body class="text-black">
    <!-- Start Navbar -->
    <section>
        <nav class="bg-white fixed w-full z-40 top-0 start-0 shadow">
            <div class="max-w-screen-xl mx-auto flex items-center justify-between p-5">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/logo-solit-dark.png') }}" class="w-16 md:w-20" alt="Logo">
                </div>
                <div class="flex items-center space-x-5 md:space-x-10">
                    <!-- Menu for larger screens -->
                    <ul class="hidden lg:flex gap-8 text-[16px] items-center">
                        <li><a href="{{ url('/') }}"
                                class="{{ request()->is('/') ? 'text-blue-600' : 'text-black' }}">Home</a></li>
                        <li><a href="{{ url('/about_us') }}"
                                class="{{ request()->is('about_us') ? 'text-blue-600' : 'text-black' }}">About Us</a>
                        </li>
                        <li><a href="{{ url('/service') }}"
                                class="{{ request()->is('service') ? 'text-blue-600' : 'text-black' }}">Services</a>
                        </li>
                        <li><a href="{{ url('/product') }}"
                                class="{{ request()->is('product') ? 'text-blue-600' : 'text-black' }}">Products</a>
                        </li>
                        <li><a href="{{ url('/contact') }}"
                                class="{{ request()->is('contact') ? 'text-blue-600' : 'text-black' }}">Contact</a>
                        </li>
                    </ul>
                    <!-- Chat Button - visible on all screen sizes -->
                    <div>
                        <a href="#"
                            class="p-2 md:p-4 bg-[#43428d] text-[16px] text-white hover:bg-[#3a3e67] rounded-md">
                            Chat with Us
                        </a>
                    </div>
                    <!-- Mobile Menu Toggle -->
                    <div class="lg:hidden">
                        <button id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false"
                            class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div id="mobile-menu"
                    class="hidden lg:hidden  absolute top-full left-0 w-full bg-white shadow-lg z-30 transition-transform transform">

                    <ul class="flex flex-col items-center bg-white text-sm font-Poppins">
                        <li class="py-2 hover:bg-slate-200 w-full text-center border-b">
                            <a href="{{ url('/') }}"class="text-blue-500">Home</a>
                        </li>
                        <li class="py-2 hover:bg-slate-200 w-full text-center border-b">
                            <a href="{{ url('/about_us') }}" class="hover:text-blue-500">
                                About Us
                            </a>
                        </li>
                        <li class="py-2 hover:bg-slate-200 w-full text-center border-b">
                            <a href="{{ url('/service') }}" class="hover:text-blue-500">
                                Services
                            </a>
                        </li>

                        <li class="py-2 hover:bg-slate-200 w-full text-center border-b"><a href="{{ url('/product') }}"
                                class="hover:text-blue-500">Products</a></li>
                        <li class="py-2 hover:bg-slate-200 w-full text-center border-b"><a href="{{ url('/contact') }}"
                                class="hover:text-blue-500">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <script>
            mobileMenuButton.addEventListener('click', () => {
                const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('block');
                mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            });
        </script>
    </section>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-[#2b334a] text-gray-400 py-12">
        <div class="container max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <!-- Information Section -->
            <div>
                <h2 class="text-white font-bold mb-4">Information</h2>
                <ul class="space-y-2">
                    <li class="flex items-center gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                            stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        Phnom Penh, Cambodia
                    </li>
                    <li class="flex items-center  gap-5 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#9ca3af" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-phone-call">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            <path d="M14.05 2a9 9 0 0 1 8 7.94" />
                            <path d="M14.05 6A5 5 0 0 1 18 10" />
                        </svg>
                        010775589
                    </li>
                    <li class="flex items-center  gap-5 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#9ca3af" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-clock-3">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16.5 12" />
                        </svg>
                        Mon – Sat: 8 am – 5 pm, Sunday: CLOSED
                    </li>
                    <!-- Add other contact items similarly -->
                </ul>
            </div>

            <!-- Menu Section -->
            <div>
                <h2 class="text-white font-bold mb-4">Menu</h2>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ url('/about_us') }}" class="hover:text-white"> About Us</a></li>
                    <li><a href="{{ url('/service') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ url('/product') }}" class="hover:text-white">Products</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
            {{-- Social Media --}}
            <div>
                <h2 class="text-white font-bold mb-4">Social Media</h2>
                <div class="flex gap-4 mt-6 md:mt-0">
                    <!-- Facebook icons -->
                    <a href="#" class="bg-[#252443] p-2 rounded-md hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    <!-- Email icons -->
                    <a href="#" class="bg-[#252443] p-2 rounded-md hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                            fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-youtube">
                            <path
                                d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                            <path d="m10 15 5-3-5-3z" />
                        </svg>
                    </a>
                    <!-- Telegram icons -->
                    <a href="#" class="bg-[#252443] p-2 rounded-md hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                            fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-send">
                            <path
                                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
                            <path d="m21.854 2.147-10.94 10.939" />
                        </svg>
                    </a>
                    <!-- Add other social media icons similarly -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row justify-between p-4 text-gray-500">
            <div class="flex  items-center gap-2 ">
                <img src="https://demo.ajufbox.com/solit/assets/images/logo-solit-light.png" class="w-20 mb-2"
                    alt="Footer Logo">
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto px-4">
            <p class="text-xs ">&copy; Solit | All Rights Reserved</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        // Mobile Menu Toggle Script
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>
