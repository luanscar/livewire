<x-app-layout>


    {{-- START CONTAINER --}}
    <div
        class="md:grid w-screen h-screen grid-flow-col relative overflow-x-hidden font-sans antialiased gap-4 text-white
        md:auto-cols-auto  bg-slate-900">

        <div class="flex justify-end ">
            <x-menu />
        </div>


        <div class="md:col-span-6 xl:col-span-2">
            <x-feed />

            <div class="hidden  xl:grid">
                <x-sidebar />
            </div>
        </div>




    </div>
    {{-- ===================== END CONTAINER ===================== --}}

</x-app-layout>
