@extends('layout.client')
@section('content')
    <section class="mt-28">
        <div class="max-w-screen-xl mx-auto px-4 py-12">
            <!-- Contact Header -->
            <div class="mb-8">
                <h2
                    class="text-3xl tracking-tight   bg-gradient-to-r font-bold from-[#e921f3] to-[#1900ff] text-transparent bg-clip-text mb-2">
                    Contact Us For Any Questions</h2>
                <p class="text-gray-600 font-costum8 text-xl">
                    Let’s collaborate and take your business to the next level. Contact us today to discuss how we can help
                    you achieve your digital transformation goals.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 overflow-hidden ">
                <!-- Contact Info -->
                <div>
                    <h3
                        class="text-2xl   bg-gradient-to-r font-bold from-[#303461] to-[#1900ff] text-transparent bg-clip-text mb-4">
                        Contact Info :</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <span class=" mr-3 ">
                                <img src="{{ asset('assets/images/email.png') }}" class="w-10">
                            </span>
                            <span class="text-lg">info@corasolutions.com</span>
                        </li>
                        <li class="flex items-center">
                            <span class=" mr-3">
                                <!-- Phone Icon -->
                                <img src="{{ asset('assets/images/phone.png') }}" class="w-10">
                            </span>
                            <span class="text-lg">010775589</span>
                        </li>
                        <li class="flex items-center">
                            <span class=" mr-3">
                                <!-- Location Icon -->
                                <img src="{{ asset('assets/images/gps.png') }}" class="w-10">
                            </span>
                            <span class="text-lg">Phnom Penh, Cambodia</span>
                        </li>

                    </ul>
                </div>

                <!-- Contact Form -->
                <a href="https://www.google.com/maps/@11.5503692,104.8842911,4877m/data=!3m1!1e3?entry=ttu&g_ep=EgoyMDI0MDkxNy4wIKXMDSoASAFQAw%3D%3D"
                    target="_blak">
                    <div class="mt-4  border p-4 bg-white border-gray-200 rounded-lg shadow-lg overflow-hidden ">
                        <!-- Embed Google Map -->
                        <img src="{{ asset('assets/images/map.png') }}" allowfullscreen="" loading="lazy"
                            referrerpolicy=""></img>
                    </div>
            </div>
        </div>
        </div>
    </section>
@endsection
