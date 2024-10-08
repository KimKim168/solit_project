@extends('layout.client')
@section('content')
    <!-- Strat transform -->
    <div id="controls-carousel" class="relative w-full mt-[75px] md:mt-[98px] lg:mt-[110px] ">
        <!-- Carousel wrapper -->
        <div class="relative aspect-[16/5] md:aspect-[16/5]  w-full overflow-hidden ">
            <!-- Swiper -->
            <swiper-container class="mySwiper w-full h-full" centered-slides="true" autoplay-delay="4000"
                autoplay-disable-on-interaction="false">
                <!-- slide 1 -->
                <swiper-slide class="w-full h-full">
                    <div class="flex h-full w-full relative bg-cover bg-center bg-blend-multiply" data-carousel-item
                        style="background-image: url('assets/images/cora-mobile.png');">
                        <!-- Dark Overlay -->
                        {{-- <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div> --}}

                        <!-- Content -->
                        <div
                            class="absolute top-1/2 left-3 md:left-5 lg:left-20 transform -translate-y-1/2 z-10 w-full max-w-md lg:max-w-[560px] text-left text-white px-4 lg:px-0">
                            <h1
                                class=" text-[12px] sm:text-xl md:text-xl lg:text-5xl font-costum1 bg-gradient-to-r from-white to-white bg-clip-text text-transparent max-w-[9rem] sm:max-w-[11rem] md:max-w-full">
                                Innovative Mobile App Solutions
                            </h1>
                            <p
                                class="text-[8px] line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 sm:text-sm md:text-sm lg:text-lg  sm:text-white mt-1 lg:mt-5 max-w-[30ch] sm:max-w-[60ch] ">
                                Transform your ideas into engaging and high-performance mobile applications. Our team
                                delivers custom-built apps
                                with intuitive design and seamless functionality across platforms.
                            </p>
                            <div class="mt-1 md:mt-4">
                                <a href="{{ url('/mobile_app_development') }}"
                                    class="text-[8px] sm:text-sm md:text-lg border border-white  rounded-md p-1 px-3 md:px-5 md:py-3 md:border-2 text-white transition duration-300">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <!-- slide 2 -->
                {{-- <swiper-slide class="w-full h-full">
                    <div class="flex h-full w-full relative bg-cover bg-center bg-blend-multiply" data-carousel-item
                        style="background-image: url('assets/images/slide2.jpg');">
                        <!-- Dark Overlay -->
                        {{-- <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div> --}}

                <!-- Content -->
                {{-- <div
                            class="absolute top-1/2 left-3 md:left-5 lg:left-20 transform -translate-y-1/2 z-10 w-full max-w-md lg:max-w-[560px] text-left text-white px-4 lg:px-0">
                            <h1
                                class="text-[12px] sm:text-xl md:text-xl lg:text-5xl font-costum1 text-white max-w-[9rem] sm:max-w-[11rem] md:max-w-full">
                                Custom Web Solutions
                            </h1>
                8    <p
                                class="text-[10px] line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 sm:text-sm md:text-sm lg:text-lg  sm:text-white mt-1 lg:mt-5 max-w-[30ch] sm:max-w-[60ch] ">
                                Build a unique online presence with our custom web development services. We design and
                                develop responsive, fast, and secure websites that elevate your brand and engage your
                                audience.
                    1     </p>

                            <div class="mt-2 md:mt-4">
                                <a href="{{ url('/custom_software_development') }}"
                                    class="text-[8px] sm:text-sm md:text-lg border border-white rounded-md p-1 px-3 md:px-5 md:py-3 md:border-2 text-white transition duration-300">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div> 
                </swiper-slide> --}}
                <!-- slide 3 -->
                <swiper-slide class="w-full h-full">
                    <div class="flex h-full w-full relative bg-cover bg-center bg-blend-multiply" data-carousel-item
                        style="background-image: url('assets/images/Cora-hosting.png');">
                        <!-- Dark Overlay -->
                        {{-- <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div> --}}

                        <!-- Content -->
                        <div
                            class="absolute top-1/2 left-3 md:left-5 lg:left-20 transform -translate-y-1/2 z-10 w-full max-w-md lg:max-w-[560px] text-left text-white px-4 lg:px-0">
                            <h1
                                class="text-[12px] sm:text-xl md:text-xl lg:text-5xl font-costum1 text-[#FFFF00] max-w-[9rem] sm:max-w-[11rem] md:max-w-full">
                                Cloud Hosting Solutions
                            </h1>
                            <p
                                class="text-[8px] line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 sm:text-sm md:text-sm lg:text-lg  sm:text-white mt-1 lg:mt-5 max-w-[30ch] sm:max-w-[60ch] ">
                                Scale your business with ease using our cloud hosting solutions. Our services provide
                                flexibility, speed, and security, ensuring your website can handle growing traffic and data
                                demands.
                            </p>
                            <div class="mt-1 md:mt-4">
                                <a href="{{ url('/cloud_hosting') }}"
                                    class="text-[8px] sm:text-sm md:text-lg border border-white rounded-md p-1 px-3 md:px-5 md:py-3 md:border-2 text-white transition duration-300">
                                    Learn More
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
    <!-- strat middle -->
    <section class="max-w-screen-xl mx-auto mt-20 sm:mt-32 overflow-hidden px-4">
        <div class="p-5 sm:p-10  flex flex-col lg:flex-row gap-10 mx-auto max-w-screen-xl lg:px-6">
            <!-- Image Section -->
            <div class="relative md:px-10 w-full md:mr-10 md:w-10/12 lg:w-1/2 aspect-square mx-auto"
                data-aos="zoom-out-left" data-aos-duration="1000">
                <!-- First Image -->
                <div class="absolute -top-10 md:-top-20 -left-5 md:-left-10 w-[80%] md:w-[500px]">
                    <img class="w-full aspect-square object-cover" src="{{ asset('assets/images/about_us.jpg') }}"
                        alt="Trainer assisting woman with leg press">
                </div>
                <!-- Second Image -->
                <div
                    class="absolute bottom-5 md:bottom-10 -right-5 md:-right-10 p-2 bg-white rounded-md w-[60%] md:w-[300px]">
                    <img class="w-full aspect-square rounded-md object-cover"
                        src="https://demo.ajufbox.com/solit/assets/images/about-us/about-us-02.jpg"
                        alt="Trainer helping man with squat">
                </div>
            </div>
            <!-- Text Section -->
            <div class="text-left space-y-4 lg:w-1/2 aos-init aos-animate">
                <div
                    class="font-costum8 text-[#6251ef] border-b-2 border-t-2 border-primary1 inline-block py-2 px-4 rounded-md">
                    About Us
                </div>
                <h2 class="mb-4 text-5xl md:text-6xl font-costum4 leading-normal  bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text"
                    data-aos="zoom-out-right" data-aos-duration="1000">
                    Cora Soft
                </h2>

                <p class="mb-6 text-xl md:text-[22px] text-text_color2 line-clamp-2">
                    {{-- With over 15 years of industry experience, our company is a leading provider of cutting-edge technology
                    solutions. We specialize in delivering a wide range of services tailored to meet the unique needs of our
                    clients across various sectors. Our expertise ensures that we offer innovative and reliable solutions
                    that drive business growth and digital transformation. --}}
                    With extensive industry experience, our company is a leading provider of cutting-edge technology
                    solutions. We specialize in delivering a wide range of services tailored to meet the unique needs of our
                    clients.
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 text-[16px] gap-6 mb-6 bg-gradient-to-r from-cyan-800 to-blue-700 text-transparent bg-clip-text "
                    data-aos="fade-up" data-aos-duration="1000">
                    <li class="flex items-center space-x-2">
                        <span class="text-blue-500">&#10003;</span>
                        <span>Web Development and Design</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-blue-500">&#10003;</span>
                        <span>SEO and Digital Marketing</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-blue-500">&#10003;</span>
                        <span>Mobile App Development</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-blue-500">&#10003;</span>
                        <span>Custom Software Development</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-blue-500">&#10003;</span>
                        <span>Cloud Hosting</span>
                    </li>
                </ul>
                <!-- Button -->
                <a href="{{ url('/about_us') }}"
                    class="inline-block px-8 py-3 font-costum8 text-white bg-gradient-to-r from-teal-400 to-[#2d37a4] hover:bg-transparent hover:from-blue-900 hover:to-teal-400  rounded-md  transition-colors"
                    data-aos="fa[10px] border sm:text-sm data-aos-duration="2000">
                    Learn More
                </a>
            </div>
        </div>
    </section>
    <!-- End middle -->

    <!-- Strat Section -->
    <section class="py-8 mt-20 antialiased  overflow-hidden bg-primary1 ">

        <div class=" p-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="mx-auto text-center max-w-full space-y-2">
                <button class="py-2 px-6 bg-primary2 text-white rounded-full text-xl md:text-3xl  tracking-normal ">
                    What We Do For You
                </button>
                <h1 class=" text-white text-xl md:text-2xl  mx-auto text-center max-w-[600px] leading-normal line-clamp-3">
                    We Deal With The Aspects
                    Of Professional IT Services

                </h1>
                {{-- <p class="font-costum8 text-white text-sm leading-loose  mx-auto text-center max-w-[500px]">
                    Morem ipsum dolor sit amet,
                    consectetur adipiscing elita florai psum dolor ectetuolor sit amet, consectetur adipiscine.
                </p> --}}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-6 mt-6">
                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-[30%] sm:w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/app-design.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Web Development and Design
                            </h5>
                        </a>
                        <p class="mb-3 text-xl md:text-[22px] text-text_color2 line-clamp-2">
                            We craft dynamic, user-friendly, and visually appealing websites that provide seamless user
                            experiences across all devices. From design to development, we bring your vision to life,
                            ensuring your online presence stands out.
                        </p>
                        <a href="{{ url('development_and_design_detail') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-teal-400 to-[#2d37a4]  border-transparent hover:bg-transparent hover:from-blue-900 hover:to-teal-400  rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>

                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg  w-[30%] sm:w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/seo.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                SEO and Digital Marketing
                            </h5>
                        </a>
                        <p class="mb-3 text-xl md:text-[22px] text-text_color2 line-clamp-2">
                            Our team of digital marketing experts helps you enhance your online visibility, drive targeted
                            traffic, and increase conversions through strategic SEO practices and comprehensive digital
                            marketing campaigns.
                        </p>
                        <a href="{{ url('seo_and_digital_marketing') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-teal-400 to-[#2d37a4]  border-transparent hover:bg-transparent hover:from-blue-900 hover:to-teal-400  rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>

                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg  w-[30%] sm:w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/mobile.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Mobile App Development
                            </h5>
                        </a>
                        <p class="mb-3 text-xl md:text-[22px] text-text_color2 line-clamp-2">
                            We develop intuitive and functional mobile applications tailored to your business needs,
                            ensuring compatibility across both iOS and Android platforms for a wider reach and improved
                            customer engagement.
                        </p>
                        <a href="{{ url('mobile_app_development') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-teal-400 to-[#2d37a4]  border-transparent hover:bg-transparent hover:from-blue-900 hover:to-teal-400  rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>
                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg  w-[30%] sm:w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/custom-software.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Custom Software Development
                            </h5>
                        </a>
                        <p class="mb-3 text-xl md:text-[22px] text-text_color2 line-clamp-2">
                            We build robust, scalable, and secure custom software solutions to address your specific
                            business challenges, helping you streamline operations, improve efficiency, and achieve your
                            goals.
                        </p>
                        <a href="{{ url('custom_software_development') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-teal-400 to-[#2d37a4]  border-transparent hover:bg-transparent hover:from-blue-900 hover:to-teal-400  rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>
                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg  w-[30%] sm:w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/cloud.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Cloud Hosting
                            </h5>
                        </a>
                        <p class="mb-3 text-xl md:text-[22px] text-text_color2 line-clamp-2">
                            Our reliable cloud hosting services provide secure, scalable, and cost-effective solutions for
                            your data and applications, ensuring optimal performance and accessibility for your business.
                        </p>
                        <a href="{{ url('cloud_hosting') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-teal-400 to-[#2d37a4]  border-transparent hover:bg-transparent hover:from-blue-900 hover:to-teal-400  rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>
                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg  w-[30%] sm:w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/it.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                IT Consultancy
                            </h5>
                        </a>
                        <p class="mb-3 text-xl md:text-[22px] text-text_color2 line-clamp-2">
                            we provide comprehensive IT consultancy services designed to empower your business with
                            innovative technology solutions. Our expert consultants work closely with you to
                        </p>
                        <a href="{{ url('it_consultancy_services') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-teal-400 to-[#2d37a4]  border-transparent hover:bg-transparent hover:from-blue-900 hover:to-teal-400  rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>

                <!-- Repeat similar structure for other services -->

            </div>
        </div>
    </section>
    <!--End Section  -->

    {{-- completed project --}}
    <section class="mt-6 md:mt-20 overflow-hidden p-5">
        <div class="max-w-screen-xl mx-auto">
            <div class="" data-aos="flip-down" data-aos-duration="1000">
                <h1
                    class="font-costum5 text-5xl bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text ">
                    Completed Projects
                </h1>
                <p class="text-xl md:text-[22px] text-text_color2 max-w-[500px] text-justify mt-5 ">
                    Explore our range of completed projects, showcasing innovative solutions and expert craftsmanship. Each
                    project reflects our commitment to quality, precision, and client satisfaction, delivered on time and
                    tailored to meet specific needs.
                </p>
            </div>
            <div class="mt-10 aspect-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                {{-- item 1 --}}
                <a href="{{ url('/completed_project') }}">
                    <div
                        class=" border border-slate-300 rounded-md hover:shadow-zinc-400 hover:shadow-2xl duration-500 hover:cursor-pointer">
                        <img src="{{ asset('assets/images/repeatgym.png') }}"
                            class="w-full aspect-[3/4] object-cover rounded-t-md rounded-br-[200px]">

                        <div class="p-8">
                            <h1 class="hover:text-blue-600 hover:cursor-pointer font-bold text-xl md:text-2xl">
                                Repeat Gym
                            </h1>
                            <p class="text-xl md:text-[22px] text-text_color2 mt-2">Web Development and Design
                            </p>
                        </div>
                    </div>
                </a>
                {{-- item 2 --}}
                <a href="{{ url('/completed_project') }}">
                    <div
                        class=" border border-slate-300 rounded-md hover:shadow-zinc-400 hover:shadow-2xl duration-500 hover:cursor-pointer">
                        <img src="{{ asset('assets/images/repeat1.png') }}"
                            class="w-full aspect-[3/4] object-cover rounded-t-md rounded-br-[200px]">
                        <div class="p-8">
                            <h1 class="hover:text-blue-600 hover:cursor-pointer font-bold text-xl md:text-2xl">
                                Repeat Gym
                            </h1>
                            <p class="text-xl md:text-[22px] text-text_color2 mt-2">Web Development and Design
                            </p>
                        </div>
                    </div>
                </a>
                {{-- item 3 --}}
                <a href="{{ url('/completed_project') }}">
                    <div
                        class=" border border-slate-300 rounded-md hover:shadow-zinc-400 hover:shadow-2xl duration-500 hover:cursor-pointer">
                        <img src="{{ asset('assets/images/repeatgym.png') }}"
                            class="w-full aspect-[3/4] object-cover rounded-t-md rounded-br-[200px]">
                        <div class="p-8">
                            <h1 class="hover:text-blue-600 hover:cursor-pointer font-bold text-xl md:text-2xl">
                                Repeat Gym
                            </h1>
                            <p class="text-xl md:text-[22px] text-text_color2 mt-2">Web Development and Design
                            </p>
                        </div>
                    </div>
                </a>
                {{-- item 4 --}}
                <a href="{{ url('/completed_project') }}">
                    <div
                        class=" border border-slate-300 rounded-md hover:shadow-zinc-400 hover:shadow-2xl duration-500 hover:cursor-pointer">
                        <img src="{{ asset('assets/images/repeatgym.png') }}"
                            class="w-full aspect-[3/4] object-cover rounded-t-md rounded-br-[200px]">
                        <div class="p-8">
                            <h1 class="hover:text-blue-600 hover:cursor-pointer font-bold text-xl md:text-2xl">
                                Repeat Gym
                            </h1>
                            <p class="text-xl md:text-[22px] text-text_color2 mt-2">Web Development and Design
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- End completed project --}}

    {{-- Blog --}}
    <section class="py-8  p-4  mt-20 antialiased overflow-hidden bg-primary1">
        <div class="text-center mb-8">
            <p
                class=" font-costum4 bg-primary2 text-white inline-block p-2 px-4 rounded-full text-xl md:text-3xl font-costum4 tracking-normal">
                Our Blog
            </p>
            <h2
                class="font-costum4 text-white sm:text-xl mx-auto text-center max-w-[600px] leading-normal line-clamp-3 mt-2">
                Latest News and Updates</h2>
        </div>

        <!-- Blog Cards -->
        <div class="max-w-7xl mx-auto ">
            <div class="grid gap-6 lg:grid-cols-3">
                <!-- Card 1 -->
                <a href="{{ url('/latest_news') }}">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden ">
                        <img class="w-full h-48 object-cover"
                            src="https://demo.ajufbox.com/solit/assets/images/blog/blog-1.jpg" alt="Blog Image">
                        <div class="p-6">
                            <h3
                                class="text-xl md:text-2xl font-bold tracking-tight text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer hover:">
                                Exploring the Future Cutting-Edge
                                Technologies</h3>
                            <p class="text-xl md:text-[20px] text-text_color2 line-clamp-2 mb-4">Lorem ipsum dolor sit,
                                amet consectetur
                                adipisicing
                                elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Fuga accusantium dolore autem saepe. </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img class="w-8 h-8 rounded-full mr-2"
                                        src="https://demo.ajufbox.com/solit/assets/images/blog/blog-2.jpg"
                                        alt="Author Image">
                                    <span class="text-gray-800 text-sm">Adam Smith</span>
                                </div>
                                <span class="text-gray-500 text-sm">August 3</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="{{ url('/latest_news') }}">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img class="w-full h-48 object-cover"
                            src="https://demo.ajufbox.com/solit/assets/images/blog/blog-3.jpg" alt="Blog Image">
                        <div class="p-6">
                            <h3
                                class="text-xl md:text-2xl font-bold tracking-tight text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer hover:">
                                Exploring the Future Cutting-Edge
                                Technologies</h3>
                            <p class="text-xl md:text-[20px] text-text_color2 line-clamp-2 mb-4">Lorem ipsum dolor sit,
                                amet consectetur
                                adipisicing
                                elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Fuga accusantium dolore autem saepe. </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img class="w-8 h-8 rounded-full mr-2" src="https://via.placeholder.com/40"
                                        alt="Author Image">
                                    <span class="text-gray-800 text-sm">Emma Kandel</span>
                                </div>
                                <span class="text-gray-500 text-sm">August 2</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="{{ url('/latest_news') }}">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img class="w-full h-48 object-cover"
                            src="https://demo.ajufbox.com/solit/assets/images/blog/blog-2.jpg" alt="Blog Image">
                        <div class="p-6">
                            <h3
                                class="text-xl md:text-2xl font-bold tracking-tight text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer hover:">
                                Exploring the Future Cutting-Edge
                                Technologies</h3>
                            <p class="text-xl md:text-[20px] text-text_color2 line-clamp-2 mb-4">Lorem ipsum dolor sit,
                                amet consectetur
                                adipisicing
                                elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Fuga accusantium dolore autem saepe. </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img class="w-8 h-8 rounded-full mr-2" src="https://via.placeholder.com/40"
                                        alt="Author Image">
                                    <span class="text-gray-800 text-sm">Thomas Johnson</span>
                                </div>
                                <span class="text-gray-500 text-sm">August 1</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- End Blog --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    </html>
@endsection
