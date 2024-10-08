@extends('layout.client')
@section('content')
    <section class="font-costum4">
        <main class=" pt-32 md:pt-40 pb-16 lg:pt-40 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article
                    class="mx-auto w-full max-w-7xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">

                        <h1
                            class="mb-4 text-3xl leading-tight bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text lg:mb-6 lg:text-4xl dark:text-white">
                            IT Consultancy Services
                        </h1>
                    </header>
                    <p class="lead md:text-[16px]">we provide comprehensive IT consultancy services designed to empower
                        your
                        business with innovative technology solutions. Our expert consultants work closely with you to
                        assess your current infrastructure, identify areas for improvement, and implement strategies that
                        align with your business goals. With over 15 years of experience, we offer specialized services in:
                    </p>
                    {{-- <figure class="my-4">
                    <img src="https://cdn.prod.website-files.com/65a93c5ab1bd343d626c6ab7/65de517563386bc17c9a1298_5-basic-principles-communications-plan-community-engagement-p-800.jpg"
                        alt="">
                </figure> --}}
                    <div>
                        {{-- <h2 class="mt-3 text-xl  leading-tight text-gray-900 lg:mt-4 lg:text-2xl dark:text-white">
                            Our Key Offerings:</h2> --}}
                        <ol class=" text-xl pt-2 px-4 space-y-4">
                            {{-- container Item 1  --}}
                            <li class="space-y-2">
                                <div class="text-sm md:text-[16px]">
                                    {{-- Item1 --}}
                                    <ul class="list-disc px-4 space-y-3">
                                        <li><strong
                                                class="bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text text-sm md:text-[16px]   ">Digital
                                                Transformation:</strong>
                                            Helping you modernize operations with cloud computing, automation, and AI-driven
                                            solutions.
                                        </li>
                                        <li><strong
                                                class="bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text text-sm md:text-[16px]   ">Network
                                                &
                                                Infrastructure
                                                Design:</strong>
                                            Ensuring robust, secure, and scalable IT infrastructure tailored to your needs.
                                        </li>
                                        <li><strong
                                                class="bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text text-sm md:text-[16px]   ">Cybersecurity:</strong>
                                            Protecting your business from potential threats with advanced
                                            security protocols and risk management strategies.
                                        </li>
                                        <li><strong
                                                class="bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text text-sm md:text-[16px]   ">Software
                                                &
                                                Application
                                                Development:</strong>
                                            Custom solutions that streamline operations and enhance productivity.
                                        </li>
                                        <li><strong
                                                class="bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text text-sm md:text-[16px]   ">Data
                                                Management &
                                                Analytics:</strong>
                                            Leveraging data to drive decision-making and business intelligence.
                                        </li>
                                        <li><strong
                                                class="bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text text-sm md:text-[16px]   ">IT
                                                Support &
                                                Maintenance:</strong>
                                            Offering ongoing technical support to keep your systems running smoothly.
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ol>
                    </div>
                    <p class="lead md:text-[16px] mt-2"> Our approach is client-centric, focusing on delivering value
                        through
                        tailored solutions that drive
                        efficiency, security, and growth. Whether you’re a small business or a large enterprise, we can help
                        you navigate the complexities of IT and stay ahead in the digital age.</p>
                </article>
            </div>
        </main>
    </section>
@endsection
