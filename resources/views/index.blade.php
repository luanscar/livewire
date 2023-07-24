<x-app-layout  x-data="{open: false}" class="z-10" >


        <header class="grid grid-cols-3 grid-flow-col w-full justify-items-start py-[10.5px] px-4">
            <div x-on:click="open = ! open"
            class="w-8 rounded-full overflow-hidden">
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
            <div class="grid justify-items-start ">
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



    <header class="hidden md:flex">

        <div class="asw">
            <div class="aswq">
                <div class="aswe">
                    <span class="aswd">Paginal Inicial</span>
                </div>
            </div>
        </div>


        <main class="hidden md:flex">
            <nav class="">
                <a href="/home">

                    <div class="">
                        <span class="style-13">Para você</span>
                    </div>

                </a>

                <a href="/home" class="">

                    <div class="style-18">
                        <span class="style-19">Seguindo</span>
                    </div>

                </a>
            </nav>
        </main>


    </header>

    <div class="">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt neque non facilisis dapibus. Etiam
        commodo urna in elit lacinia bibendum. Curabitur nec ultrices quam. Donec ipsum libero, malesuada sit amet
        lobortis sed, laoreet ut enim. Mauris vehicula ultricies elit ultricies dignissim. Sed vitae leo id nulla
        molestie lacinia. Maecenas non efficitur sem. Nullam a nisi suscipit, fringilla turpis sit amet, vestibulum
        mauris. Donec libero felis, convallis sit amet purus a, rhoncus vestibulum diam. Donec ipsum lectus, cursus
        ut tempor et, luctus nec arcu. Aenean rutrum felis nec ligula faucibus, non dictum ipsum tempus. Maecenas
        sit amet suscipit orci. Donec maximus fringilla lacus ullamcorper fermentum.

        Integer finibus ex orci, sed finibus diam semper nec. Cras a gravida dui. Morbi nec magna accumsan,
        venenatis velit eu, sollicitudin sem. Nullam orci nisl, suscipit nec tempus non, faucibus vitae ligula.
        Praesent quis sem varius, commodo ex et, varius est. Aenean nec ullamcorper sapien. In sagittis, sapien eget
        rhoncus sodales, urna purus porttitor dui, quis aliquet felis purus ac augue.

        Mauris vel diam quam. Vivamus diam mauris, placerat vel ipsum at, luctus luctus nulla. Sed vel ullamcorper
        dui. Cras ac turpis sed augue dignissim hendrerit. Aenean auctor convallis nibh, nec mollis sapien dignissim
        nec. Nunc dictum ut elit sit amet dignissim. Ut ut maximus turpis. Aliquam rutrum consequat risus non
        eleifend.

        Integer urna quam, vehicula sed convallis id, interdum dignissim tortor. Quisque sodales massa magna, eu
        suscipit felis semper at. Aliquam fermentum vulputate velit. Cras vel arcu non nisi molestie luctus ut
        mattis enim. Phasellus vestibulum ipsum at turpis tincidunt, eget imperdiet tellus ornare. Duis quis ante
        massa. Fusce vel aliquet lorem, ac consectetur nulla. Lorem ipsum dolor sit amet, consectetur adipiscing
        elit. Donec tincidunt neque non facilisis dapibus. Etiam
        commodo urna in elit lacinia bibendum. Curabitur nec ultrices quam. Donec ipsum libero, malesuada sit amet
        lobortis sed, laoreet ut enim. Mauris vehicula ultricies elit ultricies dignissim. Sed vitae leo id nulla
        molestie lacinia. Maecenas non efficitur sem. Nullam a nisi suscipit, fringilla turpis sit amet, vestibulum
        mauris. Donec libero felis, convallis sit amet purus a, rhoncus vestibulum diam. Donec ipsum lectus, cursus
        ut tempor et, luctus nec arcu. Aenean rutrum felis nec ligula faucibus, non dictum ipsum tempus. Maecenas
        sit amet suscipit orci. Donec maximus fringilla lacus ullamcorper fermentum.

        Integer finibus ex orci, sed finibus diam semper nec. Cras a gravida dui. Morbi nec magna accumsan,
        venenatis velit eu, sollicitudin sem. Nullam orci nisl, suscipit nec tempus non, faucibus vitae ligula.
        Praesent quis sem varius, commodo ex et, varius est. Aenean nec ullamcorper sapien. In sagittis, sapien eget
        rhoncus sodales, urna purus porttitor dui, quis aliquet felis purus ac augue.

        Mauris vel diam quam. Vivamus diam mauris, placerat vel ipsum at, luctus luctus nulla. Sed vel ullamcorper
        dui. Cras ac turpis sed augue dignissim hendrerit. Aenean auctor convallis nibh, nec mollis sapien dignissim
        nec. Nunc dictum ut elit sit amet dignissim. Ut ut maximus turpis. Aliquam rutrum consequat risus non
        eleifend.

        Integer urna quam, vehicula sed convallis id, interdum dignissim tortor. Quisque sodales massa magna, eu
        suscipit felis semper at. Aliquam fermentum vulputate velit. Cras vel arcu non nisi molestie luctus ut
        mattis enim. Phasellus vestibulum ipsum at turpis tincidunt, eget imperdiet tellus ornare. Duis quis ante
        massa. Fusce vel aliquet lorem, ac consectetur nulla.
    </div>
    <div class="">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt neque non facilisis dapibus. Etiam
        commodo urna in elit lacinia bibendum. Curabitur nec ultrices quam. Donec ipsum libero, malesuada sit amet
        lobortis sed, laoreet ut enim. Mauris vehicula ultricies elit ultricies dignissim. Sed vitae leo id nulla
        molestie lacinia. Maecenas non efficitur sem. Nullam a nisi suscipit, fringilla turpis sit amet, vestibulum
        mauris. Donec libero felis, convallis sit amet purus a, rhoncus vestibulum diam. Donec ipsum lectus, cursus
        ut tempor et, luctus nec arcu. Aenean rutrum felis nec ligula faucibus, non dictum ipsum tempus. Maecenas
        sit amet suscipit orci. Donec maximus fringilla lacus ullamcorper fermentum.

        Integer finibus ex orci, sed finibus diam semper nec. Cras a gravida dui. Morbi nec magna accumsan,
        venenatis velit eu, sollicitudin sem. Nullam orci nisl, suscipit nec tempus non, faucibus vitae ligula.
        Praesent quis sem varius, commodo ex et, varius est. Aenean nec ullamcorper sapien. In sagittis, sapien eget
        rhoncus sodales, urna purus porttitor dui, quis aliquet felis purus ac augue.

        Mauris vel diam quam. Vivamus diam mauris, placerat vel ipsum at, luctus luctus nulla. Sed vel ullamcorper
        dui. Cras ac turpis sed augue dignissim hendrerit. Aenean auctor convallis nibh, nec mollis sapien dignissim
        nec. Nunc dictum ut elit sit amet dignissim. Ut ut maximus turpis. Aliquam rutrum consequat risus non
        eleifend.

        Integer urna quam, vehicula sed convallis id, interdum dignissim tortor. Quisque sodales massa magna, eu
        suscipit felis semper at. Aliquam fermentum vulputate velit. Cras vel arcu non nisi molestie luctus ut
        mattis enim. Phasellus vestibulum ipsum at turpis tincidunt, eget imperdiet tellus ornare. Duis quis ante
        massa. Fusce vel aliquet lorem, ac consectetur nulla. Lorem ipsum dolor sit amet, consectetur adipiscing
        elit. Donec tincidunt neque non facilisis dapibus. Etiam
        commodo urna in elit lacinia bibendum. Curabitur nec ultrices quam. Donec ipsum libero, malesuada sit amet
        lobortis sed, laoreet ut enim. Mauris vehicula ultricies elit ultricies dignissim. Sed vitae leo id nulla
        molestie lacinia. Maecenas non efficitur sem. Nullam a nisi suscipit, fringilla turpis sit amet, vestibulum
        mauris. Donec libero felis, convallis sit amet purus a, rhoncus vestibulum diam. Donec ipsum lectus, cursus
        ut tempor et, luctus nec arcu. Aenean rutrum felis nec ligula faucibus, non dictum ipsum tempus. Maecenas
        sit amet suscipit orci. Donec maximus fringilla lacus ullamcorper fermentum.

        Integer finibus ex orci, sed finibus diam semper nec. Cras a gravida dui. Morbi nec magna accumsan,
        venenatis velit eu, sollicitudin sem. Nullam orci nisl, suscipit nec tempus non, faucibus vitae ligula.
        Praesent quis sem varius, commodo ex et, varius est. Aenean nec ullamcorper sapien. In sagittis, sapien eget
        rhoncus sodales, urna purus porttitor dui, quis aliquet felis purus ac augue.

        Mauris vel diam quam. Vivamus diam mauris, placerat vel ipsum at, luctus luctus nulla. Sed vel ullamcorper
        dui. Cras ac turpis sed augue dignissim hendrerit. Aenean auctor convallis nibh, nec mollis sapien dignissim
        nec. Nunc dictum ut elit sit amet dignissim. Ut ut maximus turpis. Aliquam rutrum consequat risus non
        eleifend.

        Integer urna quam, vehicula sed convallis id, interdum dignissim tortor. Quisque sodales massa magna, eu
        suscipit felis semper at. Aliquam fermentum vulputate velit. Cras vel arcu non nisi molestie luctus ut
        mattis enim. Phasellus vestibulum ipsum at turpis tincidunt, eget imperdiet tellus ornare. Duis quis ante
        massa. Fusce vel aliquet lorem, ac consectetur nulla.
    </div>
    <div class="">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt neque non facilisis dapibus. Etiam
        commodo urna in elit lacinia bibendum. Curabitur nec ultrices quam. Donec ipsum libero, malesuada sit amet
        lobortis sed, laoreet ut enim. Mauris vehicula ultricies elit ultricies dignissim. Sed vitae leo id nulla
        molestie lacinia. Maecenas non efficitur sem. Nullam a nisi suscipit, fringilla turpis sit amet, vestibulum
        mauris. Donec libero felis, convallis sit amet purus a, rhoncus vestibulum diam. Donec ipsum lectus, cursus
        ut tempor et, luctus nec arcu. Aenean rutrum felis nec ligula faucibus, non dictum ipsum tempus. Maecenas
        sit amet suscipit orci. Donec maximus fringilla lacus ullamcorper fermentum.

        Integer finibus ex orci, sed finibus diam semper nec. Cras a gravida dui. Morbi nec magna accumsan,
        venenatis velit eu, sollicitudin sem. Nullam orci nisl, suscipit nec tempus non, faucibus vitae ligula.
        Praesent quis sem varius, commodo ex et, varius est. Aenean nec ullamcorper sapien. In sagittis, sapien eget
        rhoncus sodales, urna purus porttitor dui, quis aliquet felis purus ac augue.

        Mauris vel diam quam. Vivamus diam mauris, placerat vel ipsum at, luctus luctus nulla. Sed vel ullamcorper
        dui. Cras ac turpis sed augue dignissim hendrerit. Aenean auctor convallis nibh, nec mollis sapien dignissim
        nec. Nunc dictum ut elit sit amet dignissim. Ut ut maximus turpis. Aliquam rutrum consequat risus non
        eleifend.

        Integer urna quam, vehicula sed convallis id, interdum dignissim tortor. Quisque sodales massa magna, eu
        suscipit felis semper at. Aliquam fermentum vulputate velit. Cras vel arcu non nisi molestie luctus ut
        mattis enim. Phasellus vestibulum ipsum at turpis tincidunt, eget imperdiet tellus ornare. Duis quis ante
        massa. Fusce vel aliquet lorem, ac consectetur nulla. Lorem ipsum dolor sit amet, consectetur adipiscing
        elit. Donec tincidunt neque non facilisis dapibus. Etiam
        commodo urna in elit lacinia bibendum. Curabitur nec ultrices quam. Donec ipsum libero, malesuada sit amet
        lobortis sed, laoreet ut enim. Mauris vehicula ultricies elit ultricies dignissim. Sed vitae leo id nulla
        molestie lacinia. Maecenas non efficitur sem. Nullam a nisi suscipit, fringilla turpis sit amet, vestibulum
        mauris. Donec libero felis, convallis sit amet purus a, rhoncus vestibulum diam. Donec ipsum lectus, cursus
        ut tempor et, luctus nec arcu. Aenean rutrum felis nec ligula faucibus, non dictum ipsum tempus. Maecenas
        sit amet suscipit orci. Donec maximus fringilla lacus ullamcorper fermentum.

        Integer finibus ex orci, sed finibus diam semper nec. Cras a gravida dui. Morbi nec magna accumsan,
        venenatis velit eu, sollicitudin sem. Nullam orci nisl, suscipit nec tempus non, faucibus vitae ligula.
        Praesent quis sem varius, commodo ex et, varius est. Aenean nec ullamcorper sapien. In sagittis, sapien eget
        rhoncus sodales, urna purus porttitor dui, quis aliquet felis purus ac augue.

        Mauris vel diam quam. Vivamus diam mauris, placerat vel ipsum at, luctus luctus nulla. Sed vel ullamcorper
        dui. Cras ac turpis sed augue dignissim hendrerit. Aenean auctor convallis nibh, nec mollis sapien dignissim
        nec. Nunc dictum ut elit sit amet dignissim. Ut ut maximus turpis. Aliquam rutrum consequat risus non
        eleifend.

        Integer urna quam, vehicula sed convallis id, interdum dignissim tortor. Quisque sodales massa magna, eu
        suscipit felis semper at. Aliquam fermentum vulputate velit. Cras vel arcu non nisi molestie luctus ut
        mattis enim. Phasellus vestibulum ipsum at turpis tincidunt, eget imperdiet tellus ornare. Duis quis ante
        massa. Fusce vel aliquet lorem, ac consectetur nulla.
    </div>
</x-app-layout>
