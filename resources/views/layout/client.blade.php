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

<body class="text-black ">
    <!-- Start Navbar -->
    <nav class="bg-white  fixed w-full z-40 top-0 start-0">
        <div
            class="max-w-screen-xl flex flex-wrap justify-center items-center md:justify-between mx-auto p-7 border-b border-gray-400">
            <!-- Left Side - Contact Info -->
            <div class="flex flex-col-reverse gap-5 items-center space-x-3 md:flex-row rtl:space-x-reverse">
                <div class="flex gap-8">
                    <div class="flex items-center mx-auto justify-center space-x-2">
                        <img src="{{ asset('assets/images/logo-solit-dark.png') }}" class="w-20">
                    </div>
                </div>
            </div>
            <!-- Right Side - Social Media and Menu Button -->
            <div class="flex items-center lg:order-2 gap-10">
                <div>
                    <ul class="flex flex-wrap justify-center space-x-4 gap-y-3 text-sm font-Poppins">
                        <li>
                            <a href="{{ url('/') }}" class="text-blue-500 px-2">Home
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ url('/about_us') }}" class=" hover:text-blue-500 border-l pl-2">About Us</a>
                        </li>
                        <li>
                            <a href="services.html" class=" hover:text-blue-500 border-l pl-2">
                                Services</a>
                        </li>
                        <li>
                            <a href="testimonials.html" class=" hover:text-blue-500 border-l pl-2">Pages
                            </a>
                        </li>
                        <li>
                            <a href="contactUs.html" class=" hover:text-blue-500 border-l pl-2">Blog
                            </a>
                        </li>
                        <li>
                            <a href="contactUs.html" class=" hover:text-blue-500 border-l pl-2">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="text-white">
                    <a href="#" class="p-4 bg-[#43428d] hover:bg-[#3a3e67] rounded-md">Chat with Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Strat transform -->
    <div id="controls-carousel" class="relative w-full mt-24" {{-- style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 95%)"> --}}>
        <!-- Carousel wrapper -->
        <div class="relative aspect-[16/6] overflow-hidden rounded-lg">
            <!-- Swiper -->
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
                space-between="30" centered-slides="true" autoplay-delay="3000" autoplay-disable-on-interaction="false">
                <!-- slide 1 -->
                <swiper-slide>
                    <div class="flex  h-full w-full bg-cover bg-center bg-blend-multiply" data-carousel-item
                        style="
                                background-image: url('assets/images/slide1.jpg');
                            ">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div>

                        <!-- Content -->
                        <div class="relative top-1/4 left-44 z-10 w-[560px] text-left text-white px-4">
                            <h1 class="text-5xl font-costum1 text-[#11ace3] ">
                                Smart IT Solution for Your Company
                            </h1>
                            <p class="text-lg mt-5">Pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc
                                aliquet
                                bibendum enim
                                facilisis gravida neque convallis a cras semper auctor neque vitae tempus</p>

                            <div class="mt-7 ">
                                <a href="{{ url('/service') }}"
                                    class=" px-5  py-3 border-2 rounded-md border-white text-white  transition duration-300">
                                    Our Service
                                </a>
                                <a href="#" class="ml-8 hover:underline">
                                    Watch The Video
                                </a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <!-- slide 2 -->
                <swiper-slide>
                    <div class="flex  h-full w-full bg-cover bg-center bg-blend-multiply" data-carousel-item
                        style="
                            background-image: url('assets/images/slide2.jpg');
                        ">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div>

                        <!-- Content -->
                        <div class="relative top-1/4 left-44 z-10 w-[560px] text-left text-white px-4">
                            <h1 class="text-5xl font-costum1 text-[#11ace3] ">
                                Smart IT Solution for Your Company
                            </h1>
                            <p class="text-lg mt-5">Pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc
                                aliquet
                                bibendum enim
                                facilisis gravida neque convallis a cras semper auctor neque vitae tempus</p>

                            <div class="mt-7 ">
                                <a href="{{ url('/service') }}"
                                    class=" px-5  py-3 border-2 rounded-md border-white text-white  transition duration-300">
                                    Our Service
                                </a>
                                <a href="#" class="ml-8 hover:underline">
                                    Watch The Video
                                </a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <!-- slide 3 -->
                <swiper-slide>
                    <div class="flex  h-full w-full bg-cover bg-center bg-blend-multiply" data-carousel-item
                        style="
                                background-image: url('assets/images/slide3.jpg');
                            ">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div>

                        <!-- Content -->
                        <div class="relative top-1/4 left-44 z-10 w-[560px] text-left text-white px-4">
                            <h1 class="text-5xl font-costum1 text-[#11ace3] ">
                                Smart IT Solution for Your Company
                            </h1>
                            <p class="text-lg mt-5">Pharetra vel turpis nunc eget lorem dolor sed viverra ipsum nunc
                                aliquet
                                bibendum enim
                                facilisis gravida neque convallis a cras semper auctor neque vitae tempus</p>

                            <div class="mt-7 ">
                                <a href="{{ url('/service') }}"
                                    class=" px-5  py-3 border-2 rounded-md border-white text-white  transition duration-300">
                                    Our Service
                                </a>
                                <a href="#" class="ml-8 hover:underline">
                                    Watch The Video
                                </a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>

            <!-- Swiper JS -->
            <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        </div>
    </div>
    <!-- End transform -->
    @yield('content')
    {{-- Footer --}}
    <footer class="bg-[#2b334a] text-gray-400 py-12 mt-20 ">
        <div class="container max-w-screen-xl mx-auto grid grid-cols-1  md:grid-cols-3 gap-10 px-4">
            <!-- Information Section -->
            <div class="mx-auto">
                <h2 class="text-white font-bold mb-4">Information</h2>
                <ul>
                    <li class="flex items-center gap-5 mb-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#9ca3af" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-map-pin">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        1234 Sunshine Boulevard, Los Angeles, CA 90001
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
                        +123 777 8888<br>+123 456 789
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
                </ul>
            </div>

            <!-- Menu Section -->
            <div class="mx-auto">
                <h2 class="text-white font-bold mb-4">Menu</h2>
                <ul>
                    <li class="mb-2 hover:text-white"><a href="#">Company</a></li>
                    <li class="mb-2 hover:text-white"><a href="#">Careers</a></li>
                    <li class="mb-2 hover:text-white"><a href="#">Press Media</a></li>
                    <li class="mb-2 hover:text-white"><a href="#">Our Blog</a></li>
                    <li class="mb-2 hover:text-white"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Quick Links Section -->
            <div class="mx-auto">
                <h2 class="text-white font-bold mb-4">Quick Links</h2>
                <ul>
                    <li class="mb-2 hover:text-white"><a href="#">How it’s Work</a></li>
                    <li class="mb-2 hover:text-white"><a href="#">Partners</a></li>
                    <li class="mb-2 hover:text-white"><a href="#">Testimonials</a></li>
                    <li class="mb-2 hover:text-white"><a href="#">Case Studies</a></li>
                    <li class="mb-2 hover:text-white"><a href="#">Pricing</a></li>
                </ul>
            </div>


        </div>

        <!-- Footer Bottom -->
        <div class="max-w-screen-xl mx-auto flex items-center justify-between p-4">
            <div class="container max-w-screen-xl mx-auto px-4 mt-12   text-gray-500">
                <div>
                    <img src="https://demo.ajufbox.com/solit/assets/images/logo-solit-light.png" class="w-20 mb-2">
                    <p class="text-xs">&copy; Solit | All Rights Reserved</p>
                </div>
            </div>

            <div class="flex gap-4 mt-12">
                {{-- Facebook --}}
                <div class="bg-[#252443] p-2 rounded-md hover:bg-blue-600 hover:cursor-pointer">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-facebook text-white">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                </div>
                {{-- YouTube --}}
                <div class="bg-[#252443] p-2 rounded-md hover:bg-blue-600 hover:cursor-pointer">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-youtube">
                            <path
                                d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                            <path d="m10 15 5-3-5-3z" />
                        </svg>
                    </a>
                </div>
                {{-- Telegram --}}
                <div class="bg-[#252443] p-2 rounded-md hover:bg-blue-600 hover:cursor-pointer">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-send">
                            <path
                                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
                            <path d="m21.854 2.147-10.94 10.939" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    {{-- End Footer --}}


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
