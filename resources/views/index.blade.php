<x-app-layout>
    {{-- START CONTAINER --}}
    <div
        class="relative grid w-screen h-screen grid-flow-col overflow-x-hidden font-sans antialiased text-white grid-cols2 bg-slate-900">

        <div class="relative ">
            <x-menu />
        </div>


        <div class="w-full h-full">
            <x-feed />
        </div>

        <x-sidebar />
        <div>

        </div>

    </div>
    {{-- ===================== END CONTAINER ===================== --}}

</x-app-layout>
