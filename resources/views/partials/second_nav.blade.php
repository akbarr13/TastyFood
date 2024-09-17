<nav class="flex flex-row gap-14 p-8 lg:px-[150px] lg:py-[80px] justify-between text-center text-slate-50 absolute z-10 w-screen">
    <a href="/" class="font-bold text-2xl  lg:text-5xl">TASTY FOOD</a>
    <ul class=" flex-row gap-10 text-2xl hidden lg:flex uppercase justify-center items-center ml-auto">
        <li class="flex justify-center items-center "><a href="/"
                class="text-center hover:border-b-4 border-solid border-white transition-all ease-in-out">Home</a></li>
        <li class="flex justify-center items-center "><a href="/tentang"
                class="text-center hover:border-b-4 border-solid border-white transition-all ease-in-out">Tentang</a>
        </li>
        <li class="flex justify-center items-center "><a href="/berita"
                class="text-center hover:border-b-4 border-solid border-white transition-all ease-in-out">Berita</a>
        </li>
        <li class="flex justify-center items-center "><a href="/galeri"
                class="text-center hover:border-b-4 border-solid border-white transition-all ease-in-out">Galeri</a>
        </li>
        <li class="flex justify-center items-center "><a href="/kontak"
                class="text-center hover:border-b-4 border-solid border-white transition-all ease-in-out">Kontak</a>
        </li>
    </ul>
    <button data-popover-target="menu"
        class="rounded-md bg-slate-100 py-2 px-4 border border-transparent text-center text-sm text-black transition-all shadow-md hover:shadow-lg lg:hidden focus:bg-slate-100 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
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
<section id="top-banner" class="flex lg:bg-cover h-[75vh]">
    <div class="container text-center lg:text-left  lg:mx-[150px] my-auto">
        <h1 class="text-4xl lg:text-7xl font-extrabold text-slate-50">{{ $title }}</h1>
    </div>
</section>
