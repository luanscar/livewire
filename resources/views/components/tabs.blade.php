@props(['active', 'title'])

<div class="flex flex-row justify-center items-center w-full text-sm tracking-wider font-bold ">

    <div class="flex grow justify-center h-full">
        <a href="" class="flex text-center items-center justify-center relative py-4">
            <span class="text-center">{{ $title }}</span>
            <div class="h-[4px] bg-[#1DA1F2] items-center absolute bottom-0 inline-flex rounded-full w-full">
            </div>
        </a>
    </div>

</div>
