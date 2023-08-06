@props(['classes' => null])

@php

    switch ($classes) {
        case 'xl':
            $classes = 'hidden absolute items-center bottom-5 xl:flex flex-row w-full gap-3 hover:bg-outline rounded-full xl:p-3';
            break;

        case 'sm':
            $classes = 'flex flex-row gap-3 items-center';
            break;

        default:
            # code...
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>

    <x-menu.avatar class="w-10 h-10" />


    <div class="flex flex-col justify-end text-md">
        <div>
            Name
        </div>

        <div class="text-gray-600">
            @username
        </div>

    </div>

    <div class="flex items-center justify-end flex-1">
        <x-icons.dots class="fill-white w-5" />
    </div>
</div>


{{--
<div class="hidden absolute bottom-5 xl:flex flex-row w-full gap-3 hover:bg-outline rounded-full xl:p-3">
    <x-menu.avatar class="w-12 rounded-full overflow-hidden" />


    <div class="flex flex-col justify-end text-md">
        <div>
            Name
        </div>

        <div class="text-gray-600">
            @username
        </div>

    </div>

    <div class="flex items-center justify-end flex-1">
        <x-icons.dots class="fill-white w-5" />
    </div>
</div> --}}
