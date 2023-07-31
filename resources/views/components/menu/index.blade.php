@props(['sm' => null])

@php
    $responsive = 'md:top-0 min-h-screen md:fixed flex md:flex-col pt-2 gap-y-4 xl:fixed xl:w-70';
    
    if ($sm) {
        $responsive = 'md:hidden flex flex-row bottom-0 w-full fixed justify-evenly border-t-[0.625px] pb-1 bg-black border-outline items-center';
    }
    
@endphp

<div class="{{ $responsive }}">
    {{ $slot }}

</div>
