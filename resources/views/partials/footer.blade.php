<footer class="bg-zinc-950 lg:h-[700px] w-screen flex flex-wrap justify-between flex-col">

    <div class=" mx-16 lg:mx-32 mt-32 flex flex-wrap flex-row  gap-16 lg:gap-0">
        <div id="left" class="lg:w-1/4 flex gap-6 lg:gap-12 flex-col">
            <h1 class="text-slate-50 font-bold text-4xl h-fit overflow-hidden">Tasty Food</h1>
            <p class="text-gray-400 text-xl font-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                autem, dolore
                repellat magni dolor omnis
                facilis illo obcaecati quisquam repellendus iure voluptates nobis at accusamus corporis porro!
                Architecto
                sit labore similique possimus placeat aliquam consequatur.</p>
            <div id="social-media" class="flex gap-8">
                <a href="https://x.com"><img src="{{ asset('assets/images/002-twitter.png') }}" width=""
                        alt=""></a>
                <a href="https://facebook.com"><img class=""
                        src="{{ asset('assets/images/001-facebook@2x.png') }}" width="50%" alt=""></a>
            </div>
        </div>
        <div id="left-middle" class="text-slate-50 lg:w-1/4 lg:pl-48 flex flex-col gap-12">
            <h1 class="text-3xl font-extrabold">Useful links</h1>
            <ul class="flex flex-col gap-8 font-bold text-xl">
                <li><a href="">Blog</a></li>
                <li><a href="">Hewan</a></li>
                <li><a href="">Galeri</a></li>
                <li><a href="">Testimoni</a></li>
            </ul>
        </div>
        <div id="right-middle" class="text-slate-50 lg:w-1/4 lg:pl-24 flex flex-col gap-12">
            <h1 class="text-3xl font-extrabold">Privacy</h1>
            <ul class="flex flex-col gap-8 font-bold text-xl">
                <li><a href="">Karir</a></li>
                <li><a href="">Tentang Kami</a></li>
                <li><a href="">Kontak Kami</a></li>
                <li><a href="">Servis</a></li>
            </ul>

        </div>
        <div id="right" class="text-slate-50 lg:w-1/4  flex flex-col gap-12">
            <h1 class="text-3xl font-extrabold lg:ml-4">Contact info</h1>
            <ul class="font-bold text-xl mb-24 h-80">
                <li class="flex flex-row text-center "><img src="{{ asset('assets/images/Group 66@2x.png') }}"
                        width="15%" alt=""><a href="" class="">tastyfood@gmail.com</a></li>
                <li class="flex flex-row text-center"><img src="{{ asset('assets/images/Group 67@2x.png') }}"
                        width="15%" alt=""><a href="">+62 812 3456 7890</a></li>
                <li class="flex flex-row text-center"><img src="{{ asset('assets/images/Group 68@2x.png') }}"
                        width="15%" alt=""><a href="">Kota Bandung, Jawa Barat</a></li>
                <li style="display:none;"><img src="{{ asset('assets/images/001-facebook.png') }}" alt=""><a
                        href="">wlekwoewewoekw</a></li>
            </ul>
        </div>
    </div>
    <h1 class="text-gray-400 text-center mb-8">Copyright &copy;2023 All rights reserved</h1>


</footer>

<style>


    #right img {
        object-fit: cover;
        padding-bottom: 10px;
    }

    #right a {
        margin-top: 1rem;
    }
</style>
