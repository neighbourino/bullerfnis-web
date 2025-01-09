<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&family=Coming+Soon&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Love+Ya+Like+A+Sister&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    @fluxStyles

    @laravelCommentsLivewireStyles
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">

    <div class="bg-zinc-50 py-3 h-12 w-full z-50 px-6">
        <div class="px-6 max-w-7xl mx-auto flex items-center justify-between">
            <div class="text-sm text-gray-500">

            </div>
            <div class="space-x-2">
                <flux:button square icon="instagram" size="xs" />
                <flux:button square icon="facebook" size="xs" />
                <flux:button square icon="youtube" size="xs" />
            </div>
        </div>
    </div>
    <div class="py-3 h-24 w-full  z-50 px-6 max-w-7xl mx-auto grid grid-cols-4 grid-rows-1">
        <div class="col-span-1 flex items-center">
            <a href="{{ route('welcome') }}" class=" max-h-full flex items-center space-x-3">
                {{-- <img src="{{ asset('images/logo.png') }}" alt="" class="block max-h-full h-16"> --}}
                <flux:icon.baby class="size-8" />
                <span class="text-4xl font-display">{{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>
    </div>


    <div class="relative">
        <flux:header sticky
            class="bg-white dark:bg-zinc-900 border-zinc-100 dark:border-zinc-700 z-50 max-w-7xl mx-auto w-full border-b rounded-b  border-l border-r shadow-sm ">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />


            {{-- <flux:brand href="#" logo="{{ asset('images/logo.png') }}" name="{{ config('app.name', 'Laravel') }}"
            class="max-lg:hidden dark:hidden" href="/" />
        <flux:brand href="#" logo="{{ asset('images/dark-mode-logo.png') }}"
            name="{{ config('app.name', 'Laravel') }}" class="max-lg:!hidden hidden dark:flex" href="/" /> --}}

            <flux:navbar class="-mb-px max-lg:hidden">
                <flux:navbar.item href="{{ route('welcome') }}">Hjem</flux:navbar.item>
                {{-- <flux:navbar.item href="{{ route('articles.index') }}">Artikler
                </flux:navbar.item>
                <flux:navbar.item href="{{ route('recipes.index') }}">Opskrifter</flux:navbar.item> --}}
                {{-- <flux:navbar.item href="#">Forum</flux:navbar.item>
                <flux:navbar.item href="#">Shop</flux:navbar.item> --}}

                {{-- <flux:separator vertical variant="subtle" class="my-2" />

            <flux:dropdown class="max-lg:hidden">
                <flux:navbar.item icon-trailing="chevron-down">Favorites</flux:navbar.item>

                <flux:navmenu>
                    <flux:navmenu.item href="#">Marketing site</flux:navmenu.item>
                    <flux:navmenu.item href="#">Android app</flux:navmenu.item>
                    <flux:navmenu.item href="#">Brand guidelines</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown> --}}
            </flux:navbar>

            <flux:spacer />

            {{-- <flux:navbar class="mr-4">
                <flux:button x-data x-on:click="$flux.dark = !$flux.dark" icon="moon" variant="subtle"
                    aria-label="Toggle dark mode" />
                <flux:navbar.item icon="magnifying-glass" href="#" label="Search" />
                <flux:navbar.item class="max-lg:hidden" icon="cog-6-tooth" href="#" label="Settings" />
                <flux:navbar.item class="max-lg:hidden" icon="information-circle" href="#" label="Help" />
            </flux:navbar> --}}

            <flux:dropdown position="bottom" align="start">
                @auth
                    <flux:profile avatar="{{ Auth::user()->gravatar }}" name="" />
                @else
                    <flux:profile avatar="" name="Login" />


                @endauth

                <flux:menu>
                    <flux:menu.item icon="user" href="{{ route('profile.show') }}">Profil
                    </flux:menu.item>



                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <flux:menu.item icon="arrow-right-start-on-rectangle" type="submit"
                            href="{{ route('logout') }}" @click.prevent="$root.submit();">Log ud</flux:menu.item>
                    </form>




                </flux:menu>
            </flux:dropdown>
        </flux:header>

        <flux:sidebar stashable sticky
            class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc."
                class="px-2 dark:hidden" />
            <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc."
                class="px-2 hidden dark:flex" />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="home" href="#" current>Home</flux:navlist.item>
                <flux:navlist.item icon="inbox" badge="12" href="#">Inbox</flux:navlist.item>
                <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>
                <flux:navlist.item icon="calendar" href="#">Calendar</flux:navlist.item>

                <flux:navlist.group expandable heading="Favorites" class="max-lg:hidden">
                    <flux:navlist.item href="#">Marketing site</flux:navlist.item>
                    <flux:navlist.item href="#">Android app</flux:navlist.item>
                    <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            <flux:spacer />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
                <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
            </flux:navlist>
        </flux:sidebar>

        <flux:main>
            {{ $slot }}
        </flux:main>
    </div>

    {{-- <footer class="bg-gray-50 -mx-4 -mb-4 lg:-mx-8 lg:-mb-8">
        <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <img class="h-9" src="{{ asset('images/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}">
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-gray-900">Solutions</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm/6 text-gray-600 hover:text-gray-900">Marketing</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm/6 text-gray-600 hover:text-gray-900">Analytics</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm/6 text-gray-600 hover:text-gray-900">Automation</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Commerce</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Insights</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-gray-900">Support</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Submit
                                        ticket</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm/6 text-gray-600 hover:text-gray-900">Documentation</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Guides</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-gray-900">Company</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">About</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Blog</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Jobs</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Press</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-gray-900">Legal</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Terms of
                                        service</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Privacy
                                        policy</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 lg:mt-24 lg:flex lg:items-center lg:justify-between">
                <div>
                    <h3 class="text-sm/6 font-semibold text-gray-900">Subscribe to our newsletter</h3>
                    <p class="mt-2 text-sm/6 text-gray-600">The latest news, articles, and resources, sent to your
                        inbox weekly.</p>
                </div>
                <form class="mt-6 sm:flex sm:max-w-md lg:mt-0">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input type="email" name="email-address" id="email-address" autocomplete="email" required
                        class="w-full min-w-0 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:w-56 sm:text-sm/6"
                        placeholder="Enter your email">
                    <div class="mt-4 sm:ml-4 sm:mt-0 sm:shrink-0">
                        <button type="submit"
                            class="flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="mt-8 border-t border-gray-900/10 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex gap-x-6 md:order-2">
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">Facebook</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">Instagram</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">X</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">GitHub</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">YouTube</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-sm/6 text-gray-600 md:order-1 md:mt-0">&copy; 2024 Your Company, Inc. All rights
                    reserved.</p>
            </div>
        </div>
    </footer> --}}

    <footer class="bg-zinc-50 w-full mt-6 border-t border-zinc-100 dark:border-zinc-700">
        <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-6">
                    {{-- <img class="h-9" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Company name"> --}}
                    <div>
                        <a href="{{ route('welcome') }}" class="max-h-full flex items-center space-x-3">
                            {{-- <img src="{{ asset('images/logo.png') }}" alt="" class="block max-h-full h-16"> --}}
                            <flux:icon.baby class="size-8" />
                            <span class="text-4xl font-display">{{ config('app.name', 'Laravel') }}</span>
                        </a>
                    </div>
                    <p class="text-balance text-sm/6 text-gray-600">Familiens inspirationskilde til leg, krativitet,
                        læring
                        og eventyr.</p>
                    <div class="flex gap-x-6">
                        <a href="#" class="text-gray-600 hover:text-gray-800">
                            <span class="sr-only">Facebook</span>
                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-gray-800">
                            <span class="sr-only">Instagram</span>
                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-gray-800">
                            <span class="sr-only">X</span>
                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-gray-800">
                            <span class="sr-only">GitHub</span>
                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-gray-800">
                            <span class="sr-only">YouTube</span>
                            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    {{-- <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-gray-900">Solutions</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm/6 text-gray-600 hover:text-gray-900">Marketing</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm/6 text-gray-600 hover:text-gray-900">Analytics</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm/6 text-gray-600 hover:text-gray-900">Automation</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Commerce</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Insights</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-gray-900">Support</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Submit
                                        ticket</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm/6 text-gray-600 hover:text-gray-900">Documentation</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Guides</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm/6 font-semibold text-gray-900">Company</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">About</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Blog</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Jobs</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Press</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm/6 font-semibold text-gray-900">Legal</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Terms of
                                        service</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">Privacy
                                        policy</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm/6 text-gray-600 hover:text-gray-900">License</a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 lg:mt-24">
                <p class="text-sm/6 text-gray-600">&copy; {{ now()->year }} bullerfnis.dk Alle rettigheder
                    forbeholdes.
                </p>
            </div>
        </div>
    </footer>


    @stack('modals')

    @livewireScripts
    @fluxScripts
    @laravelCommentsLivewireScripts
</body>

</html>
