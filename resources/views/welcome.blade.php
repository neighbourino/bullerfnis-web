<x-app-layout>

    @if (1 == 1)
        <div class="mx-auto max-w-2xl  lg:max-w-7xl px-12 py-3">
            <div
                class="flex gap-4 max-sm:flex-col items-center justify-center text-center bg-yellow-300 text-black px-6 py-3 rounded font-[sans-serif] -mt-8 -mx-8">
                <p class="text-xs">Limited Time Offer: Get 20% Off!</p>

                <div class="flex gap-2">
                    <button type="button" class="bg-white text-black py-1.5 px-3 rounded text-xs hover:underline">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    @endif

    <!-- hero tests 003 -->




    <!-- hero tests 003 END -->

    <!-- hero tests 002 -->




    <!-- hero tests 002 END -->

    <!-- hero tests 001 -->

    <div class="-mx-8">
        <div class="mx-auto max-w-2xl  lg:max-w-7xl">
            <div class="relative overflow-hidden rounded-lg lg:h-96 border border-slate-100 shadow-lg">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/placeholder/young-multiracial-families-having-fun-playing-with-2024-07-03-02-44-02-utc.jpg') }}"
                        alt="" class="size-full object-cover">
                </div>
                <div aria-hidden="true" class="relative h-96 w-full lg:hidden"></div>
                <div aria-hidden="true" class="relative h-32 w-full lg:hidden"></div>
                <div
                    class="absolute inset-x-0 bottom-0 rounded-bl-lg rounded-br-lg bg-black/50 p-6 backdrop-blur-sm backdrop-filter sm:flex sm:items-center sm:justify-between lg:inset-x-auto lg:inset-y-0 lg:w-96 lg:flex-col lg:items-start lg:rounded-br-none lg:rounded-tl-lg">
                    <div>
                        <h2 class="text-xl font-bold text-white">Workspace Collection</h2>
                        <p class="mt-1 text-sm text-gray-300">Upgrade your desk with objects that keep you organized and
                            clear-minded.</p>
                    </div>
                    <a href="#"
                        class="mt-6 flex shrink-0 items-center justify-center rounded-md border border-white/25 px-4 py-3 text-base font-medium text-white hover:bg-white/10 sm:ml-8 sm:mt-0 lg:ml-0 lg:w-full">View
                        the collection</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="mx-auto max-w-7xl">

            <div class="grid grid-cols-4 space-x-3 ">

                @for ($i = 0; $i < 4; $i++)
                    <flux:card class="space-y-6 bg-yellow-50">
                        <div>
                            <flux:heading size="lg">Log in to your account</flux:heading>
                            <flux:subheading>Welcome back!</flux:subheading>
                        </div>



                        <div class="space-y-2">
                            <flux:button variant="primary" class="w-full">Log in</flux:button>

                            <flux:button variant="ghost" class="w-full">Sign up for a new account</flux:button>
                        </div>
                    </flux:card>
                @endfor

            </div>

        </div>

    </div>

    <div class="">
        <div class="mx-auto max-w-7xl">


            <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
                <div class="group relative aspect-[2/1] overflow-hidden rounded-lg sm:row-span-2 sm:aspect-square">
                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-03-featured-category.jpg"
                        alt="Two models wearing women's black cotton crewneck tee and off-white cotton crewneck tee."
                        class="absolute size-full object-cover group-hover:opacity-75">
                    <div aria-hidden="true"
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                    <div class="absolute inset-0 flex items-end p-6">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    New Arrivals
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                    </div>
                </div>
                <div class="group relative aspect-[2/1] overflow-hidden rounded-lg sm:aspect-auto">
                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-03-category-01.jpg"
                        alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters."
                        class="absolute size-full object-cover group-hover:opacity-75">
                    <div aria-hidden="true"
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                    <div class="absolute inset-0 flex items-end p-6">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Accessories
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                    </div>
                </div>
                <div class="group relative aspect-[2/1] overflow-hidden rounded-lg sm:aspect-auto">
                    <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-03-category-02.jpg"
                        alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk."
                        class="absolute size-full object-cover group-hover:opacity-75">
                    <div aria-hidden="true"
                        class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
                    <div class="absolute inset-0 flex items-end p-6">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Workspace
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 sm:hidden">
                <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                    Browse all categories
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
    </div>



    <!-- hero tests 001 END -->





    <div class="bg-white py-6 mt-24">
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
                                            <div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>
                                            Lifestyle
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


        <!-- blog -->

        <div class="py-24 sm:py-32 w-full">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">From the
                        blog</h2>
                    <p class="mt-2 text-lg/8 text-gray-600">Learn how to grow your business with our expert advice.</p>
                </div>
                <div
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                alt=""
                                class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="max-w-xl">
                            <div class="mt-8 flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                                <a href="#"
                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Boost your conversion rate
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error
                                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo
                                    necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel.
                                    Iusto corrupti dicta.</p>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" class="size-10 rounded-full bg-gray-100">
                                <div class="text-sm/6">
                                    <p class="font-semibold text-gray-900">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Michael Foster
                                        </a>
                                    </p>
                                    <p class="text-gray-600">Co-Founder / CTO</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- More posts... -->
                </div>
            </div>
        </div>

        <!-- blog END -->
</x-app-layout>
