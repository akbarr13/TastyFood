<nav class="flex flex-row gap-14 pt-8  lg:pl-[150px] lg:py-[80px] lg:justify-normal justify-center text-center">
    <a href="/" class="font-bold text-2xl mr-24 lg:mr-0 lg:text-4xl w-max text-center overflow-hidden">TASTY FOOD</a>
    <ul class="lg:flex hidden lg:visible flex-row gap-10 text-2xl uppercase justify-center items-center">
        <li>

        </li>
        <li class="flex justify-center items-center "><a href="/"
                class="text-center hover:border-b-4 border-solid border-black transition-all ease-in-out">Home</a></li>
        <li class="flex justify-center items-center "><a href="/tentang"
                class="text-center hover:border-b-4 border-solid border-black transition-all ease-in-out">Tentang</a>
        </li>
        <li class="flex justify-center items-center "><a href="/berita"
                class="text-center hover:border-b-4 border-solid border-black transition-all ease-in-out">Berita</a>
        </li>
        <li class="flex justify-center items-center "><a href="/galeri"
                class="text-center hover:border-b-4 border-solid border-black transition-all ease-in-out">Galeri</a>
        </li>
        <li class="flex justify-center items-center "><a href="/kontak"
                class="text-center hover:border-b-4 border-solid border-black transition-all ease-in-out">Kontak</a>
        </li>
    </ul>
    <button data-popover-target="menu"
        class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg lg:hidden focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
        type="button">
        =
    </button>
    <ul role="menu" data-popover="menu" data-popover-placement="bottom"
        class="absolute z-10 min-w-[180px] overflow-auto rounded-lg border border-slate-200 bg-white p-1.5 shadow-lg shadow-sm focus:outline-none">
        <li role="menuitem"
            class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
            <a href="/">Home</a>
        </li>
        <li role="menuitem"
            class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
            <a href="/tentang">Tentang</a>
        </li>
        <li role="menuitem"
            class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
            <a href="/berita">Berita</a>
        </li>
        <li role="menuitem"
            class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
            <a href="/galeri">Galeri</a>
        </li>
        <li role="menuitem"
            class="cursor-pointer text-slate-800 flex w-full text-sm items-center rounded-md p-3 transition-all hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100">
            <a href="/kontak">Kontak</a>
        </li>
    </ul>

</nav>
<script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>
