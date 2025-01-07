<x-filament-panels::page>

    <div wire:loading>
        Generating response...
    </div>

    <div class="p-6 shadow rounded-lg bg-white dark:bg-gray-800 mb-12 prose max-w-none">

        @if ($response)
            <div class="p3">

                @php
                    echo '<pre>';
                    print_r($response);
                    echo '</pre>';
                @endphp
            </div>
        @endif


    </div>


    <div>
        <label>
            <span>Content</span>

            <textarea wire:model="prompt"></textarea>
        </label>


        <button wire:click="generateResponse">Generate Response</button>
    </div>

</x-filament-panels::page>
