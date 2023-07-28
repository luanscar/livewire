<x-app-layout>


    {{-- START CONTAINER --}}
    <div
        class="relative flex-row h-full w-full overflow-x-hidden font-sans antialiased text-white gap-4 md:flex bg-slate-900">

        <div class="flex flex-col items-end w-24  shrink xl:justify-end xl:grow">
            <x-menu />
        </div>


        <div class="border-x-[0.625px] border-slate-600 flex flex-col  h-full w-[600px]">
            <x-feed />
        </div>

        <div class="hidden xl:flex xl:w-1/4 min-w-[72px] shrink">
            <x-sidebar />
        </div>




    </div>
    {{-- ===================== END CONTAINER ===================== --}}

</x-app-layout>
