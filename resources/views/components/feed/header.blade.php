<header class="backdrop-blur-[12px] z-0 pointer-events-auto w-full sticky -top-[0.5px] duration-500 bg-black/10"
    @scroll.window="atTop = (window.pageYOffset < 0.5) ? false : true" :class="{ 'max-sm:-translate-y-16': atTop, }">

    <div class="p-4 text-2xl hidden md:flex">
        <h1>Home</h1>
    </div>

    <div
        class="md:hidden grid grid-cols-3 grid-flow-col w-full justify-items-start py-4 px-4 transition-all duration-500">

        <div x-on:click="open = !open">
            <x-menu.avatar class="w-8 rounded-full overflow-hidden" />
        </div>

        <div class="justify-self-center">
            <x-icons.twitter class="w-7 flex fill-white" />
        </div>
    </div>

    <nav class="flex justify-center flex-row text-center  border-b-[0.625px] border-outline  w-full">
        <x-tabs title="For you" active="true" />
        <x-tabs title="Following" />
    </nav>

</header>
