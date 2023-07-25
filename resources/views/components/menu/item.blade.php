@props(['route', 'title' => null, 'svg' => null, 'icon'])



<a href="{{ $route }}">
    <div {{ $attributes }}>
        <x-dynamic-component :component="'icons.'. $icon" {{ $attributes->merge(['class' => $svg]) }} />
        <span class="md:hidden xl:flex p-3 ">{{ $title }} </span>
    </div>
</a>

