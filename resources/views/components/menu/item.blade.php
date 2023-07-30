@props(['icon', 'svg', 'title' => null, 'route' => null, 'tweet'])


@php
    $classes = $tweet ?? false ? 'flex item-start xl:w-60 bg-[#1DA1F2] rounded-full justify-center' : 'flex flex-col items-start justify-center';
@endphp

@if ($title)
    <div {{ $attributes->merge(['class' => $classes]) }}>
        <a href="{{ $route }}"
            {{ $attributes->merge(['class' => 'flex flex-row items-start p-2 transition-all xl:rounded-full hover:bg-gray-600/20 xl:px-4 xl:py-3']) }}>
            <x-dynamic-component :component="'icons.' . $icon" {{ $attributes->merge(['class' => $svg]) }} />
            <span class="md:hidden xl:flex text-[20px] font-semibold tracking-wider">
                {{ $title }}
            </span>
        </a>
    </div>
@else
    <div class="flex flex-col xl:items-start xl:justify-center ">
        <a href="{{ $route }}" class="transition-all rounded-full hover:bg-gray-600/20 md:p-2 xl:p-3">
            <x-dynamic-component :component="'icons.' . $icon" {{ $attributes->merge(['class' => $svg]) }} />
        </a>
    </div>
@endif
