<div>
    <div class="pb-3 border-b border-gray-100 mb-6">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{ route('welcome') }}">Hjem</flux:breadcrumbs.item>
            <flux:breadcrumbs.item href="{{ route('articles.index') }}">Artikler</flux:breadcrumbs.item>
        </flux:breadcrumbs>


    </div>


    <div class="flex max-md:flex-col items-start">
        <div class="w-full md:w-[220px] pb-4 mr-10 bg-slate-50 p-3 rounded">
            <flux:checkbox.group wire:model="notifications" label="Notifications">
                <flux:checkbox label="Push notifications" value="push" checked />
                <flux:checkbox label="Email" value="email" checked />
                <flux:checkbox label="In-app alerts" value="app" />
                <flux:checkbox label="SMS" value="sms" />
            </flux:checkbox.group>

        </div>

        <flux:separator class="md:hidden" />

        <div class="flex-1 max-md:pt-6 self-stretch">



            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Artikler
                </h2>
                <p class="mt-2 text-lg/8 text-gray-600">Learn how to grow your business with our expert advice.</p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                @if ($articles)

                    @foreach ($articles as $article)
                        <article class="flex flex-col items-start justify-between">
                            <a class="relative w-full block hover:opacity-75 transition-opacity duration-300 overflow-hidden"
                                href="{{ route('articles.show', $article) }}">
                                <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                    alt=""
                                    class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                                <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                            </a>
                            <div class="max-w-xl">
                                <div class="mt-8 flex items-center gap-x-4 text-xs">
                                    <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                                    <a href="#"
                                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                                </div>
                                <div class="">
                                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                        <a href="{{ route('articles.show', $article) }}">
                                            {{ $article->title }}
                                        </a>
                                    </h3>
                                    <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error
                                        voluptates
                                        culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus
                                        unde. Sed
                                        exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
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
                    @endforeach
                @else
                    <div class="flex flex-col items-center justify-center">
                        <p class="text-gray-600 text-sm leading-6">No articles found.</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
