@extends('layout.client')
@section('content')
    <section class="mt-28">
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row items-center justify-between  p-8 ">
            <!-- Text Section -->
            <div class="lg:w-1/2 mb-10 lg:mb-0">
                <button class="bg-gray-100  text-blue-600 px-5 py-2 rounded-full uppercase text-xs font-semibold mb-4"
                    data-aos="fade-up" data-aos-duration="1000">Get to
                    Know
                    Us</button>
                <h2 class="text-3xl font-bold mb-4" data-aos="fade-up" data-aos-duration="1000">
                    Company Profile
                </h2>
                <p class="text-gray-500 mb-6" data-aos="fade-up" data-aos-duration="1000">
                    With over 15 years of industry experience, our company is a leading provider of cutting-edge technology
                    solutions. We specialize in delivering a wide range of services tailored to meet the unique needs of our
                    clients across various sectors. Our expertise ensures that we offer innovative and reliable solutions
                    that drive business growth and digital transformation.
                </p>
                <div class="space-y-6 grid grid-cols-1 sm:grid-cols-2 ">
                    <!-- Feature 1 -->
                    <div class="flex items-center">
                        <div class="bg-blue-100 p-4 rounded-full" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{ asset('assets/images/app-design.png') }}" class="w-6 h-6 text-blue-600"
                                fill="currentColor" viewBox="0 0 20 20"><!-- Icon SVG --></img>
                        </div>
                        <div class="ml-4" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class="text-sm font-semibold">Web Development and Design</h3>
                            <a href="{{ url('/product#product1') }} " class="text-gray-500 text-[12px]">Product</a>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="flex items-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="bg-blue-100 p-4 rounded-full">
                            <img src="{{ asset('assets/images/seo.png') }}" class="w-6 h-6 text-blue-600"
                                fill="currentColor" viewBox="0 0 20 20"><!-- Icon SVG --></img>
                        </div>
                        <div class="ml-4" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class="text-sm font-semibold">SEO and Digital Marketing</h3>
                            <a href="{{ url('/product#product2') }} " class="text-gray-500 text-[12px]">Product</a>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="flex items-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="bg-blue-100 p-4 rounded-full">
                            <img src="{{ asset('assets/images/mobile.png') }}" class="w-6 h-6 text-blue-600"
                                fill="currentColor" viewBox="0 0 20 20"><!-- Icon SVG --></img>
                        </div>
                        <div class="ml-4" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class="text-sm font-semibold">Mobile App Development</h3>
                            <a href="{{ url('/product#product3') }} " class="text-gray-500  text-[12px]">Product</a>

                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="flex items-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="bg-blue-100 p-4 rounded-full">
                            <img src="{{ asset('assets/images/custom-software.png') }}" class="w-6 h-6 text-blue-600"
                                fill="currentColor" viewBox="0 0 20 20"><!-- Icon SVG --></img>
                        </div>
                        <div class="ml-4" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class="text-sm font-semibold">Custom Software Development</h3>
                            <a href="{{ url('/product#product4') }} " class="text-gray-500 text-[12px]">Product</a>
                        </div>
                    </div>
                    <!-- Feature 5 -->
                    <div class="flex items-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="bg-blue-100 p-4 rounded-full">
                            <img src="{{ asset('assets/images/cloud.png') }}" class="w-6 h-6 text-blue-600"
                                fill="currentColor" viewBox="0 0 20 20"><!-- Icon SVG --></img>
                        </div>
                        <div class="ml-4" data-aos="fade-up" data-aos-duration="1000">
                            <h3 class="text-sm font-semibold">Cloud Hosting</h3>
                            <a href="{{ url('/product#product5') }} " class="text-gray-500  text-[12px]">Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image Section -->
            <div class="lg:w-1/2  relative ">
                <img src="https://demo.ajufbox.com/solit/assets/images/about-us/about-us-1.jpg" alt="Team Working"
                    class="rounded-tl-[200px] rounded-br-[200px] rounded-bl-[100px] rounded-tr-[100px] shadow-lg ">
                <div class="absolute md:-top-2 md:-right-7 -top-2 -right-5 bg-zinc-50/70  rounded-lg p-2 md:p-3 lg:p-4">
                    <span class="sm:text-xl font-bold text-blue-600">100+</span>
                    <p class="text-gray-500 text-[10px]  sm:text-[12px]">Satisfied Clients</p>
                </div>
                <div
                    class="absolute md:bottom-4 lg:-left-2  -left-2 bottom-4 bg-zinc-50/70 rounded-lg shadow p-2 md:p-3 lg:p-4">
                    <span class="sm:text-xl font-bold text-blue-600">15+</span>
                    <p class="text-gray-500 text-[10px]  sm:text-[12px]">Years of Experience</p>
                </div>
            </div>
        </div>
    </section>

    {{-- completed project --}}
    <section class="mt-20 p-5">
        <div class="max-w-screen-xl mx-auto ">
            <div class="">
                <h1 class="font-costum5 text-3xl sm:text-5xl">
                    Our Mission
                </h1>
                <p class="text-base max-w-[500px] text-justify mt-5">
                    Our mission is to empower businesses with innovative and high-quality technology solutions that fuel
                    growth and improve efficiency. We are committed to delivering excellence through collaboration,
                    technical expertise, and a customer-centric approach.
                </p>
            </div>

        </div>
    </section>
    {{-- End completed project --}}

    <section class="mb-10 mt-5   lg:mt-20  px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="sm:mb-8 md:col-span-4">
                <span
                    class="inline-block text-sm text-blue-500 font-semibold mb-2 bg-blue-100 px-3 py-1 rounded-full">Benefits</span>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Why Choose Us?</h2>
                {{-- <p class="text-gray-600 text-base md:text-lg">Lorem ipsum dolor sit amet elit adipisicing consectetur</p> --}}
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 md:col-span-8">
                <!-- Benefit 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center">
                    <div class="text-blue-500 mb-4">
                        <!-- Icon -->
                        <img src="https://demo.ajufbox.com/solit/assets/images/icons/design.png" class="w-14 mx-auto"
                            alt="Unique Design Icon">
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">15+ Years of Experience</h3>
                    <p class="text-gray-600 text-sm md:text-base">
                        A proven track record of delivering successful projects across diverse industries.
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center">
                    <div class="text-blue-500 mb-4">
                        <!-- Icon -->
                        <img src="https://demo.ajufbox.com/solit/assets/images/icons/code.png" class="w-14 mx-auto"
                            alt="Quality Code Icon">
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Customer-Centric Approach</h3>
                    <p class="text-gray-600 text-sm md:text-base">
                        We prioritize understanding your needs and goals to offer solutions that best fit your business.
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center">
                    <div class="text-blue-500 mb-4">
                        <!-- Icon -->
                        <img src="https://demo.ajufbox.com/solit/assets/images/icons/clean-design.png"
                            class="w-14 mx-auto" alt="Clean and Minimal Icon">
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Expert Team</h3>
                    <p class="text-gray-600 text-sm md:text-base">
                        Our team of skilled professionals is dedicated to staying ahead of industry trends to provide
                        top-notch solutions.
                    </p>
                </div>
                <!-- Benefit 4 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center">
                    <div class="text-blue-500 mb-4">
                        <!-- Icon -->
                        <img src="{{ asset('assets/images/solution1.png') }}" class="w-14 mx-auto"
                            alt="Clean and Minimal Icon">
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">End-to-End Solutions</h3>
                    <p class="text-gray-600 text-sm md:text-base">
                        From web development to cloud hosting, we offer comprehensive services to support your digital
                        journey.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
