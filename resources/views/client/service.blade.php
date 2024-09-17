@extends('layout.client')
@section('content')
    <!-- Strat Section -->
    <section class="py-8 mt-10 antialiased md:py-12 overflow-hidden ">

        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto text-center max-w-full space-y-2">
                {{-- <button class="py-2 px-6 bg-primary1 text-white rounded-full text-xl font-costum4 tracking-normal">
                    What We Do For You
                </button> --}}
                <h1 class="font-costum5 text-primary1 text-3xl mx-auto text-center max-w-96 leading-normal ">
                    company profile
                </h1>
                <p class="font-costum8 text-black text-sm leading-loose  mx-auto text-center max-w-[500px]">
                    With over 15 years of industry experience, our company is a leading provider of cutting-edge technology
                    solutions. We specialize in delivering a wide range of services tailored to meet the unique needs of our
                    clients across various sectors. Our expertise ensures that we offer innovative and reliable solutions
                    that drive business growth and digital transformation.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 font-costum3 gap-6 mt-6">
                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-[40%] mx-auto mt-4" src="{{ asset('assets/images/digital-services.png') }}"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Web Development and Design
                            </h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400">
                            We craft dynamic, user-friendly, and visually appealing websites that provide seamless user
                            experiences across all devices.
                        </p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:border-primary2 hover:text-primary1 rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>

                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/digital-services.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                SEO and Digital Marketing
                            </h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400">
                            Our team of digital marketing experts helps you enhance your online visibility, drive targeted
                            traffic, and increase conversions.
                        </p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:border-primary2 hover:text-primary1 rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>

                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/digital-services.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Mobile App Development
                            </h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400">
                            We develop intuitive and functional mobile applications tailored to your business needs.
                        </p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:border-primary2 hover:text-primary1 rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>

                <!-- Repeat similar structure for other services -->

            </div>

        </div>
    </section>
    <!--End Section  -->


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    </html>
@endsection
