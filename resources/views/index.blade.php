<x-app-layout>
    {{-- START CONTAINER --}}
    <div class="container flex flex-row h-full mx-auto text-white">


        <div class="hidden md:flex md:basis-20 xl:basis-[457px] md:p-4 md:justify-end xl:px-2 xl:relative ">

            <div class="flex flex-col xl:w-[259px] item gap-y-4  xl:fixed md:fixed top-2">
                <x-menu icon="twitter" route="/" svg="fill-white w-7 xl:w-8" />
                <x-menu icon="home" title="Home" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu icon="search" title="Explorar" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu icon="notifications" title="Notifications" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu icon="blue-md" title="Verified" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu icon="message" title="Messages" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu icon="profile" title="Profile" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu icon="dots-circle" title="More" route="/" svg="fill-white w-7 xl:w-8 xl:mr-6" />
                <x-menu icon="tweet" title="Tweet" tweet route="/" svg="fill-white w-8 xl:w-0" />

            </div>

        </div>




        {{-- ===================== MAIN ===================== --}}
        <div class="md:border-x flex flex-col w-full md:basis-[600px] h-screen ">

            <header class="md:hidden grid grid-cols-3 grid-flow-col  justify-items-start py-[10.5px] px-4">

                <div x-on:click="open = ! open" class="w-8 overflow-hidden rounded-full">
                    <img class="" class="object-scale-down"
                        src="https://pbs.twimg.com/profile_images/1682474591745179650/-bXxWi7E_400x400.jpg"
                        alt="" srcset="">
                </div>

                <div class="justify-self-center">

                </div>
            </header>

            <div class="sticky top-0 text-2xl backdrop-blur-xl">

                <div class="flex flex-col">

                    <div class="hidden md:flex">
                        <h2 class="px-4 py-2 text-xl font-semibold text-white">Home</h2>
                    </div>

                    <x-tabs>

                        <x-slot:title>For you </x-slot:title>
                        <x-slot:title>Following </x-slot:title>
                    </x-tabs>

                    {{-- <div class="flex flex-row justify-center items-center w-full text-sm tracking-wider font-bold ">
                        <div class="grow flex justify-center">
                            <a href="">
                                <span>For You</span>
                            </a>
                        </div>

                        <div class="flex grow justify-center h-full">
                            <a href="" class="flex text-center items-center justify-center relative py-4">
                                <span class="text-center">Following</span>
                                <div
                                    class="h-[4px] bg-[#1DA1F2] items-center absolute bottom-0 inline-flex rounded-full w-full">
                                </div>
                            </a>
                        </div>
                    </div> --}}

                    {{-- <ul
                        class="snap-start grid grid-cols-2 text-center text-lg text-bold text-gray-500 border-b-[0.625px]">
                        <li class="pt-4 cursor-pointer hover:bg-[#e7e9ea1a] flex  justify-center">
                            <div class="border-b-4 w-fit border-twitter">For You</div>
                        </li>
                        <li class="pt-4 cursor-pointer hover:bg-[#e7e9ea1a] flex justify-center">
                            <div class="border-b-4 border-transparent w-fit">Following</div>
                        </li>
                    </ul> --}}

                </div>
            </div>








            <div>


                <div class="flex flex-col w-full snap-x">
                    <div class="flex flex-row justify-between snap-center">

                        <div>
                            <span>Name</span>
                            <span class="text-sm text-white/50">@luangbt</span>
                            <span>•</span>
                            <span class="text-sm text-white/50">14 min</span>
                        </div>

                        <div class="flex items-center">
                            <x-icons.dots-h class="w-5 fill-slate-500" />
                        </div>
                    </div>

                    <div>
                        <span>
                            eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                            tavam sentados juntos mas longe dele
                        </span>
                    </div>

                    <div class="w-full mt-3 rounded-lg minmax bg-slate-400">

                    </div>

                </div>

                <div class="flex flex-col w-full snap-x">
                    <div class="flex flex-row justify-between snap-center">

                        <div>
                            <span>Name</span>
                            <span class="text-sm text-white/50">@luangbt</span>
                            <span>•</span>
                            <span class="text-sm text-white/50">14 min</span>
                        </div>

                        <div class="flex items-center">
                            <x-icons.dots-h class="w-5 fill-slate-500" />
                        </div>
                    </div>

                    <div>
                        <span>
                            eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                            tavam sentados juntos mas longe dele
                        </span>
                    </div>

                    <div class="w-full mt-3 rounded-lg minmax bg-slate-400">

                    </div>

                </div>


                <div class="flex flex-col w-full snap-x">
                    <div class="flex flex-row justify-between snap-center">

                        <div>
                            <span>Name</span>
                            <span class="text-sm text-white/50">@luangbt</span>
                            <span>•</span>
                            <span class="text-sm text-white/50">14 min</span>
                        </div>

                        <div class="flex items-center">
                            <x-icons.dots-h class="w-5 fill-slate-500" />
                        </div>
                    </div>

                    <div>
                        <span>
                            eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                            tavam sentados juntos mas longe dele
                        </span>
                    </div>

                    <div class="w-full mt-3 rounded-lg minmax bg-slate-400">

                    </div>

                </div>


                <div class="flex flex-col w-full snap-x">
                    <div class="flex flex-row justify-between snap-center">

                        <div>
                            <span>Name</span>
                            <span class="text-sm text-white/50">@luangbt</span>
                            <span>•</span>
                            <span class="text-sm text-white/50">14 min</span>
                        </div>

                        <div class="flex items-center">
                            <x-icons.dots-h class="w-5 fill-slate-500" />
                        </div>
                    </div>

                    <div>
                        <span>
                            eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                            tavam sentados juntos mas longe dele
                        </span>
                    </div>

                    <div class="w-full mt-3 rounded-lg minmax bg-slate-400">

                    </div>

                </div>


                <div class="flex flex-col w-full snap-proximity snap-x">
                    <div class="flex flex-row justify-between snap-center">

                        <div>
                            <span>Name</span>
                            <span class="text-sm text-white/50">@luangbt</span>
                            <span>•</span>
                            <span class="text-sm text-white/50">14 min</span>
                        </div>

                        <div class="flex items-center">
                            <x-icons.dots-h class="w-5 fill-slate-500" />
                        </div>
                    </div>

                    <div>
                        <span>
                            eh que hoje eu acordei meio taehyung de birra chateado fazendo bico pq o namjoon e o jimin
                            tavam sentados juntos mas longe dele
                        </span>
                    </div>

                    <div class="w-full mt-3 rounded-lg minmax bg-slate-400">

                    </div>

                </div>


            </div>






        </div>
        {{-- ===================== END MAIN ===================== --}}







    </div>
    {{-- ===================== END CONTAINER ===================== --}}

</x-app-layout>
