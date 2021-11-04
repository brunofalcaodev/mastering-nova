<x-eduka::site>
    <x-eduka::head>
        <link rel="stylesheet" type="text/css" href="/vendor/nova-advanced-ui/css/app.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <!-- /Favicon -->
    </x-eduka::head>
    <x-eduka::body class="font-primary bg-repeat heropattern-topography-primary-950 antialised bg-background-900">
        <x-eduka::responsive-breakpoints></x-eduka::responsive-breakpoints>
        <div class="px-4 sm:px-8 md:px-12 xl:container mx-auto">
            <!-- Logo header -->
            <section class="pt-12 bg-background-900">
                <div class="w-full bg-background-900">
                    <img class="h-12 mx-auto" src="/vendor/nova-advanced-ui/images/logo.png" alt="{{ course()->name }}">
                </div>
            </section>
            <!-- /Logo header -->
            <!-- Hero -->
            <!-- Responsive outer container -->
            <section class="w-full bg-background-900 px-12 xl:px-32 py-12">
                <!-- Inner container -->
                <div class="flex flex-wrap md:flex-nowrap gap-6 sm:gap-16">
                    <!-- Left hero container -->
                    <!-- Title and subtitle -->
                    <div class="w-full md:w-1/2">
                        <p class="text-4xl md:text-3xl lg:text-4xl text-center sm:text-left sm:text-5xl font-bold text-primary-400 italic leading-tight pb-6">The <span class="text-secondary-600">aspirin</span> for your Nova UI coding <span class="text-secondary-600">headaches</span></p>
                        <p class="text-2xl md:text-xl lg:text-2xl text-center sm:text-left font-bold text-primary-100 leading-snug">The course that will empower you to create killer, beautiful, and fully-functional UI components in Laravel Nova</p>
                        <!-- /Title and subtitle -->
                        <!-- Features -->
                        <div class="py-12">
                            <ul class="flex flex-col gap-6 text-secondary-100 text-xl">
                                <li class="w-full sm:flex gap-6 items-start">
                                    <svg class="mx-auto sm:mx-0 flex-shrink-0 h-16 w-16 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="text-xl md:text-base lg:text-xl pt-3 sm:pt-0 text-center sm:text-left">Deep-dive in all UI components, from Fields to Resource Tools, from Metrics to Cards. You will learn the nitty-gritty of the Nova UI framework!</p>
                                </li>
                                <li class="w-full sm:flex gap-6 items-start">
                                    <svg class="mx-auto sm:mx-0 flex-shrink-0 h-16 w-16 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="text-xl md:text-base lg:text-xl pt-3 sm:pt-0 text-center sm:text-left">Create beautiful fully customized Nova Vue components, how to leverage the UI Components that come with Nova and much more!</p>
                                </li>
                            </ul>
                        </div>
                        <!-- /Features -->
                        @routename('prelaunched.welcome')
                        <!-- Subscription Form -->
                        <form method="POST" action="{{ route('prelaunched.subscribed') }}" class="flex flex-col sm:flex-row gap-4 pb-3">
                            @csrf
                            @honeypot
                            <input name="email" placeholder="Enter email address" class="focus:outline-none bg-white border border-background-300 px-4 py-2 flex-1 rounded-lg" type="text">
                            <button href="#" class="focus:outline-none flex-shrink-0 flex font-semibold rounded-lg mx-auto sm:mx-0">
                                <div class="tracking-wide flex-shrink-0 p-3 bg-secondary-600 rounded-l-lg text-white">
                                    <div>Send me updates!</div>
                                </div>
                                <div class="bg-secondary-800 p-3 rounded-r-lg">
                                    <svg class="w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </button>
                        </form>
                        @error('email')
                        <p class="text-secondary-500 pb-3 font-bold">{{ $message }}</p>
                        @enderror
                        <!-- /Subscription Form -->
                        <!-- Form disclaimers -->
                        <div class="flex gap-4 justify-center md:justify-start">
                            <div class="flex items-center gap-3">
                                <svg class="h-6 w-6 text-secondary-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-secondary-200 text-xs">No SPAM</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="h-6 w-6 text-secondary-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-secondary-200 text-xs">Special discount if you register for updates</p>
                            </div>
                        </div>
                        <!-- /Form disclaimers -->
                        @endroutename
                       @routename('prelaunched.subscribed')
                        <p class="text-xl text-secondary-500 pb-3 font-bold">Thank you for your interest on my course! I'll be in touch!</p>
                        @endroutename
                    </div>
                    <!-- /Left hero container -->
                    <!-- Right hero container -->
                    <div class="w-full md:w-1/2 order-first md:order-last">
                        <img src="/vendor/nova-advanced-ui/images/hero.jpg" class="rounded-lg" />
                    </div>
                    <!-- /Right hero container -->
                </div>
                <!-- /Inner container -->
            </section>
            <!-- /Responsive outer container -->
            <!-- /Hero -->
            <!-- Testimonial section -->
            <section class="px-12 xl:px-32 py-12 bg-primary-300 text-gray-600">
                <div class="flex gap-8 flex-wrap sm:flex-nowrap">
                    <img src="/vendor/nova-advanced-ui/images/me.jpg" class="rounded-full w-40 h-40" />
                    <div class="sm:border-l-4 border-primary-200 sm:pl-8">
                        <p class="text-lg lg:text-xl font-bold italic text-gray-800">After creating the first-ever premium Laravel Nova course, Mastering Nova, I'm back to record a new community-requested course about how to create and extend the Laravel Nova UI framework, so you will never be stuck to create different Vue components that will match your needs inside Nova!</p>
                        <p class="text-lg font-bold text-gray-700 pt-6"><a class="link" href="https://twitter.com/brunocfalcao" target="_blank">@htmlentities('Bruno Falcão')</a></p>
                        <p class="text-base font-semibold text-gray-800">Creator of <a href="https://www.masteringnova.com" class="link" target="_blank">Mastering Nova</a>, <a href="https://github.com/laraning/nova-time-field" class="link" target="_blank">Nova Time Field</a>, <a href="https://www.laraflash.com" class="link" target="_blank">Laraflash</a>, <a href="https://www.laraning.com" class="link" target="_blank">Laraning</a> and <a href="https://github.com/brunocfalcao/blade-feather-icons" class="link" target="_blank">Feather Icons Blade Ui Kit</a></p>
                    </div>
                </div>
            </section>
            <!-- /Testimonial section -->
            <!-- CTA section -->
            <section class="flex items-center justify-center p-3 text-white bg-secondary-600">
                <p class="ml-3 text-sm text-center font-bold">
                    This course will cover both the current Orion (3.x) version and the new Nova version planned to be released this year
                </p>
            </section>
            <!-- /CTA section -->
            <!-- Features section -->
            <section class="px-12 xl:px-32 py-12 bg-white text-gray-600">
                <p class="text-center text-2xl sm:text-3xl md:text-4xl text-gray-700 font-bold">Hidden Gems all the way</p>
                <p class="text-center text-xl lg:text-xl text-gray-600 pt-2">Create your Nova UI components using Vue</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 pt-12">
                    <!-- Feature box -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto s-16 text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                        <p class="font-bold text-lg py-2 text-center">All default UI Components taught</p>
                        <p class="text-lg text-center">You'll learn all the default methods and attributes you can use in Fields, Cards, Panels, and Tools and the differences between them</p>
                    </div>
                    <!-- /Feature box -->
                    <!-- Feature box -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto s-16 text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                        <p class="font-bold text-lg py-2 text-center">Deep dives all the way</p>
                        <p class="text-lg text-center">We'll deep dive into the UI components framework, understand how it was built and how you can take the most advantage of building your own UI components</p>
                    </div>
                    <!-- /Feature box -->
                    <!-- Feature box -->
                    <div>
                        <svg class="mx-auto s-16 text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <p class="font-bold text-lg py-2 text-center">New components built from scratch</p>
                        <p class="text-lg text-center">Finally, you'll learn and master how to build new components from scratch, and with advanced techniques using Vue and other tools</p>
                    </div>
                    <!-- /Feature box -->
                    <!-- Feature box -->
                    <div>
                        <svg class="mx-auto s-16 text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                        <p class="font-bold text-lg py-2 text-center">Professional recording videos</p>
                        <p class="text-lg text-center">Full HD high-resolution videos, professional sound quality, and full downloaded so you can watch them offline and anytime you want</p>
                    </div>
                    <!-- /Feature box -->
                    <!-- Feature box -->
                    <div>
                        <svg class="mx-auto s-16 text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <p class="font-bold text-lg py-2 text-center">Downloadable codebase</p>
                        <p class="text-lg text-center">Each lesson will have a downloadable codebase so you don't need to copy-paste the codebase you're learning during each tutorial</p>
                    </div>
                    <!-- /Feature box -->
                    <!-- Feature box -->
                    <div>
                        <svg class="mx-auto s-16 text-secondary-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="font-bold text-lg py-2 text-center">Purchase Power Parity</p>
                        <p class="text-lg text-center">You can buy this course at a proportional discount given the country you are located. And if you pre-subscribe now, you even get an extra discount</p>
                    </div>
                    <!-- /Feature box -->
                </div>
            </section>
            <!-- /Features section -->
            <!-- Videos section -->
            <section class="px-12 xl:px-32 py-12 bg-background-800 text-gray-600">
                <p class="text-center text-2xl sm:text-3xl md:text-4xl text-gray-100 font-bold">Video Tutorials</p>
                <p class="text-center text-xl lg:text-xl text-gray-300 pt-2">Subject to change along the recordings progress</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 pt-12">
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Installing Nova as a local repository and deactivating Vue Production mode</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">What Nova mixins are available and their purpose</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">The Nova UI booting process - JS architecture and file structure</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">The FormField and HandlesValidation Mixins - Why are they important</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Field events that you need to know, how to they work together with other Fields</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">The Field Vue Component structure and Props deep dive</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Extending the Field Vue Component without breaking changes</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Making Async calls and updating your own Field data</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Emiting client events to other Fields</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Changing the Field behavior in Index and Detail views</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Adding Vue Components to other screen locations dynamically</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Creating an inline Form Structure</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Create a link button and use Vue route links</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Using the Portal component to create a custom Modal</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Dynamic Vue Components using the same UI Component</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Transforming an NPM package into a Nova UI Component ready to be used</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Creating a Tool that will render a Blade View so you are 100% free of Vue</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Creating custom Filters</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Installing the remaining Tailwind CSS utility classes</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Changing the Nova Theme beyond the standards</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                    <!-- Video tutorial -->
                    <div class="p-3 bg-gray-900 rounded-lg flex flex-col justify-between">
                        <div class="flex gap-6 items-start">
                            <svg class="flex-shrink-0 s-14 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                            </svg>
                            <div>
                                <p class="text-gray-100 text-xl">Adding Server side properties to be used in the UI Components</p>
                            </div>
                        </div>
                        <p class="text-right align-bottom">Being recorded</p>
                    </div>
                    <!-- /Video tutorial -->
                </div>
            </section>
            <!-- /Videos section -->
            <!-- FAQ section -->
            <section class="px-12 xl:px-32 py-12 bg-secondary-500">
                <p class="text-center text-2xl sm:text-3xl md:text-4xl text-white font-bold">Questions ?</p>
                <p class="text-center text-xl lg:text-xl text-gray-100 pt-2">Details on my course below</p>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 pt-12">
                    <!-- Question & answer -->
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg">
                        <h3 class="text-xl font-bold text-coolgray-700 block">Why should I buy this course?</h3>
                        <p class="mt-3">If you are already using Nova and you are stuck in developing UI components that will fit your needs then this course is for you. You will learn how the Nova UI was built, and how you can create simple and advanced UI Components like Fields, buttons, Tools, and much more</p>
                    </div>
                    <!-- /Question & answer -->
                    <!-- Question & answer -->
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg">
                        <h3 class="text-xl font-bold text-coolgray-700 block">I am new to Nova. Is this course for me?</h3>
                        <p class="mt-3">Unfortunately it is not. This course needs intermediate experience in using Laravel Nova and Vue. You should look at my other course, <a class="link" href="https://www.masteringnova.com" target="_blank">Mastering Nova</a>, and if you buy it, you'll have 30% discount in this one.</p>
                    </div>
                    <!-- /Question & answer -->
                    <!-- Question & answer -->
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg">
                        <h3 class="text-xl font-bold text-coolgray-700 block">When will this course be released?</h3>
                        <p class="mt-3">There isn't an exact launch date yet, clearly, it will be released this year. I am currently recording the video tutorials, and hopefully will release the course on an early-access special discount base</p>
                    </div>
                    <!-- /Question & answer -->
                    <!-- Question & answer -->
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg">
                        <h3 class="text-xl font-bold text-coolgray-700 block">I bought your previous Mastering Nova course. Can I have a discount on this one?</h3>
                        <p class="mt-3">Yes you will! You will receive a personal discount of 30% (non-cumulative) for this course to thank you for your loyalty!</p>
                    </div>
                    <!-- /Question & answer -->
                    <!-- Question & answer -->
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg">
                        <h3 class="text-xl font-bold text-coolgray-700 block">How much will this course cost?</h3>
                        <p class="mt-3">I don't know at the moment. But don't worry! You will have plenty of discount options and also purchase power parity!</p>
                    </div>
                    <!-- /Question & answer -->
                    <!-- Question & answer -->
                    <div class="px-4 md:px-8 lg:px-12 py-6 lg:py-12 bg-gray-200 rounded-lg">
                        <h3 class="text-xl font-bold text-coolgray-700 block">Who made your amazing logo?</h3>
                        <p class="mt-3"><a href="https://twitter.com/caneco" class="link" target="_blank">Caneco</a>. Who else :) ?</p>
                    </div>
                </div>
            </section>
            <!-- /FAQ section -->
            <!-- Footer -->
            <section class="px-12 xl:px-32 py-12 bg-background-900 text-gray-600">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Logo image -->
                    <img class="h-8" src="/vendor/nova-advanced-ui/images/logo.png" alt="{{ course()->name }}">
                    <!-- /Logo image -->

                    <!-- Course url -->
                    <div class="mx-auto">
                        {{ date('Y') }} - Bruno Falcão - All rights reserved
                    </div>
                    <!-- /Course url -->

                    <!-- Social links -->
                    <div class="text-right">
                        <a href="https://twitter.com/brunocfalcao">Twitter</a>
                    </div>
                    <!-- /Social links -->
                </div>
            </section>
            <!-- /Footer -->
        </div>
        <script type="text/javascript" src="/vendor/nova-advanced-ui/js/retina.min.js"></script>
    </x-eduka::body>
</x-eduka::site>