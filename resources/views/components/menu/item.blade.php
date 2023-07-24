@props(['icon', 'title' => null, 'svg' => null])

    <div {{ $attributes }}>
        <x-dynamic-component :component="'icons.' . $icon" {{ $attributes->merge(['class' => $svg]) }}/>
        <span class="">{{ $title }} </span>
    </div>


