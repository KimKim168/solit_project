@extends('layout.client')
@section('content')
    <section class=" mt-14 bg-white dark:bg-gray-900 space-y-20">
        <div id="product1"
            class="border-t-2 border-primary1 border-dotted gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden"
                src="https://erramix-themes.com/techidaa/images/hero/bodigmas_IT_solutions_company_illustrationvectorflat_designmini_942ad818-e3f4-47af-a5e8-78e030aff9c9-removebg.png"
                alt="dashboard image">

            <div class="mt-4 md:mt-0">
                <h2
                    class="mb-4 text-4xl tracking-tight font-semibold  bg-gradient-to-r font-bold from-[#e921f3] to-[#1900ff] text-transparent bg-clip-text">
                    Web Development and Design Service
                </h2>
                <p class="mb-6 font-light text-gray-500 text-2xl dark:text-gray-400">
                    We craft dynamic, user-friendly, and visually appealing websites that provide seamless user experiences
                    across all devices. From design to development, we bring your vision to life, ensuring your online
                    presence stands out.
                </p>
                <!-- Button -->
                <a href="{{ url('development_and_design_detail') }}"
                    class="inline-block px-8 py-3 font-costum8 text-white bg-primary1 rounded-md hover:bg-primary2 transition-colors"
                    data-aos="fade-up" data-aos-duration="2000">
                    Learn More
                </a>
            </div>

        </div>
        <div id="product2"
            class="border-t-2 border-primary1 border-dotted gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <div class="mt-4 md:mt-0">
                <h2
                    class="mb-4 text-4xl tracking-tight font-semibold  bg-gradient-to-r font-bold from-[#e921f3] to-[#1900ff] text-transparent bg-clip-text">
                    SEO and Digital Marketing
                </h2>
                <p class="mb-6 font-light text-gray-500 text-2xl dark:text-gray-400">
                    Our team of digital marketing experts helps you enhance your online visibility, drive targeted traffic,
                    and increase conversions through strategic SEO practices and comprehensive digital marketing campaigns.
                </p>
                <!-- Button -->
                <a href="{{ url('seo_and_digital_marketing') }}"
                    class="inline-block px-8 py-3 font-costum8 text-white bg-primary1 rounded-md hover:bg-primary2 transition-colors"
                    data-aos="fade-up" data-aos-duration="2000">
                    Learn More
                </a>
            </div>
            <img class="w-full dark:hidden" src="{{ asset('assets/images/digital-marketing-service.png') }}"
                alt="dashboard image">
        </div>
        <div id="product3"
            class="border-t-2 border-primary1 border-dotted gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden"
                src="https://erramix-themes.com/techidaa/images/hero/bodigmas_IT_solutions_company_illustrationvectorflat_designmini_942ad818-e3f4-47af-a5e8-78e030aff9c9-removebg.png"
                alt="dashboard image">

            <div class="mt-4 md:mt-0">
                <h2
                    class="mb-4 text-4xl tracking-tight font-semibold  bg-gradient-to-r font-bold from-[#e921f3] to-[#1900ff] text-transparent bg-clip-text">
                    Mobile App Development
                </h2>
                <p class="mb-6 font-light text-gray-500 text-2xl dark:text-gray-400">
                    We develop intuitive and functional mobile applications tailored to your business needs, ensuring
                    compatibility across both iOS and Android platforms for a wider reach and improved customer engagement.
                </p>
                <!-- Button -->
                <a href="{{ url('mobile_app_development') }}"
                    class="inline-block px-8 py-3 font-costum8 text-white bg-primary1 rounded-md hover:bg-primary2 transition-colors"
                    data-aos="fade-up" data-aos-duration="2000">
                    Learn More
                </a>
            </div>
        </div>
        <div id="product4"
            class="border-t-2 border-primary1 border-dotted gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <div class="mt-4 md:mt-0">
                <h2
                    class="mb-4 text-4xl tracking-tight font-semibold  bg-gradient-to-r font-bold from-[#e921f3] to-[#1900ff] text-transparent bg-clip-text">
                    Custom Software Development
                </h2>
                <p class="mb-6 font-light text-gray-500 text-2xl dark:text-gray-400">
                    We build robust, scalable, and secure custom software solutions to address your specific business
                    challenges, helping you streamline operations, improve efficiency, and achieve your goals.
                </p>
                <!-- Button -->
                <a href="{{ url('custom_software_development') }}"
                    class="inline-block px-8 py-3 font-costum8 text-white bg-primary1 rounded-md hover:bg-primary2 transition-colors"
                    data-aos="fade-up" data-aos-duration="2000">
                    Learn More
                </a>
            </div>
            <img class="w-full dark:hidden"
                src="https://erramix-themes.com/techidaa/images/hero/bodigmas_IT_solutions_company_illustrationvectorflat_designmini_942ad818-e3f4-47af-a5e8-78e030aff9c9-removebg.png"
                alt="dashboard image">
        </div>
        <div id="product5"
            class="border-t-2 border-primary1 border-dotted gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden"
                src="https://erramix-themes.com/techidaa/images/hero/bodigmas_IT_solutions_company_illustrationvectorflat_designmini_942ad818-e3f4-47af-a5e8-78e030aff9c9-removebg.png"
                alt="dashboard image">

            <div class="mt-4 md:mt-0">
                <h2
                    class="mb-4 text-4xl tracking-tight font-semibold  bg-gradient-to-r font-bold from-[#e921f3] to-[#1900ff] text-transparent bg-clip-text">
                    Cloud Hosting
                </h2>
                <p class="mb-6 font-light text-gray-500 text-2xl dark:text-gray-400">
                    Our reliable cloud hosting services provide secure, scalable, and cost-effective solutions for your data
                    and applications, ensuring optimal performance and accessibility for your business.
                </p>
                <!-- Button -->
                <a href="{{ url('cloud_hosting') }}"
                    class="inline-block px-8 py-3 font-costum8 text-white bg-primary1 rounded-md hover:bg-primary2 transition-colors"
                    data-aos="fade-up" data-aos-duration="2000">
                    Learn More
                </a>
            </div>
        </div>
    </section>
@endsection
