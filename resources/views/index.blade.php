<x-app-layout>



    {{-- START CONTAINER --}}
    <div class="flex justify-center items-center flex-row font-sans  antialiased text-white gap-4 md:flex bg-black">

        <div class="md:flex flex-col hidden items-end w-24 xl:justify-end xl:grow">
            <x-menu />
        </div>


        <div class="md:border-x-[0.625px] border-outline relative w-full  flex flex-col md:w-[600px]">
            <x-feed />
        </div>

        <div class="hidden xl:flex xl:w-1/3 min-w-[72px] shrink">
            <x-sidebar />
        </div>



    </div>
    {{-- ===================== END CONTAINER ===================== --}}

</x-app-layout>
