@extends('layout.client')
@section('content')
    <section class="mt-28">
        <div class="max-w-screen-xl mx-auto px-4 py-12">
            <!-- Contact Header -->
            <div class="mb-8">
                <h2 class="text-4xl font-bold text-primary1 mb-2">Contact Us For Any Questions</h2>
                <p class="text-gray-600 font-costum8">
                    Let’s collaborate and take your business to the next level. Contact us today to discuss how we can help
                    you achieve your digital transformation goals.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 overflow-hidden ">
                <!-- Contact Info -->
                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Contact Info :</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <span class=" mr-3 ">
                                <img src="{{ asset('assets/images/email.png') }}" class="w-10">
                            </span>
                            <span class="text-lg">Example@Example.Com</span>
                        </li>
                        <li class="flex items-center">
                            <span class=" mr-3">
                                <!-- Phone Icon -->
                                <img src="{{ asset('assets/images/phone.png') }}" class="w-10">
                            </span>
                            <span class="text-lg">+123 456 6789</span>
                        </li>
                        <li class="flex items-center">
                            <span class=" mr-3">
                                <!-- Location Icon -->
                                <img src="{{ asset('assets/images/gps.png') }}" class="w-10">
                            </span>
                            <span class="text-lg">A108 Adam Street, New York, NY 535022</span>
                        </li>

                    </ul>
                </div>

                <!-- Contact Form -->
                <div>
                    <div class="mt-4  border border-gray-200 rounded-lg shadow-lg overflow-hidden">
                        <!-- Embed Google Map -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1683.1583140169473!2d104.9233199662918!3d11.535005383653287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950da5cfa9463%3A0x3755d57e39ef4861!2sRULE%20Library!5e1!3m2!1sen!2skh!4v1726216894557!5m2!1sen!2skh"
                            width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
