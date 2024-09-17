<!DOCTYPE html>
<html lang="en">

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

<body class="font-costum4">
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">

                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        Custom Software Development Services
                    </h1>
                </header>
                <p class="lead">In today’s fast-paced digital landscape, off-the-shelf solutions may not always meet
                    the unique needs of your business. At [Your Company Name], we specialize in Custom Software
                    Development to help businesses achieve their goals through tailored software solutions. With over 15
                    years of experience, our team designs and builds software that is fully aligned with your business
                    processes, ensuring efficiency, scalability, and growth.
                    {{-- <figure class="my-4">
                    <img src="https://cdn.prod.website-files.com/65a93c5ab1bd343d626c6ab7/65de517563386bc17c9a1298_5-basic-principles-communications-plan-community-engagement-p-800.jpg"
                        alt="">
                </figure> --}}
                <div>
                    <h2 class="mt-3 text-xl  leading-tight text-gray-900 lg:mt-4 lg:text-2xl dark:text-white">
                        Our Key Offerings:
                    </h2>
                    <ol class="list-decimal p-4 space-y-4">
                        {{-- container Item 1  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Custom Software Solutions</strong>
                            <p> We develop bespoke software tailored to your specific business needs, ensuring that your
                                processes are streamlined and your goals are met. Whether you need a customer
                                relationship management (CRM) system, enterprise resource planning (ERP) software, or a
                                custom tool for a niche industry, we can help. Our custom software solutions include:
                            </p>
                            {{-- Item1 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Full-cycle software development, from planning to deployment
                                </li>
                                <li>
                                    Integration with your existing systems
                                </li>
                                <li>
                                    Scalable and adaptable solutions designed for future growth
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 2  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Enterprise Software Development</strong>
                            <p> Our enterprise software development services are designed to improve operational
                                efficiency and productivity within your organization. We develop powerful, secure, and
                                scalable solutions for managing large-scale operations, including:
                            </p>
                            {{-- Item2 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    ERP systems for resource planning and business management
                                </li>
                                <li>
                                    CRM systems to manage customer relationships and sales
                                </li>
                                <li>
                                    Business intelligence and analytics platforms for data-driven decision making
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 3  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">SaaS (Software as a Service) Development</strong>
                            <p>We develop SaaS applications that are hosted in the cloud, offering flexible and scalable
                                solutions for businesses of all sizes. Our SaaS development services allow you to offer
                                software to your customers via subscription, with features like:
                            </p>
                            {{-- Item3 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Cloud-based storage and access
                                </li>
                                <li>
                                    Multi-tenant architecture for cost-efficient scaling
                                </li>
                                <li>
                                    Regular updates and maintenance to ensure optimal performance
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 4  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Cloud-Based Solutions</strong>
                            <p>We design and develop cloud-based applications that allow your business to operate
                                seamlessly across different locations and devices. Our cloud software solutions are
                                scalable, secure, and cost-effective, offering features like:
                            </p>
                            {{-- Item4 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Remote access to critical business tools and data
                                </li>
                                <li>
                                    Integration with cloud service providers such as AWS, Azure, and Google Cloud
                                </li>
                                <li>
                                    High availability and scalability to meet your growing business needs
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 5  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Mobile and Web-Based Applications</strong>
                            <p>
                                We develop custom mobile and web-based applications that allow your team and customers
                                to interact with your business from anywhere, at any time. Our mobile and web solutions
                                are designed to offer seamless user experiences and support a wide range of business
                                functions. This includes:
                            </p>
                            {{-- Item5 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Internal business tools for workflow automation
                                </li>
                                <li>
                                    Customer-facing applications for service delivery
                                </li>
                                <li>
                                    Web-based portals for management and collaboration
                                </li>

                            </ul>
                        </li>
                        {{-- container Item 6  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">API Development and Integration</strong>
                            <p>
                                We specialize in creating and integrating Application Programming Interfaces (APIs) that
                                allow different software systems to communicate with each other. Our API development
                                services ensure that your software can easily integrate with third-party services,
                                enhancing functionality and efficiency. Features include:
                            </p>
                            {{-- Item6 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Custom APIs for seamless system integration
                                </li>
                                <li>
                                    Third-party API integration for payments, data processing, and more
                                </li>
                                <li>
                                    Secure and efficient data transfer between systems
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 7  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Legacy Software Modernization</strong>
                            <p>
                                If you have outdated systems that are slowing down your business processes, we can help
                                you modernize them. Our legacy software modernization services involve rebuilding,
                                refactoring, or enhancing existing systems to ensure they meet current business and
                                technological standards. We focus on:
                            </p>
                            {{-- Item7 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Upgrading to modern technology stacks
                                </li>
                                <li>
                                    Improving software performance and security
                                </li>
                                <li>
                                    Migrating legacy systems to the cloud
                                </li>


                            </ul>
                        </li>
                        {{-- container Item 8  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Software Maintenance and Support</strong>
                            <p>
                                After your software is deployed, we provide ongoing maintenance and support to ensure
                                that it continues to function at its best. Our team offers:
                            </p>
                            {{-- Item8 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Bug fixing and troubleshooting
                                </li>
                                <li>
                                    Regular updates and performance improvements
                                </li>
                                <li>
                                    24/7 support to address any issues that may arise
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 9  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Database Development and Management</strong>
                            <p>We develop and manage custom databases to store, manage, and analyze your business data.
                                Our database solutions are optimized for performance and scalability, ensuring that your
                                business can efficiently handle growing data demands. Our services include:
                            </p>
                            {{-- Item9 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Database design and development
                                </li>
                                <li>
                                    Data migration and integration
                                </li>
                                <li>
                                    Performance tuning and optimization
                                </li>

                            </ul>
                        </li>
                        {{-- container Item 10  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Automation Solutions</strong>
                            <p>
                                To help businesses improve efficiency and reduce manual work, we create automation
                                solutions that optimize routine tasks and business processes. Our automation services
                                include:
                            </p>
                            {{-- Item10 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Workflow automation
                                </li>
                                <li>
                                    Robotic Process Automation (RPA)
                                </li>
                                <li>
                                    Integration of AI and machine learning into business processes
                                </li>

                            </ul>
                        </li>

                    </ol>
                </div>
                <div class="border-t">
                    <h2 class="mt-3 text-xl  leading-tight text-gray-900 lg:my-4  lg:text-2xl dark:text-white">
                        Our Development Process:
                    </h2>
                    <ol class="list-decimal p-4 space-y-4">
                        {{-- item 1 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Consultation & Requirement Gathering:</strong>
                            <p>We start by understanding your business needs and processes. Our team conducts thorough
                                research and works with you to define the scope, functionality, and goals of your custom
                                software solution.
                            </p>
                        </li>
                        {{-- item 2 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Planning & Design:</strong>
                            <p>
                                Once we understand your requirements, we create a detailed project plan and design the
                                architecture of the software. This includes creating wireframes, user stories, and
                                system architecture blueprints that align with your business needs.
                            </p>

                        </li>
                        {{-- item 3 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Development:</strong>
                            <p>
                                Our experienced developers build your software using the latest technologies, ensuring
                                that it is secure, scalable, and future-proof. We follow agile development
                                methodologies, allowing for flexibility and regular updates.
                            </p>
                        </li>
                        {{-- item 4 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Testing & Quality Assurance:</strong>
                            <p>
                                Before deployment, we rigorously test the software to ensure it is free of bugs and
                                meets your quality standards. This includes functional testing, performance testing, and
                                security testing.
                            </p>
                        </li>
                        {{-- item 5 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Deployment & Integration:</strong>
                            <p>
                                Once testing is complete, we deploy your software in your chosen environment, whether
                                on-premise or in the cloud. We also ensure that your new system is fully integrated with
                                any existing systems you use.
                            </p>
                        </li>
                        {{-- item 6 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Ongoing Support & Maintenance:</strong>
                            <p>
                                After deployment, we continue to provide maintenance and support, ensuring your software
                                is always up-to-date, secure, and functioning optimally. We provide regular updates and
                                enhancements based on your feedback and evolving business needs.
                            </p>
                        </li>

                    </ol>
                </div>
            </article>
        </div>
    </main>

    {{-- Footer --}}
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
                    <!-- Add other contact items similarly -->
                </ul>
            </div>

            <!-- Menu Section -->
            <div>
                <h2 class="text-white font-bold mb-4">Menu</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white">Company</a></li>
                    <li><a href="#" class="hover:text-white">Careers</a></li>
                    <li><a href="#" class="hover:text-white">Press Media</a></li>
                    <li><a href="#" class="hover:text-white">Our Blog</a></li>
                    <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-white font-bold mb-4">social media</h2>
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
