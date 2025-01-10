<div>
    @php
        $mediaItems = $recipe->getMedia('recipes');
        $publicFullUrl = isset($mediaItems[0]) ? $mediaItems[0]->getFullUrl() : '';

    @endphp
    <div class="-mx-8 -mt-8 z-30 relative">
        <div>
            <img class="h-32 w-full object-cover lg:h-48" src="{{ $publicFullUrl }}" alt="{{ $recipe->title }}">
        </div>
    </div>
</div>
