@props(['active' => null, 'title', 'classes' => null])

@php
    $classes = '';

    if ($active) {
        $classes = 'h-[4px] bg-[#1DA1F2] items-center absolute bottom-0 inline-flex rounded-full w-full';
    }
@endphp


<a href="/" class="grow items-center justify-center flex hover:bg-slate-600/20">
    <div class="relative flex pt-4 pb-4 justify-center">
        <span>
            {{ $title }}
        </span>

        <div {{ $attributes->class(["$classes"]) }}>
        </div>
    </div>
</a>
