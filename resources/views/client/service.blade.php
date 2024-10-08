@extends('layout.client')
@section('content')
    <!-- Strat Section -->
    <section class="py-8 mt-20 antialiased md:py-12 overflow-hidden bg-primary2 ">

        <div class=" p-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto text-center max-w-full space-y-2">
                <button
                    class="py-2 px-6 bg-primary1 text-white rounded-full text-xl md:text-3xl font-costum4 tracking-normal">
                    What We Do For You
                </button>
                <h1
                    class="font-costum4 text-white sm:text-xl mx-auto text-center max-w-[600px] leading-normal line-clamp-3 ">
                    With extensive industry experience, our company is a leading provider of cutting-edge technology
                    solutions. We specialize in delivering a wide range of services tailored to meet the unique needs of our
                    clients.
                </h1>
                {{-- <p class="font-costum8 text-white text-sm leading-loose  mx-auto text-center max-w-[500px]">
                    Morem ipsum dolor sit amet,
                    consectetur adipiscing elita florai psum dolor ectetuolor sit amet, consectetur adipiscine.
                </p> --}}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 font-costum3 gap-6 mt-6">
                <div
                    class="w-full bg-white border text-center p-3 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg w-[30%] sm:w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/app-design.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900  dark:text-white">
                                Web Development and Design
                            </h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400 line-clamp-2">
                            We craft dynamic, user-friendly, and visually appealing websites that provide seamless user
                            experiences across all devices. From design to development, we bring your vision to life,
                            ensuring your online presence stands out.
                        </p>
                        <a href="{{ url('development_and_design_detail') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:border-primary2 hover:text-primary1 rounded-lg">
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
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900  dark:text-white">
                                SEO and Digital Marketing
                            </h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400 line-clamp-2">
                            Our team of digital marketing experts helps you enhance your online visibility, drive targeted
                            traffic, and increase conversions through strategic SEO practices and comprehensive digital
                            marketing campaigns.
                        </p>
                        <a href="{{ url('seo_and_digital_marketing') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:border-primary2 hover:text-primary1 rounded-lg">
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
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900  dark:text-white">
                                Mobile App Development
                            </h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400 line-clamp-2">
                            We develop intuitive and functional mobile applications tailored to your business needs,
                            ensuring compatibility across both iOS and Android platforms for a wider reach and improved
                            customer engagement.
                        </p>
                        <a href="{{ url('mobile_app_development') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:border-primary2 hover:text-primary1 rounded-lg">
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
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900  dark:text-white">
                                Custom Software Development
                            </h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400 line-clamp-2">
                            We build robust, scalable, and secure custom software solutions to address your specific
                            business challenges, helping you streamline operations, improve efficiency, and achieve your
                            goals.
                        </p>
                        <a href="{{ url('custom_software_development') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:border-primary2 hover:text-primary1 rounded-lg">
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
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900  dark:text-white">
                                Cloud Hosting
                            </h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400 line-clamp-2">
                            Our reliable cloud hosting services provide secure, scalable, and cost-effective solutions for
                            your data and applications, ensuring optimal performance and accessibility for your business.
                        </p>
                        <a href="{{ url('cloud_hosting') }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary1 border-2 border-transparent hover:bg-transparent hover:border-primary2 hover:text-primary1 rounded-lg">
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
                            <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-gray-900  dark:text-white">
                                IT Consultancy
                            </h5>
                        </a>
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400 line-clamp-2">
                            we provide comprehensive IT consultancy services designed to empower your business with
                            innovative technology solutions. Our expert consultants work closely with you to
                        </p>
                        <a href="{{ url('it_consultancy_services') }}"
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
@endsection
