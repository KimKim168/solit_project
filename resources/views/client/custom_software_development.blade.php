@extends('layout.client')
@section('content')
    <main class=" pt-28 pb-16 lg:pt-28 lg:pb-24 bg-white dark:bg-gray-900 antialiased font-costum4">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-7xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">

                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        Custom Software Development Services
                    </h1>
                </header>
                <p class="lead">In today’s fast-paced digital landscape, off-the-shelf solutions may not always meet
                    the unique needs of your business. At [Your Company Name], we specialize in Custom Software
                    Development to help businesses achieve their goals through tailored software solutions. With over 15
                    years of experience, our team designs and builds software that is fully aligned with your business
                    processes, ensuring efficiency, scalability, and growth.
                    {{-- <figure class="my-4">
                    <img src="https://cdn.prod.website-files.com/65a93c5ab1bd343d626c6ab7/65de517563386bc17c9a1298_5-basic-principles-communications-plan-community-engagement-p-800.jpg"
                        alt="">
                </figure> --}}
                <div>
                    <h2 class="mt-3 text-xl  leading-tight text-gray-900 lg:mt-4 lg:text-2xl dark:text-white">
                        Our Key Offerings:
                    </h2>
                    <ol class="list-decimal p-4 space-y-4">
                        {{-- container Item 1  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Custom Software Solutions</strong>
                            <p> We develop bespoke software tailored to your specific business needs, ensuring that your
                                processes are streamlined and your goals are met. Whether you need a customer
                                relationship management (CRM) system, enterprise resource planning (ERP) software, or a
                                custom tool for a niche industry, we can help. Our custom software solutions include:
                            </p>
                            {{-- Item1 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Full-cycle software development, from planning to deployment
                                </li>
                                <li>
                                    Integration with your existing systems
                                </li>
                                <li>
                                    Scalable and adaptable solutions designed for future growth
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 2  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Enterprise Software Development</strong>
                            <p> Our enterprise software development services are designed to improve operational
                                efficiency and productivity within your organization. We develop powerful, secure, and
                                scalable solutions for managing large-scale operations, including:
                            </p>
                            {{-- Item2 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    ERP systems for resource planning and business management
                                </li>
                                <li>
                                    CRM systems to manage customer relationships and sales
                                </li>
                                <li>
                                    Business intelligence and analytics platforms for data-driven decision making
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 3  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">SaaS (Software as a Service) Development</strong>
                            <p>We develop SaaS applications that are hosted in the cloud, offering flexible and scalable
                                solutions for businesses of all sizes. Our SaaS development services allow you to offer
                                software to your customers via subscription, with features like:
                            </p>
                            {{-- Item3 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Cloud-based storage and access
                                </li>
                                <li>
                                    Multi-tenant architecture for cost-efficient scaling
                                </li>
                                <li>
                                    Regular updates and maintenance to ensure optimal performance
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 4  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Cloud-Based Solutions</strong>
                            <p>We design and develop cloud-based applications that allow your business to operate
                                seamlessly across different locations and devices. Our cloud software solutions are
                                scalable, secure, and cost-effective, offering features like:
                            </p>
                            {{-- Item4 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Remote access to critical business tools and data
                                </li>
                                <li>
                                    Integration with cloud service providers such as AWS, Azure, and Google Cloud
                                </li>
                                <li>
                                    High availability and scalability to meet your growing business needs
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 5  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Mobile and Web-Based Applications</strong>
                            <p>
                                We develop custom mobile and web-based applications that allow your team and customers
                                to interact with your business from anywhere, at any time. Our mobile and web solutions
                                are designed to offer seamless user experiences and support a wide range of business
                                functions. This includes:
                            </p>
                            {{-- Item5 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Internal business tools for workflow automation
                                </li>
                                <li>
                                    Customer-facing applications for service delivery
                                </li>
                                <li>
                                    Web-based portals for management and collaboration
                                </li>

                            </ul>
                        </li>
                        {{-- container Item 6  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">API Development and Integration</strong>
                            <p>
                                We specialize in creating and integrating Application Programming Interfaces (APIs) that
                                allow different software systems to communicate with each other. Our API development
                                services ensure that your software can easily integrate with third-party services,
                                enhancing functionality and efficiency. Features include:
                            </p>
                            {{-- Item6 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Custom APIs for seamless system integration
                                </li>
                                <li>
                                    Third-party API integration for payments, data processing, and more
                                </li>
                                <li>
                                    Secure and efficient data transfer between systems
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 7  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Legacy Software Modernization</strong>
                            <p>
                                If you have outdated systems that are slowing down your business processes, we can help
                                you modernize them. Our legacy software modernization services involve rebuilding,
                                refactoring, or enhancing existing systems to ensure they meet current business and
                                technological standards. We focus on:
                            </p>
                            {{-- Item7 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Upgrading to modern technology stacks
                                </li>
                                <li>
                                    Improving software performance and security
                                </li>
                                <li>
                                    Migrating legacy systems to the cloud
                                </li>


                            </ul>
                        </li>
                        {{-- container Item 8  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Software Maintenance and Support</strong>
                            <p>
                                After your software is deployed, we provide ongoing maintenance and support to ensure
                                that it continues to function at its best. Our team offers:
                            </p>
                            {{-- Item8 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Bug fixing and troubleshooting
                                </li>
                                <li>
                                    Regular updates and performance improvements
                                </li>
                                <li>
                                    24/7 support to address any issues that may arise
                                </li>
                            </ul>
                        </li>
                        {{-- container Item 9  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Database Development and Management</strong>
                            <p>We develop and manage custom databases to store, manage, and analyze your business data.
                                Our database solutions are optimized for performance and scalability, ensuring that your
                                business can efficiently handle growing data demands. Our services include:
                            </p>
                            {{-- Item9 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Database design and development
                                </li>
                                <li>
                                    Data migration and integration
                                </li>
                                <li>
                                    Performance tuning and optimization
                                </li>

                            </ul>
                        </li>
                        {{-- container Item 10  --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Automation Solutions</strong>
                            <p>
                                To help businesses improve efficiency and reduce manual work, we create automation
                                solutions that optimize routine tasks and business processes. Our automation services
                                include:
                            </p>
                            {{-- Item10 --}}
                            <ul class="list-disc px-4 space-y-2">
                                <li>
                                    Workflow automation
                                </li>
                                <li>
                                    Robotic Process Automation (RPA)
                                </li>
                                <li>
                                    Integration of AI and machine learning into business processes
                                </li>

                            </ul>
                        </li>

                    </ol>
                </div>
                <div class="border-t">
                    <h2 class="mt-3 text-xl  leading-tight text-gray-900 lg:my-4  lg:text-2xl dark:text-white">
                        Our Development Process:
                    </h2>
                    <ol class="list-decimal p-4 space-y-4">
                        {{-- item 1 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Consultation & Requirement Gathering:</strong>
                            <p>We start by understanding your business needs and processes. Our team conducts thorough
                                research and works with you to define the scope, functionality, and goals of your custom
                                software solution.
                            </p>
                        </li>
                        {{-- item 2 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Planning & Design:</strong>
                            <p>
                                Once we understand your requirements, we create a detailed project plan and design the
                                architecture of the software. This includes creating wireframes, user stories, and
                                system architecture blueprints that align with your business needs.
                            </p>

                        </li>
                        {{-- item 3 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Development:</strong>
                            <p>
                                Our experienced developers build your software using the latest technologies, ensuring
                                that it is secure, scalable, and future-proof. We follow agile development
                                methodologies, allowing for flexibility and regular updates.
                            </p>
                        </li>
                        {{-- item 4 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Testing & Quality Assurance:</strong>
                            <p>
                                Before deployment, we rigorously test the software to ensure it is free of bugs and
                                meets your quality standards. This includes functional testing, performance testing, and
                                security testing.
                            </p>
                        </li>
                        {{-- item 5 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Deployment & Integration:</strong>
                            <p>
                                Once testing is complete, we deploy your software in your chosen environment, whether
                                on-premise or in the cloud. We also ensure that your new system is fully integrated with
                                any existing systems you use.
                            </p>
                        </li>
                        {{-- item 6 --}}
                        <li class="space-y-2">
                            <strong class="text-blue-600 text-xl ">Ongoing Support & Maintenance:</strong>
                            <p>
                                After deployment, we continue to provide maintenance and support, ensuring your software
                                is always up-to-date, secure, and functioning optimally. We provide regular updates and
                                enhancements based on your feedback and evolving business needs.
                            </p>
                        </li>

                    </ol>
                </div>
            </article>
        </div>
    </main>
@endsection
