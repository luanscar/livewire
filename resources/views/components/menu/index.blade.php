@props(['icon', 'svg', 'title' => null, 'route'])



@if ($title)
    <div class="justify-center flex flex-col">
        <a href="{{ $route }}" class="flex items-center hover:bg-gray-600/20 rounded-full p-2 xl:px-4 xl:py-3">
            <x-dynamic-component :component="'icons.' . $icon" {{ $attributes->merge(['class' => $svg]) }} />
            <span class="md:hidden xl:flex text-[20px]  font-semibold tracking-wider xl:ml-6">
                {{ $title }}
            </span>
        </a>
    </div>
@else
    <div class=" items-start justify-center flex flex-col">
        <a href="{{ $route }}" class="hover:bg-gray-600/20 p-2 xl:px-4 rounded-full ">
            <x-dynamic-component :component="'icons.' . $icon" {{ $attributes->merge(['class' => $svg]) }} />
        </a>
    </div>
@endif
