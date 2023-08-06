<x-app-layout>



    {{-- START CONTAINER --}}
    <div class="flex justify-center items-center flex-row font-sans antialiased text-white gap-4 md:flex bg-black">

        <div class="md:flex flex-col hidden items-end w-24 xl:justify-end xl:grow">
            <x-menu>
                <x-menu.item icon="twitter" route="/" svg="fill-white w-8 xl:w-8" />
                <x-menu.item icon="home" title="Home" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="search" title="Explorar" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="notifications" title="Notifications" route="/"
                    svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="blue-md" title="Verified" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="message" title="Messages" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="profile" title="Profile" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="dots-circle" title="More" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="tweet" title="Tweet" tweet="blue" route="/" svg="fill-white w-8 xl:w-0" />

                <x-menu.profile-info classes="xl" />
            </x-menu>


        </div>


        <div class="md:border-x-[0.625px] border-outline relative w-screen  flex flex-col md:w-[600px] z-1"
            x-data="{
                atTop: false,
                open: false,
            }" x-init="window.addEventListener('beforeunload', (event) => {
                document.documentElement.scrollTop = 0;
            });">


            <x-feed />


            <x-menu.mobile-twitter />


            <x-menu sm>
                <x-menu.item icon="home" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="search" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="notifications" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu.item icon="message" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
            </x-menu>

        </div>

        <div class="hidden xl:flex xl:w-1/3 min-w-[72px] shrink">

        </div>



    </div>
    {{-- ===================== END CONTAINER ===================== --}}

</x-app-layout>
