@extends('layout.client')
@section('content')
    <section class="font-costum4">
        <main class=" pt-32 md:pt-40 pb-16 lg:pt-40 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article
                    class="mx-auto w-full max-w-7xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <h1
                            class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                            Web Development and Design Service
                        </h1>
                    </header>
                    <p class="lead md:text-[16px]">At [Your Company Name], we provide comprehensive <b> Web Development and
                            Design </b>
                        services
                        that cater to businesses and individuals looking to establish a strong online presence. With over 15
                        years of experience, our team is dedicated to delivering innovative and user-friendly websites that
                        are visually appealing and highly functional. Our services are designed to help you reach your goals
                        by creating a unique digital experience for your audience.</p>
                    <figure class="my-4">
                        <img src="https://media.dev.to/cdn-cgi/image/width=1000,height=420,fit=cover,gravity=auto,format=auto/https%3A%2F%2Fdev-to-uploads.s3.amazonaws.com%2Fuploads%2Farticles%2Fkljy9vr3utnb3d3bafbc.jpg"
                            alt="">
                    </figure>
                    <div>
                        <h2 class="  mb-3 text-xl  leading-tight text-gray-900 lg:mb-4 lg:text-2xl dark:text-white">
                            Our Key Offerings:</h2>
                        <ol class="list-decimal text-xl p-4 space-y-4">
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Custom Web Design</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> We specialize in creating unique, tailor-made websites that reflect your brand's
                                        identity.
                                        Our design process begins with understanding your vision and objectives, ensuring
                                        that
                                        the
                                        final product is both aesthetically pleasing and aligned with your business goals.
                                        We
                                        focus
                                        on:final product is both aesthetically pleasing and aligned with your business
                                        goals. We
                                        focus
                                        on:
                                    </p>
                                    <ul class="list-disc p-4">
                                        <li>Clean, modern, and responsive designs</li>
                                        <li>User experience (UX) optimization for seamless navigation</li>
                                        <li>Brand-centric designs that enhance visual appeal</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Responsive Web Development</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> We ensure that your website is accessible and user-friendly on all devices—desktops,
                                        tablets, and smartphones. Our responsive design approach guarantees that your
                                        website
                                        will function flawlessly across all screen sizes, enhancing the overall user
                                        experience.
                                    </p>
                                </div>

                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">E-Commerce Development</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> We help you build powerful, secure, and scalable eCommerce websites that drive
                                        online
                                        sales. Our eCommerce solutions include:
                                    </p>
                                    <ul class="list-disc p-4">
                                        <li>Custom shopping carts and product catalogs</li>
                                        <li>Integration with payment gateways</li>
                                        <li>Inventory management and order tracking systems</li>
                                        <li>Mobile-friendly eCommerce interfaces</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Content Management Systems (CMS)</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> Our CMS solutions empower you to manage your website content easily without needing
                                        any
                                        technical expertise. We offer solutions built on platforms like WordPress, Joomla,
                                        and
                                        Drupal, ensuring that you have complete control over your content.
                                    </p>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Search Engine Optimization (SEO)
                                    Integration</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> Every website we build is SEO-ready. We implement the best practices in on-page
                                        optimization, metadata structuring, and website performance, ensuring that your
                                        website
                                        ranks well in search engine results and attracts organic traffic.
                                    </p>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Custom Web Applications</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>Our team is proficient in developing custom web applications that are scalable,
                                        secure,
                                        and tailored to meet your specific business needs. Whether it's a customer portal,
                                        booking system, or a CRM, we can design and develop a solution that fits your
                                        requirements.
                                    </p>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Website Maintenance and Support</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>After launching your website, we provide ongoing maintenance and support to ensure
                                        its
                                        optimal performance. Our services include regular updates, security patches,
                                        performance
                                        optimization, and troubleshooting to keep your website running smoothly.
                                    </p>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">UX/UI Design and Prototyping</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>We focus on creating intuitive user experiences with attention to detail in user
                                        interface design. Our team utilizes the latest design trends and technologies to
                                        ensure
                                        that your website not only looks great but also provides a smooth and engaging user
                                        journey.
                                    </p>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Third-Party API Integration</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>We seamlessly integrate third-party tools and APIs into your website to enhance
                                        functionality. Whether it's integrating payment gateways, social media, or marketing
                                        tools, we ensure smooth and secure API integration.
                                    </p>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Cloud Hosting Solutions</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>We offer reliable and scalable cloud hosting solutions to ensure your website is
                                        always
                                        online, secure, and fast. Our hosting services include regular backups, SSL
                                        certification, and advanced security features to protect your site from threats.
                                    </p>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div class="border-t">
                        <h2 class=" mt-3 mb-3 text-xl  leading-tight text-gray-900 lg:my-4  lg:text-2xl dark:text-white">
                            Our Process:</h2>
                        <ol class="list-decimal text-xl p-4 space-y-4">
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Discovery & Planning:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> We begin by understanding your business, audience, and goals. We then create a
                                        detailed
                                        project plan that includes timelines, design prototypes, and functionality
                                        requirements.
                                    </p>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Design & Development:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> Once the plan is finalized, we move into the design and development phase, where our
                                        designers create visually stunning interfaces, and our developers bring those
                                        designs to
                                        life with clean, efficient code.
                                    </p>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Testing & Quality Assurance:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> We rigorously test every aspect of your website to ensure it is free of bugs and
                                        performs well across all devices and browsers.
                                    </p>
                                </div>
                            </li>
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Launch & Post-Launch Support:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>After the website is tested and approved, we launch it and provide ongoing support to
                                        ensure everything continues to run smoothly.
                                    </p>
                                </div>
                            </li>

                        </ol>
                    </div>
                </article>
            </div>
        </main>
    </section>
@endsection
