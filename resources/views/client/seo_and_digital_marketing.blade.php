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
                            SEO and Digital Marketing Services
                        </h1>
                    </header>
                    <p class="lead md:text-[16px]">In today's digital world, having a website is just the beginning. To
                        thrive,
                        your
                        business needs to stand out in search engines and engage effectively with your audience online. At
                        [Your Company Name], we offer expert <b>SEO and Digital Marketing</b> services designed to help you
                        increase visibility, drive traffic, and boost conversions. Our team leverages the latest tools and
                        strategies to optimize your online presence and grow your business.</p>
                    <figure class="my-4">
                        <img src="https://cdn.prod.website-files.com/65a93c5ab1bd343d626c6ab7/65de517563386bc17c9a1298_5-basic-principles-communications-plan-community-engagement-p-800.jpg"
                            alt="">
                    </figure>
                    <div>
                        <h2 class="  mb-3 text-xl  leading-tight text-gray-900 lg:mb-4 lg:text-2xl dark:text-white">
                            Our Key Offerings:</h2>
                        <ol class="list-decimal text-xl p-4 space-y-4">
                            {{-- container Item 1  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Search Engine Optimization (SEO)</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> SEO is the backbone of any digital marketing strategy. Our SEO experts will ensure
                                        your
                                        website ranks higher in search engine results, driving more organic traffic to your
                                        site. We use proven techniques to improve your visibility and optimize your content
                                        for
                                        targeted keywords. Our SEO services include:
                                    </p>
                                    {{-- Item1 --}}
                                    <ul class="list-disc p-4">
                                        <li><strong class="text-blue-600 text-lg ">On-page SEO:</strong>
                                            Optimizing page titles, meta descriptions, headers, and content for keywords,
                                            improving website speed, mobile-friendliness, and overall user experience.
                                        </li>
                                        <li><strong class="text-blue-600 text-lg ">Off-page SEO:</strong>
                                            Building high-quality backlinks, improving domain authority, and leveraging
                                            social
                                            signals to enhance your online reputation.
                                        </li>
                                        <li><strong class="text-blue-600 text-lg ">Technical SEO:</strong>
                                            Ensuring your website is easy for search engines to crawl and index, improving
                                            site
                                            structure, fixing broken links, optimizing images, and enhancing site security.
                                        </li>
                                        <li><strong class="text-blue-600 text-lg ">Local SEO:</strong>
                                            Optimizing your business listings, Google My Business profile, and ensuring your
                                            company shows up in local search results for geo-targeted keywords.
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 2  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Pay-Per-Click (PPC) Advertising</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> We manage highly targeted and cost-effective PPC campaigns that drive immediate
                                        traffic
                                        and leads to your business. Our PPC services include:
                                    </p>
                                    {{-- Item2 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>Google Ads (formerly AdWords) campaign management
                                        </li>
                                        <li>Facebook and Instagram Ads creation and optimization
                                        </li>
                                        <li>Retargeting campaigns to convert visitors into customers
                                        </li>
                                        <li>Display ads to build brand awareness across different platforms
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 3  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Content Marketing</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>Content is king, and we focus on creating high-quality, engaging, and SEO-optimized
                                        content that speaks directly to your audience. We help you build authority in your
                                        niche
                                        and attract visitors who are genuinely interested in your products or services. Our
                                        content marketing services include:
                                    </p>
                                    {{-- Item3 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>Blog writing and article creation
                                        </li>
                                        <li>Infographic design and distribution
                                        </li>
                                        <li>
                                            Video marketing and production
                                        </li>
                                        <li>
                                            E-books, whitepapers, and downloadable resources
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 4  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Social Media Marketing</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>Social media is a powerful platform for building relationships with your audience and
                                        enhancing brand visibility. Our social media marketing services include:
                                    </p>
                                    {{-- Item4 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Strategy development and content planning
                                        </li>
                                        <li>
                                            Social media account management for platforms like Facebook, Instagram, Twitter,
                                            LinkedIn, and more
                                        </li>
                                        <li>
                                            Targeted advertising campaigns across social media platforms
                                        </li>
                                        <li>
                                            Engagement and community management to build a loyal following
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 5  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Email Marketing</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>Email marketing remains one of the most effective ways to engage your audience and
                                        drive
                                        conversions. We design and manage email campaigns that:
                                    </p>
                                    {{-- Item5 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Build relationships with your customers
                                        </li>
                                        <li>
                                            Promote products, services, and offers
                                        </li>
                                        <li>
                                            Nurture leads with personalized email sequences
                                        </li>
                                        <li>
                                            Segment your audience for highly targeted messaging
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 6  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Conversion Rate Optimization (CRO)</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>Driving traffic is important, but turning that traffic into leads and sales is the
                                        ultimate goal. Our CRO services focus on optimizing your website for better user
                                        experiences, leading to higher conversion rates. We analyze user behavior and make
                                        data-driven decisions to improve:
                                    </p>
                                    {{-- Item6 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Landing page design and messaging
                                        </li>
                                        <li>
                                            Call-to-action (CTA) buttons and forms
                                        </li>
                                        <li>
                                            User flow from the homepage to the checkout process
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 7  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Analytics and Reporting</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>Data is at the core of every successful digital marketing campaign. We track,
                                        measure,
                                        and report on key performance indicators (KPIs) to ensure that your campaigns are
                                        achieving the desired results. Our team provides:
                                    </p>
                                    {{-- Item7 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Google Analytics setup and tracking
                                        </li>
                                        <li>
                                            Monthly performance reports and insights
                                        </li>
                                        <li>
                                            Conversion tracking and analysis
                                        </li>
                                        <li>
                                            Continuous optimization based on data
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 8  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Online Reputation Management (ORM)</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>Your online reputation can make or break your business. We help you maintain a
                                        positive
                                        image online by managing customer reviews, handling negative feedback, and promoting
                                        positive content about your brand across various platforms.
                                    </p>
                                </div>
                            </li>
                            {{-- container Item 9  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Influencer Marketing</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>We connect your brand with influencers who can amplify your message and engage with
                                        your
                                        target audience. Our influencer marketing services help you:
                                    </p>
                                    {{-- Item9 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Identify and collaborate with influencers in your industry
                                        </li>
                                        <li>
                                            Launch influencer-driven campaigns that increase awareness and conversions
                                        </li>
                                        <li>
                                            Track influencer performance and campaign results
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ol>
                    </div>
                    <div class="border-t">
                        <h2 class=" mt-3 mb-3 text-xl  leading-tight text-gray-900 lg:my-4  lg:text-2xl dark:text-white">
                            Our Process:</h2>
                        <ol class="list-decimal text-xl p-4 space-y-4">
                            {{-- item 1 --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Initial Consultation & Strategy
                                    Development:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p> We begin with a detailed analysis of your business, website, and competitors. Based
                                        on
                                        this, we create a tailored digital marketing strategy designed to meet your specific
                                        goals.
                                    </p>
                                </div>
                            </li>
                            {{-- item 2 --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Implementation:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>Once the strategy is finalized, we begin implementing it across all relevant
                                        channels,
                                        from optimizing your website for SEO to launching social media and PPC campaigns.
                                    </p>
                                </div>
                            </li>
                            {{-- item 3 --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Monitoring & Optimization:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>We continuously monitor the performance of your campaigns, making adjustments where
                                        necessary to maximize results. This includes testing different approaches and
                                        refining
                                        your content, ads, and strategies.
                                    </p>
                                </div>
                            </li>
                            {{-- item 4 --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Reporting & Analytics:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>We provide you with regular reports that detail the progress of your campaigns, key
                                        metrics, and actionable insights for further improvement. We work closely with you
                                        to
                                        ensure that you’re seeing a solid return on investment (ROI).
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
