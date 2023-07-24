<section :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">

    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0  -translate-x-10 " x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 -translate-x-9 scale-100"
        class="grid grid-flow-row  fixed w-full bg-[#5b708366] top-0 h-screen shrink-1">

        <div class="bg-black w-3/4  shadow-lg shadow-gray-500/90" @click.outside="open = false">

            <div class="grid grid-flow-col  place-content-stretch h-[53px] z-2 px-4">
                <span class="place-self-center justify-self-start">Informações da conta</span>

                <div class="place-self-center justify-self-end p-2 rounded-full hover:bg-gray-600/20"
                    x-on:click="open = ! open">
                    <x-menu.item icon="close" class="w-5 fill-white" />
                </div>
            </div>

            <div class="p-4">
                <div class="grid grid-cols-2 place-content-stretch">
                    <div class="h-[40px] w-[40px] bg-slate-400 rounded-full"></div>
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

            <div class="flex flex-col">
                <x-menu.item icon="profile" title="Perfil" svg="h-6 w-6 mr-6 fill-white"
                    class="flex flex-row items-center  m-2 text-2xl" />
                <x-menu.item icon="blue" title="Blue" svg="h-6 w-6 mr-6 fill-white "
                    class="flex flex-row items-center m-2 text-2xl " />
                <x-menu.item icon="list" title="Listas" svg="h-6 w-6 mr-6 fill-white "
                    class="flex flex-row items-center m-2 text-2xl " />
            </div>

        </div>

    </div>
</section>
