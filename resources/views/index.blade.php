<x-app-layout>

    <div class="xl:container h-full flex flex-row text-white">


        <div class="hidden md:flex md:basis-20 xl:basis-60 md:justify-center xl:relative">
            <div class="flex flex-col gap-y-8 xl:fixed md:fixed top-0">

                <x-menu>
                    <x-menu.item icon="twitter" route="/" svg="w-8 fill-white" />
                    <x-menu.item icon="home" title="Páginal Inicial" route="/" svg="w-8 fill-white" />
                </x-menu>

            </div>
        </div>


        {{-- ===================== MAIN ===================== --}}
        <div class="md:border-x flex flex-col basis-2/3 items-center h-screen">

            <header class="md:hidden grid grid-cols-3 grid-flow-col w-full justify-items-start py-[10.5px] px-4">

                <div x-on:click="open = ! open" class="w-8 rounded-full overflow-hidden">
                    <img class="" class="object-scale-down"
                        src="https://pbs.twimg.com/profile_images/1682474591745179650/-bXxWi7E_400x400.jpg"
                        alt="" srcset="">
                </div>

                <div class="justify-self-center">

                </div>
            </header>

            <div class="flex flex-col  w-full">
                <div class="flex flex-row justify-between">

                    <div>
                        <span>Name</span>
                        <span class="text-white/50 text-sm">@luangbt</span>
                        <span>•</span>
                        <span class="text-white/50 text-sm">14 min</span>
                    </div>

                    <div class="flex  items-center">
                        <x-icons.dots-h class="w-5 fill-slate-500" />
                    </div>
                </div>

                <div>
                    <span>
                        eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                        tavam sentados juntos mas longe dele
                    </span>
                </div>

                <div class="w-full minmax bg-slate-400 rounded-lg mt-3">

                </div>


            </div>
            <div class="flex flex-col  w-full">
                <div class="flex flex-row justify-between">

                    <div>
                        <span>Name</span>
                        <span class="text-white/50 text-sm">@luangbt</span>
                        <span>•</span>
                        <span class="text-white/50 text-sm">14 min</span>
                    </div>

                    <div class="flex  items-center">
                        <x-icons.dots-h class="w-5 fill-slate-500" />
                    </div>
                </div>

                <div>
                    <span>
                        eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                        tavam sentados juntos mas longe dele
                    </span>
                </div>

                <div class="w-full minmax bg-slate-400 rounded-lg mt-3">

                </div>


            </div>
            <div class="flex flex-col  w-full">
                <div class="flex flex-row justify-between">

                    <div>
                        <span>Name</span>
                        <span class="text-white/50 text-sm">@luangbt</span>
                        <span>•</span>
                        <span class="text-white/50 text-sm">14 min</span>
                    </div>

                    <div class="flex  items-center">
                        <x-icons.dots-h class="w-5 fill-slate-500" />
                    </div>
                </div>

                <div>
                    <span>
                        eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                        tavam sentados juntos mas longe dele
                    </span>
                </div>

                <div class="w-full minmax bg-slate-400 rounded-lg mt-3">

                </div>


            </div>
            <div class="flex flex-col  w-full">
                <div class="flex flex-row justify-between">

                    <div>
                        <span>Name</span>
                        <span class="text-white/50 text-sm">@luangbt</span>
                        <span>•</span>
                        <span class="text-white/50 text-sm">14 min</span>
                    </div>

                    <div class="flex  items-center">
                        <x-icons.dots-h class="w-5 fill-slate-500" />
                    </div>
                </div>

                <div>
                    <span>
                        eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                        tavam sentados juntos mas longe dele
                    </span>
                </div>

                <div class="w-full minmax bg-slate-400 rounded-lg mt-3">

                </div>


            </div>
            <div class="flex flex-col  w-full">
                <div class="flex flex-row justify-between">

                    <div>
                        <span>Name</span>
                        <span class="text-white/50 text-sm">@luangbt</span>
                        <span>•</span>
                        <span class="text-white/50 text-sm">14 min</span>
                    </div>

                    <div class="flex  items-center">
                        <x-icons.dots-h class="w-5 fill-slate-500" />
                    </div>
                </div>

                <div>
                    <span>
                        eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                        tavam sentados juntos mas longe dele
                    </span>
                </div>

                <div class="w-full minmax bg-slate-400 rounded-lg mt-3">

                </div>


            </div>



        </div>
        {{-- ===================== END MAIN ===================== --}}
    </div>

</x-app-layout>
