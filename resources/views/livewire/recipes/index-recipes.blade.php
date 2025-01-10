<div class="">

    <div class="-mx-8 -mt-8 z-30 relative">
        <div>
            <img class="h-32 w-full object-cover lg:h-48"
                src="{{ asset('images/placeholder/happy-children-in-pizzeria-2023-11-27-05-36-59-utc.jpg') }}"
                alt="">
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-12 ">
        <div class="pb-3 border-b border-gray-100 mb-6">
            <flux:breadcrumbs>
                <flux:breadcrumbs.item href="{{ route('welcome') }}">Hjem</flux:breadcrumbs.item>
                <flux:breadcrumbs.item href="{{ route('recipes.index') }}">Opskrifter</flux:breadcrumbs.item>
            </flux:breadcrumbs>


        </div>


        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            <div class="col-span-1">
                <flux:navlist class="w-64">

                    <flux:navlist.group heading="Type" expandable>
                        <flux:checkbox.group wire:model="notifications" label="" class="pt-3">
                            <flux:checkbox label="Push notifications" value="push" checked />
                            <flux:checkbox label="Email" value="email" checked />
                            <flux:checkbox label="In-app alerts" value="app" />
                            <flux:checkbox label="SMS" value="sms" />
                        </flux:checkbox.group>

                    </flux:navlist.group>
                    <flux:separator variant="subtle" class="mt-4 mb-3" />
                    <flux:navlist.group heading="Help" expandable>
                        <flux:checkbox.group wire:model="notifications" label="" class="pt-3">
                            <flux:checkbox label="Push notifications" value="push" checked />
                            <flux:checkbox label="Email" value="email" checked />
                            <flux:checkbox label="In-app alerts" value="app" />
                            <flux:checkbox label="SMS" value="sms" />
                        </flux:checkbox.group>

                    </flux:navlist.group>
                </flux:navlist>
            </div>
            <div class="col-span-3">
                @if ($recipes->count() > 0)

                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($recipes as $key => $recipe)
                            @php
                                $mediaItems = $recipe->getMedia('recipes');
                                $publicFullUrl = isset($mediaItems[0]) ? $mediaItems[0]->getFullUrl() : '';

                            @endphp
                            <flux:card class="md:grid grid-cols-3">
                                <a href="{{ route('recipes.show', $recipe) }}"
                                    class="block hover:opacity-75 transition-opacity duration-300 border rounded shadow md:col-span-1">
                                    <img src="{{ $publicFullUrl }}" alt="{{ $recipe->title }}"
                                        class="object-cover rounded shadow  h-48 w-full">
                                </a>
                                <div class="px-6 py-3 flex flex-col w-full md:col-span-2">
                                    <flux:heading size="lg">{{ $recipe->title }}</flux:heading>

                                    <flux:subheading class="mb-4">
                                        {{ $recipe->created_at->diffForHumans() }}
                                    </flux:subheading>

                                    {{-- <flux:subheading class="mb-4">
                                    {{ $recipe->excerpt }}
                                </flux:subheading> --}}

                                    <flux:button class="ml-auto mt-auto" icon="arrow-right"
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
