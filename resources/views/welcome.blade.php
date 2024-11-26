<x-app-layout>
    <div
        class="flex gap-4 max-sm:flex-col items-center justify-center text-center bg-yellow-300 text-black px-6 py-3 rounded font-[sans-serif] -mt-8 -mx-8">
        <p class="text-xs">Limited Time Offer: Get 20% Off!</p>

        <div class="flex gap-2">
            <button type="button" class="bg-white text-black py-1.5 px-3 rounded text-xs hover:underline">
                Learn More
            </button>
        </div>
    </div>
    <div class="bg-white py-6">
        <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
            <div class="flex flex-row flex-wrap">
                <!--Start left cover-->
                <div class="flex-shrink max-w-full w-full lg:w-1/2 pb-1 lg:pb-0 lg:pr-1">
                    <div class="relative hover-img max-h-96 overflow-hidden">
                        <a href="#">
                            <img class="max-w-full w-full mx-auto h-auto" src="{{ asset('images/dummy/img1.jpg') }}"
                                alt="Image description">
                        </a>
                        <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                            <a href="#">
                                <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching
                                    Designer Belts for This Best-Selling</h2>
                            </a>
                            <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text
                                below
                                as a natural lead-in to additional content. This very helpfull for generate default
                                content..</p>
                            <div class="pt-2">
                                <div class="text-gray-100">
                                    <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Start box news-->
                <div class="flex-shrink max-w-full w-full lg:w-1/2">
                    <div class="box-one flex flex-row flex-wrap">
                        <article class="flex-shrink max-w-full w-full sm:w-1/2">
                            <div class="relative hover-img max-h-48 overflow-hidden">
                                <a href="#">
                                    <img class="max-w-full w-full mx-auto h-auto"
                                        src="{{ asset('images/dummy/img2.jpg') }}" alt="Image description">
                                </a>
                                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                    <a href="#">
                                        <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">News
                                            magazines are becoming obsolete, replaced by gadgets</h2>
                                    </a>
                                    <div class="pt-1">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Techno
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="flex-shrink max-w-full w-full sm:w-1/2">
                            <div class="relative hover-img max-h-48 overflow-hidden">
                                <a href="#">
                                    <img class="max-w-full w-full mx-auto h-auto"
                                        src="{{ asset('images/dummy/img3.jpg') }}" alt="Image description">
                                </a>
                                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                    <a href="#">
                                        <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">
                                            Minimalist
                                            designs are starting to be popular with the next generation</h2>
                                    </a>
                                    <div class="pt-1">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                            Architecture
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="flex-shrink max-w-full w-full sm:w-1/2">
                            <div class="relative hover-img max-h-48 overflow-hidden">
                                <a href="#">
                                    <img class="max-w-full w-full mx-auto h-auto"
                                        src="{{ asset('images/dummy/img4.jpg') }}" alt="Image description">
                                </a>
                                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                    <a href="#">
                                        <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Tips for
                                            decorating the interior of the living room</h2>
                                    </a>
                                    <div class="pt-1">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Interior
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="flex-shrink max-w-full w-full sm:w-1/2">
                            <div class="relative hover-img max-h-48 overflow-hidden">
                                <a href="#">
                                    <img class="max-w-full w-full mx-auto h-auto"
                                        src="{{ asset('images/dummy/img5.jpg') }}" alt="Image description">
                                </a>
                                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                                    <a href="#">
                                        <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Online
                                            taxi
                                            users are increasing drastically ahead of the new year</h2>
                                    </a>
                                    <div class="pt-1">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Lifestyle
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-1 flex flex-wrap items-center justify-center">

        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                    fill="white" />
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40"
                    src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Indoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Peace Lily</span>
                    <span
                        class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8"
                    transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                    fill="white" />
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40"
                    src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Monstera</span>
                    <span
                        class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8"
                    transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                    fill="white" />
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40"
                    src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Oak Tree</span>
                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8"
                    transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                    fill="white" />
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40"
                    src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Oak Tree</span>
                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8"
                    transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                    fill="white" />
            </svg>
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40"
                    src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                    alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Oak Tree</span>
                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <!-- Left -->
                    <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-2xl font-bold">
                                <span class="inline-block h-5 border-l-4 border-red-600 mr-2"></span>Europe
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto"
                                            src="{{ asset('images/dummy/img6.jpg') }}"
                                            alt="alt
                                        title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                            card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto"
                                            src="{{ asset('images/dummy/img7.jpg') }}"
                                            alt="alt
                                        title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                            card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto"
                                            src="{{ asset('images/dummy/img8.jpg') }}"
                                            alt="alt
                                        title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                            card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto"
                                            src="{{ asset('images/dummy/img9.jpg') }}"
                                            alt="alt
                                        title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                            card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto"
                                            src="{{ asset('images/dummy/img10.jpg') }}" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                            card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="max-w-full w-full mx-auto"
                                            src="{{ asset('images/dummy/img11.jpg') }}" alt="alt title">
                                    </a>
                                    <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                        <h3 class="text-lg font-bold leading-tight mb-2">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                            card
                                            with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right -->
                    <div
                        class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
                        <div class="w-full bg-gray-50 h-full" style="position: relative;">
                            <div class="text-sm py-6" style="position: static; left: auto; width: 475px;">
                                <div class="w-full text-center">
                                    <a class="uppercase" href="#">Advertisement</a>
                                    <a href="#">
                                        <img class="mx-auto" src="{{ asset('images/ads/250.jpg') }}"
                                            alt="advertisement area">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 px-6 py-12 font-sans -mx-8">
            <div class="lg:max-w-7xl max-w-lg mx-auto px-6 py-8 bg-white rounded-lg shadow-md">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <div class="max-h-80">
                        <img src="https://readymadeui.com/management-img.webp" alt="Image"
                            class="rounded-md object-cover w-full h-full" />
                    </div>
                    <div>
                        <h2 class="text-3xl font-extrabold text-purple-700 mb-4">Immerse Yourself in Creativity</h2>
                        <p class="text-gray-600 text-sm leading-6">
                            Unleash your imagination and explore a world of endless possibilities. Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
                            magna
                            aliqua.
                        </p>
                        <ul class="list-disc text-sm text-gray-600 space-y-2 pl-4 mt-6">
                            <li>Discover innovative ideas.</li>
                            <li>Create unique projects.</li>
                            <li>Collaborate with like-minded individuals.</li>
                            <li>Transform your visions into reality.</li>
                        </ul>
                        <div class="mt-6">
                            <a href="javascript:void(0);"
                                class="text-purple-600 text-sm font-semibold hover:underline">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white py-6">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <flux:card>

                        <div role="status" class="max-w-sm animate-pulse">
                            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px] mb-2.5"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[330px] mb-2.5"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[300px] mb-2.5"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]"></div>
                            <span class="sr-only">Loading...</span>
                        </div>


                    </flux:card>
                </div>
            </div>
        </div>

        <div class="bg-white py-24 sm:py-32">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <h2 class="text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
                <p class="mt-2 max-w-lg text-pretty text-4xl font-semibold tracking-tight text-gray-950 sm:text-5xl">
                    Everything you need to deploy your app</p>
                <div class="mt-10 grid grid-cols-1 gap-4 sm:mt-16 lg:grid-cols-6 lg:grid-rows-2">
                    <div class="relative lg:col-span-3">
                        <div
                            class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem] lg:rounded-tl-[2rem]">
                        </div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)] lg:rounded-tl-[calc(2rem+1px)]">
                            <img class="h-80 object-cover object-left"
                                src="https://tailwindui.com/plus/img/component-images/bento-01-performance.png"
                                alt="">
                            <div class="p-10 pt-4">
                                <h3 class="text-sm/4 font-semibold text-indigo-600">Performance</h3>
                                <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Lightning-fast builds
                                </p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipiscing elit. In gravida justo et nulla efficitur, maximus egestas sem
                                    pellentesque.
                                </p>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem] lg:rounded-tl-[2rem]">
                        </div>
                    </div>
                    <div class="relative lg:col-span-3">
                        <div class="absolute inset-px rounded-lg bg-white lg:rounded-tr-[2rem]"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-tr-[calc(2rem+1px)]">
                            <img class="h-80 object-cover object-left lg:object-right"
                                src="https://tailwindui.com/plus/img/component-images/bento-01-releases.png"
                                alt="">
                            <div class="p-10 pt-4">
                                <h3 class="text-sm/4 font-semibold text-indigo-600">Releases</h3>
                                <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Push to deploy</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Curabitur auctor, ex quis auctor
                                    venenatis, eros arcu rhoncus massa, laoreet dapibus ex elit vitae odio.</p>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-tr-[2rem]">
                        </div>
                    </div>
                    <div class="relative lg:col-span-2">
                        <div class="absolute inset-px rounded-lg bg-white lg:rounded-bl-[2rem]"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-bl-[calc(2rem+1px)]">
                            <img class="h-80 object-cover object-left"
                                src="https://tailwindui.com/plus/img/component-images/bento-01-speed.png"
                                alt="">
                            <div class="p-10 pt-4">
                                <h3 class="text-sm/4 font-semibold text-indigo-600">Speed</h3>
                                <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Built for power users
                                </p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Sed congue eros non finibus molestie.
                                    Vestibulum euismod augue.</p>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-bl-[2rem]">
                        </div>
                    </div>
                    <div class="relative lg:col-span-2">
                        <div class="absolute inset-px rounded-lg bg-white"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                            <img class="h-80 object-cover object-center"
                                src="https://tailwindui.com/plus/img/component-images/bento-01-integrations.png"
                                alt="">
                            <div class="p-10 pt-4">
                                <h3 class="text-sm/4 font-semibold text-indigo-600">Integrations</h3>
                                <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Connect your favorite
                                    tools</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Maecenas at augue sed elit dictum
                                    vulputate, in nisi aliquam maximus arcu.</p>
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5"></div>
                    </div>
                    <div class="relative lg:col-span-2">
                        <div
                            class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-br-[2rem]">
                        </div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-br-[calc(2rem+1px)]">
                            <img class="h-80 object-cover object-center"
                                src="https://tailwindui.com/plus/img/component-images/bento-01-network.png"
                                alt="">
                            <div class="p-10 pt-4">
                                <h3 class="text-sm/4 font-semibold text-indigo-600">Network</h3>
                                <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Globally distributed
                                    CDN
                                </p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Aenean vulputate justo commodo auctor
                                    vehicula in malesuada semper.</p>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-br-[2rem]">
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
