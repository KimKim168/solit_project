@extends('layout.client')
@section('content')
    <!-- Strat transform -->
    <div id="controls-carousel" class="relative w-full mt-24" {{-- style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 95%)"> --}}>
        <!-- Carousel wrapper -->
        <div class="relative aspect-[16/6] overflow-hidden rounded-lg">
            <!-- Swiper -->
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
                centered-slides="true" autoplay-delay="3000" autoplay-disable-on-interaction="false">
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

                            <div class="mt-7 flex">
                                <a href="{{ url('/service') }}"
                                    class=" px-5  py-3 border-2 rounded-md border-white text-white  transition duration-300">
                                    Our Service
                                </a>

                                <a href="https://www.youtube.com/watch?v=Ctld3Ad6xtU"
                                    class="ml-8 hover:underline flex justify-center items-center gap-3 glightbox3">
                                    <img src="{{ asset('assets/images/play.png') }}" class="w-14 h-full ">
                                    <p>Watch The Video</p>
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

                            <div class="mt-7 flex">
                                <a href="{{ url('/service') }}"
                                    class=" px-5  py-3 border-2 rounded-md border-white text-white  transition duration-300">
                                    Our Service
                                </a>
                                <a href="https://www.youtube.com/watch?v=Ctld3Ad6xtU"
                                    class="ml-8 hover:underline flex justify-center items-center gap-3 glightbox3">
                                    <img src="{{ asset('assets/images/play.png') }}" class="w-14 h-full ">
                                    <p>Watch The Video</p>
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

                            <div class="mt-7 flex">
                                <a href="{{ url('/service') }}"
                                    class=" px-5  py-3 border-2 rounded-md border-white text-white  transition duration-300">
                                    Our Service
                                </a>
                                <a href="https://www.youtube.com/watch?v=Ctld3Ad6xtU"
                                    class="ml-8 hover:underline flex justify-center items-center gap-3 glightbox3">
                                    <img src="{{ asset('assets/images/play.png') }}" class="w-14 h-full ">
                                    <p>Watch The Video</p>
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
    <section class="max-w-screen-xl mx-auto  mt-32 overflow-hidden">

        <div class=" grid grid-cols-2 gap-10  mx-auto max-w-screen-xl lg:px-6">
            <div class="relative  w-[500px] aspect-square mx-auto aos-init aos-animate" data-aos="zoom-out-left"
                data-aos-duration="1000">
                <!-- First Image -->
                <div class="absolute -top-20 -left-10">
                    <img class="w-[500px] aspect-auto object-cover" src="{{ asset('assets/images/about_us.jpg') }}"
                        alt="Trainer assisting woman with leg press">
                </div>
                <!-- Second Image -->
                <div class="absolute bottom-10 -right-10 p-2 bg-white rounded-md">
                    <img class="w-[300px] aspect-auto rounded-md object-cover"
                        src="https://demo.ajufbox.com/solit/assets/images/about-us/about-us-02.jpg"
                        alt="Trainer helping man with squat">
                </div>
            </div>
            <div class="text-left space-y-4  aos-init aos-animate">
                <div
                    class="font-costum8 text-[#6251ef]  border-b-2 border-t-2 border-primary1  inline-block py-2 px-4 rounded-md">
                    About
                    Us</div>
                <h2 class="mb-4 text-5xl font-costum4 leading-normal font-bold" data-aos="zoom-out-right"
                    data-aos-duration="1000">
                    Our Technology Enables You to Enjoy the Finest Software Experience
                </h2>
                <p class="mb-6  text-sm text-text_color2 ">
                    Ut sem nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis
                    auctor elit sed vulputate mi sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 text-text_color2" data-aos="fade-up"
                    data-aos-duration="1000">
                    <li class="flex items-center space-x-2 ">
                        <span class="text-blue-500">&#10003;</span>
                        <span>Holistic Approach</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-blue-500">&#10003;</span>
                        <span>Proven Track Record</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-blue-500">&#10003;</span>
                        <span>Attention to Detail</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <span class="text-blue-500">&#10003;</span>
                        <span>Collaborative Communication</span>
                    </li>
                </ul>
                <!-- Button -->
                <a href="#"
                    class="inline-block px-8  py-3 font-costum8 text-white bg-primary1 rounded-md hover:bg-primary2 transition-colors"
                    data-aos="fade-up" data-aos-duration="2000">
                    Start a project
                </a>
            </div>
        </div>
    </section>
    <!-- End middle -->

    <!-- Strat Section -->
    <section class="py-8 mt-20 antialiased md:py-12 overflow-hidden bg-primary2">

        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto text-center max-w-full space-y-2">
                <button class="py-2 px-6 bg-primary1 text-white rounded-full text-xl font-costum4 tracking-normal">
                    What We Do For You
                </button>
                <h1 class="font-costum5 text-white text-3xl mx-auto text-center max-w-96 leading-loose ">
                    We Deal With The Aspects
                    Of Professional IT Services

                </h1>
                <p class="font-costum8 text-white text-sm leading-loose  mx-auto text-center max-w-[500px]">
                    Morem ipsum dolor sit amet,
                    consectetur adipiscing elita florai psum dolor ectetuolor sit amet, consectetur adipiscine.
                </p>
            </div>


            <div class="grid grid-cols-4 font-costum3 gap-6 mt-6 ">
                <div data-aos="fade-right" data-aos-offset="300" data-aos-duration="2000"
                    class="max-w-sm bg-white border text-center p-3
                    border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-[30%] mx-auto mt-4"
                            src="{{ asset('assets/images/digital-services.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Network
                                Security</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="{{ url('/detail') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:duration-500 hover:border-2 hover:border-primary2 hover:text-primary1 rounded-lg  ">
                            See Details
                        </a>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-offset="300" data-aos-duration="1500"
                    class="max-w-sm  bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-[30%] mx-auto mt-4"
                            src="{{ asset('assets/images/digital-services.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Network
                                Security</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="{{ url('/detail') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:duration-500 hover:border-2 hover:border-primary2 hover:text-primary1 rounded-lg  ">
                            See Details
                        </a>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-offset="300" data-aos-duration="1000"
                    class="max-w-sm  bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-[30%] mx-auto mt-4"
                            src="{{ asset('assets/images/digital-services.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Network
                                Security</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="{{ url('/detail') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:duration-500 hover:border-2 hover:border-primary2 hover:text-primary1 rounded-lg  ">
                            See Details
                        </a>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-offset="300" data-aos-duration="500"
                    class="max-w-sm  bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-[30%] mx-auto mt-4"
                            src="{{ asset('assets/images/digital-services.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Network
                                Security</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="{{ url('/detail') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:duration-500 hover:border-2 hover:border-primary2 hover:text-primary1 rounded-lg  ">
                            See Details
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Section  -->

    {{-- completed project --}}
    <section class="mt-20">
        <div class="max-w-screen-xl mx-auto">

            <div class="" data-aos="flip-down" data-aos-duration="1000">
                <h1 class="font-costum5 text-5xl">
                    Completed Project
                </h1>
                <p class="text-base max-w-[500px] text-justify mt-5">
                    Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare
                    lectus sit amet
                </p>
            </div>
            <div class="mt-10 grid grid-cols-4 gap-8">
                {{-- item 1 --}}
                <div
                    class="max-w-sm border border-slate-300 rounded-md hover:shadow-zinc-400 hover:shadow-2xl duration-500 hover:cursor-pointer">
                    <img src="https://demo.ajufbox.com/solit/assets/images/team/team-1.jpg"
                        class="rounded-t-md rounded-br-[200px]">
                    <div class="p-8">
                        <h1 class="hover:text-blue-600 hover:cursor-pointer font-bold text-2xl ">John Smith</h1>
                        <p class="font-medium text-text_color1 text-xl mt-2">Data Analyst</p>
                    </div>
                </div>
                {{-- item 2 --}}
                <div
                    class="max-w-sm border border-slate-300 rounded-md hover:shadow-zinc-400 hover:shadow-2xl duration-500 hover:cursor-pointer">
                    <img src="https://demo.ajufbox.com/solit/assets/images/team/team-2.jpg"
                        class="rounded-t-md rounded-br-[200px]">
                    <div class="p-8">
                        <h1 class="hover:text-blue-600 hover:cursor-pointer font-bold text-2xl ">John Smith</h1>
                        <p class="font-medium text-text_color1 text-xl mt-2">Data Analyst</p>
                    </div>
                </div>
                {{-- item 3 --}}
                <div
                    class="max-w-sm border border-slate-300 rounded-md hover:shadow-zinc-400 hover:shadow-2xl duration-500 hover:cursor-pointer">
                    <img src="https://demo.ajufbox.com/solit/assets/images/team/team-3.jpg"
                        class="rounded-t-md rounded-br-[200px]">
                    <div class="p-8">
                        <h1 class="hover:text-blue-600 hover:cursor-pointer font-bold text-2xl ">John Smith</h1>
                        <p class="font-medium text-text_color1 text-xl mt-2">Data Analyst</p>
                    </div>
                </div>
                {{-- item 4 --}}
                <div
                    class="max-w-sm border border-slate-300 rounded-md hover:shadow-zinc-400 hover:shadow-2xl duration-500 hover:cursor-pointer">
                    <img src="https://demo.ajufbox.com/solit/assets/images/team/team-4.jpg"
                        class="rounded-t-md rounded-br-[200px]">
                    <div class="p-8">
                        <h1 class="hover:text-blue-600 hover:cursor-pointer font-bold text-2xl ">John Smith</h1>
                        <p class="font-medium text-text_color1 text-xl mt-2">Data Analyst</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End completed project --}}

    {{-- Blog --}}
    <section class="py-8  mt-20 antialiased md:py-28 overflow-hidden bg-primary2">
        <div class="text-center mb-8">
            <p class=" font-costum4 bg-primary1 text-white inline-block p-2 px-4 rounded-full text-xl">Our Blog
            </p>
            <h2 class="text-4xl font-costum5 text-white mt-4">Latest News and Updates</h2>
        </div>

        <!-- Blog Cards -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden ">
                    <img class="w-full h-48 object-cover"
                        src="https://demo.ajufbox.com/solit/assets/images/blog/blog-1.jpg" alt="Blog Image">
                    <div class="p-6">
                        <h3
                            class="text-lg font-semibold text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer hover:">
                            Exploring the Future Cutting-Edge
                            Technologies</h3>
                        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Fuga accusantium dolore autem saepe. </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="w-8 h-8 rounded-full mr-2"
                                    src="https://demo.ajufbox.com/solit/assets/images/blog/blog-2.jpg" alt="Author Image">
                                <span class="text-gray-800 text-sm">Adam Smith</span>
                            </div>
                            <span class="text-gray-500 text-sm">August 3</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover"
                        src="https://demo.ajufbox.com/solit/assets/images/blog/blog-3.jpg" alt="Blog Image">
                    <div class="p-6">
                        <h3
                            class="text-lg font-semibold text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer hover:">
                            Exploring the Future Cutting-Edge
                            Technologies</h3>
                        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing
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

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover"
                        src="https://demo.ajufbox.com/solit/assets/images/blog/blog-2.jpg" alt="Blog Image">
                    <div class="p-6">
                        <h3
                            class="text-lg font-semibold text-gray-900 mb-2 hover:text-blue-600 hover:cursor-pointer hover:">
                            Exploring the Future Cutting-Edge
                            Technologies</h3>
                        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing
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
