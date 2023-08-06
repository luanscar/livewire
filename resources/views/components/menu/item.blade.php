@props(['icon', 'svg', 'title' => null, 'route' => null, 'tweet' => null, 'sm' => null])


{{-- @php
    $classes = $tweet ?? false ? 'flex item-start xl:w-60 bg-[#1DA1F2] rounded-full justify-center' : 'flex flex-col items-start justify-center';
@endphp

@if ($title)
    <div {{ $attributes->merge(['class' => $classes]) }}>
        <a href="{{ $route }}"
            class="flex flex-row items-start p-2 transition-all xl:rounded-full hover:bg-gray-600/20 xl:px-4 xl:py-3">
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
@endif --}}

@php
    
    $sizes = 'p-3 xl:px-4 xl:py-3 xl:w-60  text-2xl';
    
    if ($sm) {
        $sizes = 'w-20  text-[16px] h-10 ';
    }
    
    switch ($tweet) {
        case 'blue':
            $classes = "'hover:bg-[#1DA1F2]/90  rounded-full justify-center flex  items-center $sizes bg-[#1DA1F2] '";
            break;
    
        default:
            $classes = 'hover:bg-[#e7e9ea1a] p-3 rounded-full text-2xl justify-center flex xl:px-4 xl:py-3 items-start';
            break;
    }
    
@endphp



@if ($title)
    <a href="{{ $route }}" class="flex">
        <div class="{{ $classes }} ">
            <x-dynamic-component :component="'icons.' . $icon" {{ $attributes->merge(['class' => $svg]) }} />
            <span class='md:hidden xl:flex h-full  flex items-center  font-semibold tracking-wider'>
                {{ $title }}
            </span>
        </div>
    </a>
@else
    <div class="flex xl:items-start xl:justify-start ">
        <a href="{{ $route }}" class="transition-all rounded-full hover:bg-[#e7e9ea1a] p-3 xl:p-3">
            <x-dynamic-component :component="'icons.' . $icon" {{ $attributes->merge(['class' => $svg]) }} />
        </a>
    </div>
@endif
