<div class="">

    <div class="-mx-8 -mt-8 z-30 relative">
        <div>
            <img class="h-32 w-full object-cover lg:h-48"
                src="{{ asset('images/placeholder/happy-children-in-pizzeria-2023-11-27-05-36-59-utc.jpg') }}"
                alt="">
        </div>
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                {{-- <div class="flex">
                    <img class="size-24 rounded-full ring-4 ring-white sm:size-32"
                        src="{{ asset('images/jh-profile-square.png') }}" alt="">
                </div> --}}
                <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                    {{-- <div class="mt-6 min-w-0 flex-1 sm:hidden md:block">
                        <h1 class="truncate text-2xl font-bold text-gray-900">Hi, I'm Janus Helkjær</h1>
                    </div> --}}
                    {{-- <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-x-4 sm:space-y-0">
                        <button type="button"
                            class="inline-flex justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <svg class="-ml-0.5 mr-1.5 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path
                                    d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                                <path
                                    d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                            </svg>
                            <span>Message</span>
                        </button>
                        <button type="button"
                            class="inline-flex justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <svg class="-ml-0.5 mr-1.5 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Call</span>
                        </button>
                    </div> --}}
                </div>
            </div>
            <div class="mt-6 hidden min-w-0 flex-1 sm:block md:hidden">
                <h1 class="truncate text-2xl font-bold text-gray-900">Ricardo Cooper</h1>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-12 ">



        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            <div class="col-span-1">
                <flux:navlist class="w-64">
                    <flux:navlist.item href="#" icon="home">Dashboard</flux:navlist.item>
                    <flux:navlist.item href="#" icon="list-bullet">Transactions</flux:navlist.item>

                    <flux:navlist.group heading="Account" expandable>
                        <flux:navlist.item href="#">Profile</flux:navlist.item>
                        <flux:navlist.item href="#">Settings</flux:navlist.item>
                        <flux:navlist.item href="#">Billing</flux:navlist.item>
                    </flux:navlist.group>
                </flux:navlist>
            </div>
            <div class="col-span-3">
                @if ($recipes->count() > 0)

                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($recipes as $key => $recipe)
                            @php
                                //$mediaItems = $recipe->getMedia('recipes');
                                $publicFullUrl = asset(
                                    'images/placeholder/a_series_of_images_featuring_a_stack_of_f_3ddf7087-d054-4510-9487-84fad6ea1a00_1.png',
                                ); //isset($mediaItems[0]) ? $mediaItems[0]->getFullUrl() : '';

                                #var_dump($mediaItems);

                            @endphp
                            <flux:card class="flex flex-col md:flex-row">
                                <a href="{{ route('recipes.show', $recipe) }}"
                                    class="block hover:opacity-75 transition-opacity duration-300 border-yellow-500 border-4 rounded shadow">
                                    <img src="{{ $publicFullUrl }}" alt="{{ $recipe->title }}"
                                        class="object-cover rounded shadow  h-48 w-64">
                                </a>
                                <div class="px-6 py-3 flex flex-col w-full">
                                    <flux:heading size="lg">{{ $recipe->title }}</flux:heading>

                                    <flux:subheading class="mb-4">
                                        {{ $recipe->created_at->diffForHumans() }}
                                    </flux:subheading>

                                    {{-- <flux:subheading class="mb-4">
                                    {{ $recipe->excerpt }}
                                </flux:subheading> --}}

                                    <flux:button class="ml-auto mt-auto" icon="plus"
                                        href="{{ route('recipes.show', $recipe) }}">Se opskrifter
                                    </flux:button>
                                </div>
                            </flux:card>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-warning" role="alert">
                        No articles found.
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
