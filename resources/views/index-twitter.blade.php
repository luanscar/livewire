<x-app-layout x-data="{ atTop: false } class =" z-10">


    <header class="grid grid-cols-3 grid-flow-col w-full justify-items-start py-[10.5px] px-4">

        <div x-on:click="open = ! open" class="w-8 rounded-full overflow-hidden">
            <img class="" class="object-scale-down"
                src="https://pbs.twimg.com/profile_images/1682474591745179650/-bXxWi7E_400x400.jpg" alt=""
                srcset="">
        </div>

        <div class="justify-self-center">
            <x-icons.twitter class="w-7 flex" />
        </div>
    </header>


    <nav
        class="grid grid-cols-2 justify-items-stretch scroll-py-0 sticky top-0 snap-x snap-mandatory backdrop-blur-md border-b border-gray-600/10">
        <div class="grid justify-items-start">
            <a class="py-4 justify-self-stretch text-center hover:bg-slate-400/5">
                <span>For you</span>
            </a>
        </div>
        <div class="grid justify-items-start ">
            <a class="py-4  justify-self-stretch text-center hover:bg-slate-400/5">
                <span>Following</span>
            </a>
        </div>
    </nav>

    <div class="grid justify-items-center border-b hover:bg-slate-400/5 border-gray-600/10">
        <a href="" class="py-3 justify-self-stretch text-center font-light">
            <span>Show More</span>
        </a>
    </div>

    <x-menu.mobile />



    <section class="flex flex-col w-full">
        <div class="py-4 px-3">
            <div class="flex flex-row">

                <div class="mr-3 ">
                    <div class="w-8 rounded-full overflow-hidden ">
                        <img class="" class="object-scale-down"
                            src="https://pbs.twimg.com/profile_images/1682474591745179650/-bXxWi7E_400x400.jpg"
                            alt="" srcset="">
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


        </div>

    </section>
</x-app-layout>
