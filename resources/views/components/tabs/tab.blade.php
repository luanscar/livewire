@props(['active' => null, 'title', 'classes' => null])

@php
    $classes = '';
    
    if ($active) {
        $classes = 'h-[4px] bg-[#1DA1F2] items-center absolute bottom-0 inline-flex rounded-full w-full';
    }
@endphp


<div class="flex grow justify-center h-full">
    <a class="flex text-center items-center justify-center relative py-4">
        <span class="text-center">{{ $title }}</span>
        <div {{ $attributes->class(["$classes"]) }}>
        </div>
    </a>
</div>
