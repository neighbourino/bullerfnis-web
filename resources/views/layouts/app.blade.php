<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    @fluxStyles

    @laravelCommentsLivewireStyles
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">

    <flux:header sticky class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:brand href="#" logo="{{ asset('images/logo.png') }}" name="{{ config('app.name', 'Laravel') }}"
            class="max-lg:hidden dark:hidden" href="/" />
        <flux:brand href="#" logo="{{ asset('images/dark-mode-logo.png') }}"
            name="{{ config('app.name', 'Laravel') }}" class="max-lg:!hidden hidden dark:flex" href="/" />

        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item icon="home" href="{{ route('welcome') }}">Hjem</flux:navbar.item>
            <flux:navbar.item icon="inbox" badge="12" href="{{ route('articles.index') }}">Artikler
            </flux:navbar.item>
            <flux:navbar.item icon="utensils" href="#">Opskrifter</flux:navbar.item>
            <flux:navbar.item icon="message-circle-heart" href="#">Forum</flux:navbar.item>
            <flux:navbar.item icon="calendar" href="#">Shop</flux:navbar.item>

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

        <flux:navbar class="mr-4">
            <flux:button x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
                aria-label="Toggle dark mode" />
            <flux:navbar.item icon="magnifying-glass" href="#" label="Search" />
            <flux:navbar.item class="max-lg:hidden" icon="cog-6-tooth" href="#" label="Settings" />
            <flux:navbar.item class="max-lg:hidden" icon="information-circle" href="#" label="Help" />
        </flux:navbar>

        <flux:dropdown position="top" align="start">
            @auth
                <flux:profile avatar="{{ Auth::user()->gravatar }}" name="{{ Auth::user()->name }}" />
            @else
                <flux:profile avatar="" name="Login" />


            @endauth

            <flux:menu>
                <flux:menu.item icon="user" href="{{ route('profile.show') }}">Profile
                </flux:menu.item>



                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <flux:menu.item icon="arrow-right-start-on-rectangle" type="submit" href="{{ route('logout') }}"
                        @click.prevent="$root.submit();">Logout</flux:menu.item>
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


    @stack('modals')

    @livewireScripts
    @fluxScripts
    @laravelCommentsLivewireScripts
</body>

</html>
