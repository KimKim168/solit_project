@extends('layout.client')
@section('content')
    <section class="font-costum4 ">
        <main class=" pt-32 md:pt-40 pb-16 lg:pt-40 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article
                    class="mx-auto w-full max-w-7xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">

                        <h1
                            class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                            Cloud Hosting Services
                        </h1>
                    </header>
                    <p class="lead md:text-[16px]">
                        At [Your Company Name], we offer reliable and scalable <b>Cloud Hosting</b> solutions designed to
                        meet the
                        needs of businesses of all sizes. Our cloud hosting services provide you with the flexibility,
                        security, and performance required to keep your website or application running smoothly and
                        efficiently. Whether you’re a startup or a large enterprise, we have the right hosting solution to
                        help you grow your online presence.
                        {{-- <figure class="my-4">
                    <img src="https://cdn.prod.website-files.com/65a93c5ab1bd343d626c6ab7/65de517563386bc17c9a1298_5-basic-principles-communications-plan-community-engagement-p-800.jpg"
                        alt="">
                </figure> --}}
                    <div>
                        <h2 class="mt-3 text-xl  leading-tight text-gray-900 lg:mt-4 lg:text-2xl dark:text-white">
                            Our Key Offerings:
                        </h2>
                        <ol class="list-decimal text-xl p-4 space-y-4">
                            {{-- container Item 1  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Scalable Cloud Hosting</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        As your business grows, so do your hosting needs. Our scalable cloud hosting
                                        solutions
                                        allow you to seamlessly increase or decrease your resources as needed, ensuring that
                                        your website or application can handle traffic spikes without any performance
                                        issues.
                                        Features include:
                                    </p>
                                    {{-- Item1 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Flexible resource allocation (CPU, RAM, storage)
                                        </li>
                                        <li>
                                            Load balancing for handling large volumes of traffic
                                        </li>
                                        <li>
                                            Instant scalability to accommodate business growth
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 2  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Managed Cloud Hosting</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        Our fully managed cloud hosting services allow you to focus on your business while
                                        we
                                        take care of the technical aspects of your cloud infrastructure. We handle
                                        everything
                                        from setup to ongoing maintenance, including:
                                    </p>
                                    {{-- Item2 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Server management and monitoring
                                        </li>
                                        <li>
                                            Automated backups and disaster recovery
                                        </li>
                                        <li>
                                            24/7 technical support to resolve any issues
                                        </li>
                                        <li>
                                            Regular updates and security patches
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 3  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">High Availability and Uptime</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        We understand the importance of keeping your website or application online at all
                                        times.
                                        Our cloud hosting services are built with redundancy and high availability in mind,
                                        ensuring your site remains operational even in the event of a failure. Key features
                                        include:
                                    </p>
                                    {{-- Item3 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Guaranteed 99.9% uptime
                                        </li>
                                        <li>
                                            Redundant server infrastructure for failover protection
                                        </li>
                                        <li>
                                            Automatic data replication across multiple data centers
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 4  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Security and Compliance</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        Security is a top priority in our cloud hosting services. We implement advanced
                                        security
                                        measures to protect your data and ensure compliance with industry standards. Our
                                        services include:
                                    </p>
                                    {{-- Item4 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            SSL encryption to secure data transmission
                                        </li>
                                        <li>
                                            DDoS protection to prevent cyber-attacks
                                        </li>
                                        <li>
                                            Regular security audits and vulnerability scans
                                        </li>
                                        <li>
                                            Compliance with GDPR, HIPAA, and other regulatory requirements
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 5  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Customizable Solutions</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        No two businesses are the same, which is why we offer customizable cloud hosting
                                        solutions that are tailored to meet your specific needs. Whether you require a
                                        simple
                                        website hosting plan or a complex enterprise cloud infrastructure, we can design a
                                        solution that fits your requirements.
                                    </p>
                                </div>
                            </li>
                            {{-- container Item 6  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Global Data Centers</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        Our cloud hosting services are backed by a network of global data centers that
                                        ensure
                                        fast loading times and low latency for users anywhere in the world. By hosting your
                                        site
                                        closer to your audience, we can significantly improve performance and user
                                        experience.
                                        Key benefits include:
                                    </p>
                                    {{-- Item6 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Reduced latency and faster load times
                                        </li>
                                        <li>
                                            Multiple geographic regions to choose from
                                        </li>
                                        <li>
                                            Local data storage options for regulatory compliance
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 7  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Backup and Disaster Recovery</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        Data loss can be catastrophic for any business. Our cloud hosting solutions include
                                        automated backups and robust disaster recovery plans to protect your data. In the
                                        event
                                        of data loss or a system failure, we can quickly restore your website or
                                        application.
                                        Features include:
                                    </p>
                                    {{-- Item7 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Daily, weekly, and monthly backups
                                        </li>
                                        <li>
                                            Instant restore capabilities
                                        </li>
                                        <li>
                                            Off-site backups for extra protection
                                        </li>
                                        <li>
                                            Disaster recovery solutions with minimal downtime
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 8  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Cloud Hosting for Applications</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        Our cloud hosting isn’t just for websites—we also provide hosting for web
                                        applications,
                                        mobile apps, and SaaS platforms. Our infrastructure is optimized for performance,
                                        security, and scalability, ensuring that your app runs smoothly, even during peak
                                        usage
                                        periods. We support a wide range of development platforms, including:
                                    </p>
                                    {{-- Item8 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            PHP, Python, JavaScript, Node.js, and Ruby
                                        </li>
                                        <li>
                                            Integration with databases like MySQL, PostgreSQL, and MongoDB
                                        </li>
                                        <li>
                                            Full-stack application hosting
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 9  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Hybrid Cloud Solutions</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        For businesses with specific hosting needs, we offer hybrid cloud solutions that
                                        combine
                                        the flexibility of public cloud with the control and security of private cloud. This
                                        approach allows you to optimize performance while meeting compliance requirements.
                                        Features include:
                                    </p>
                                    {{-- Item9 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Integration with on-premise infrastructure
                                        </li>
                                        <li>
                                            Secure private cloud for sensitive data
                                        </li>
                                        <li>
                                            Public cloud resources for scalability and cost-efficiency
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            {{-- container Item 10  --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Cloud Migration Services</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        If you’re looking to move from an on-premise infrastructure or another hosting
                                        provider
                                        to the cloud, our cloud migration services make the process seamless. We handle the
                                        entire migration process, minimizing downtime and ensuring a smooth transition. Our
                                        services include:
                                    </p>
                                    {{-- Item10 --}}
                                    <ul class="list-disc px-4 space-y-2">
                                        <li>
                                            Planning and strategy development
                                        </li>
                                        <li>
                                            Data migration and validation
                                        </li>
                                        <li>
                                            Testing and optimization
                                        </li>
                                        <li>
                                            Post-migration support and monitoring
                                        </li>

                                    </ul>
                                </div>
                            </li>

                        </ol>
                    </div>
                    <div class="border-t">
                        <h2 class="mt-3 text-xl  leading-tight text-gray-900 lg:my-4  lg:text-2xl dark:text-white">
                            Our Process:
                        </h2>
                        <ol class="list-decimal text-xl p-4 space-y-4">
                            {{-- item 1 --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Consultation and Assessment:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        We begin by understanding your business needs and evaluating your current
                                        infrastructure. Our team will recommend the best cloud hosting solution based on
                                        your
                                        performance, security, and scalability requirements.
                                    </p>
                                </div>
                            </li>
                            {{-- item 2 --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Setup and Configuration:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        Once we’ve designed your cloud hosting solution, we take care of the setup and
                                        configuration process. This includes server provisioning, security settings, and any
                                        necessary integrations with your existing systems.
                                    </p>
                                </div>
                            </li>
                            {{-- item 3 --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Monitoring and Management:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        After your cloud hosting environment is set up, we provide ongoing monitoring and
                                        management to ensure optimal performance. Our team is available 24/7 to address any
                                        issues and ensure that your cloud infrastructure is secure and running smoothly.
                                    </p>
                                </div>
                            </li>
                            {{-- item 4 --}}
                            <li class="space-y-2">
                                <strong class="text-blue-600 md:text-xl ">Ongoing Support:</strong>
                                <div class="text-sm md:text-[16px]">
                                    <p>
                                        We provide continuous support to keep your cloud hosting environment up to date and
                                        functioning at peak performance. This includes security updates, resource scaling,
                                        and
                                        performance optimizations based on your business growth.
                                    </p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </article>
            </div>
        </main>
    @endsection
