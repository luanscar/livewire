@props(['icon', 'title' => null, 'route', 'svg'])

<div class="flex flex-row items-center hover:bg-gray-200/20 p-4  rounded-full">
    <a href="{{ $route }}" class="mr-4">
        <x-dynamic-component :component="'icons.' . $icon" {{ $attributes->merge(['class' => $svg]) }} />
    </a>

    @if ($title)
        <span class="text-[24px]"> {{ $title }} </span>
    @endif
</div>
