<section x-transition class="z-10">

    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0  -translate-x-10 "
        x-transition:enter-end="opacity-100 transition ease-in-out duration-300 scale-100"
        x-transition:leave="transition ease-in-out duration-300"
        x-transition:leave-start="opacity-100 transition ease-in-out duration-300 scale-100"
        x-transition:leave-end="opacity-0 transition ease-in-out duration-300 -translate-x-9 scale-100"
        class="grid grid-flow-row md:hidden fixed w-full bg-[#5b708366] top-0 h-screen"
        :class="{ 'block': open, '-translate-x-200': !open }">

        <div class="bg-black w-3/4 shadow-lg shadow-gray-500/90" @click.outside="open = false">

            <div class="grid grid-flow-col  place-content-stretch h-[53px] z-2 px-4">
                <span class="place-self-center justify-self-start">Informações da conta</span>

                <div class="place-self-center justify-self-end p-2 rounded-full hover:bg-gray-600/20"
                    x-on:click="open = ! open">
                    <x-menu.item icon="close" svg="w-5 fill-white" />
                </div>
            </div>

            <div class="p-4">
                <div class="grid grid-cols-2 place-content-stretch">
                    <x-menu.avatar class="w-12 rounded-full overflow-hidden" />
                    <x-icons.plus
                        class="h-8 p-1.5 w-8  border fill-white border-gray-400 rounded-full place-self-center justify-self-end" />
                </div>

                <div class="grid grid-flow-row mt-2  place-content-stretch ">
                    <span class="">͏ ͏</span>
                    <span class="text-white/50 text-md">User</span>
                </div>

                <div class="mt-3 flex flex-row gap-6">
                    <div>
                        <span>234</span>
                        <span class="text-white/50">Following</span>
                    </div>
                    <div>
                        <span>12,1 mil</span>
                        <span class="text-white/50">Followers</span>
                    </div>
                </div>
            </div>

            <div class="flex grow flex-col  w-full">
                <x-menu.item icon="profile" route="/" title="Perfil" svg="h-6 w-6 mr-6 fill-white"
                    class="flex flex-row items-center  m-2 text-2xl" />
                <x-menu.item icon="blue" route="/" title="Blue" svg="h-6 w-6 mr-6 fill-white "
                    class="flex flex-row items-center m-2 text-2xl " />
                <x-menu.item icon="list" route="/" title="Listas" svg="h-6 w-6 mr-6 fill-white "
                    class="flex flex-row items-center m-2 text-2xl " />
            </div>

        </div>

    </div>
</section>
