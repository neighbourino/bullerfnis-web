<x-app-layout>

    @if (1 == 2)
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


    <div class="-mx-8">
        <div class="mx-auto max-w-2xl  lg:max-w-7xl">
            <div class="relative overflow-hidden rounded-lg lg:h-96 border border-slate-100 shadow-lg">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/placeholder/pexels-pavel-danilyuk-8422207.jpg') }}" alt=""
                        class="size-full object-cover">
                </div>
                <div aria-hidden="true" class="relative h-96 w-full lg:hidden"></div>
                <div aria-hidden="true" class="relative h-32 w-full lg:hidden"></div>
                <div
                    class="absolute inset-x-0 bottom-0 rounded-bl-lg rounded-br-lg bg-black/50 p-6 backdrop-blur-sm backdrop-filter sm:flex sm:items-center sm:justify-between lg:inset-x-auto lg:inset-y-0 lg:w-96 lg:flex-col lg:items-start lg:rounded-br-none lg:rounded-tl-lg">
                    <div>
                        <h2 class="text-xl font-bold text-white">Bullerfnis.dk</h2>
                        <p class="mt-1 text-sm text-gray-100">Familiens inspirationskilde til leg, krativitet, læring
                            og eventyr.</p>
                    </div>
                    <a href="#"
                        class="mt-6 flex shrink-0 items-center justify-center rounded-md border border-white/25 px-4 py-3 text-base font-medium text-white hover:bg-white/10 sm:ml-8 sm:mt-0 lg:ml-0 lg:w-full">
                        Find Inspiration
                    </a>
                </div>
            </div>
        </div>
    </div>






    <!-- hero tests 001 END -->








</x-app-layout>
