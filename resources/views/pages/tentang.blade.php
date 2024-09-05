@extends('layouts.app')

@section('css')
    <style>


        #right-about img {
            object-fit: cover;
        }

        #visi-misi {
            height: 140vh;
        }
    </style>
@endsection

@section('page')
    @include('partials.second_nav', ['title' => 'TENTANG KAMI'])

    <section id="about" class="w-screen h-screen bg-slate-100">
        <div class="container mx-[150px] my-auto flex flex-row justify-center h-screen gap-6">
            <div id="left-about" class="w-1/2 flex flex-col  justify-center gap-8">
                <h1 class="text-5xl font-bold">TASTY FOOD</h1>
                <p class="text-xl font-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime inventore fuga
                    natus odit soluta sed
                    unde explicabo corrupti ullam aspernatur, eius nesciunt rem illum iusto autem quibusdam numquam
                    doloremque hic?</p>
                <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae magnam, odit dolore rem,
                    voluptate non
                    laboriosam laudantium exercitationem nam explicabo deserunt dolorum doloremque consequatur. Assumenda,
                    consequuntur? Minima inventore beatae soluta.</p>
            </div>
            <div id="right-about" class="w-1/2 flex flex-row py-40 gap-4">
                <img src="{{ asset('assets/images/brooke-lark-oaz0raysASk-unsplash.jpg') }}" class="w-1/2 rounded-3xl"
                    alt="">
                <img src="{{ asset('assets/images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}"
                    class="w-1/2 rounded-3xl" alt="">
            </div>
        </div>
    </section>
    <section id="visi-misi" class="flex justify-center flex-col items-center">


        <div class="container mx-[150px]  flex flex-row justify-center h-1/2 gap-16 ">
            <div id="right-about" class="w-1/2 flex flex-row py-40 gap-4">
                <img src="{{ asset('assets/images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" class="w-1/2 rounded-3xl"
                    alt="">
                <img src="{{ asset('assets/images/michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" class="w-1/2 rounded-3xl"
                    alt="">
            </div>
            <div id="left-about" class="w-1/2 flex flex-col  justify-center gap-8">
                <h1 class="text-3xl font-bold">VISI</h1>
                <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis libero qui quam.
                    Rerum, velit excepturi deleniti quibusdam unde qui maiores reiciendis esse debitis pariatur quidem
                    expedita suscipit cum officia, laudantium ducimus ex illum sint similique reprehenderit sed facere alias
                    cumque labore. Obcaecati necessitatibus quod beatae ullam, repellendus quis voluptate tempore corporis
                    et, possimus saepe nam fuga esse id aperiam expedita, velit ratione. Rem, cumque dolorum eos corrupti
                    reprehenderit unde, maiores tempore officiis magni ab enim qui aliquam et tempora ipsa natus eveniet
                    esse. Fugiat quibusdam aliquid illum nemo repudiandae natus!</p>
            </div>
        </div>
        <div class="container mx-[150px] flex flex-row justify-center h-1/2 gap-16">

            <div id="left-about" class="w-1/2 flex flex-col  justify-center gap-8">
                <h1 class="text-3xl font-bold">MISI</h1>
                <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis libero qui quam.
                    Rerum, velit excepturi deleniti quibusdam unde qui maiores reiciendis esse debitis pariatur quidem
                    expedita suscipit cum officia, laudantium ducimus ex illum sint similique reprehenderit sed facere alias
                    cumque labore. Obcaecati necessitatibus quod beatae ullam, repellendus quis voluptate tempore corporis
                    et, possimus saepe nam fuga esse id aperiam expedita, velit ratione. Rem, cumque dolorum eos corrupti
                    reprehenderit unde, maiores tempore officiis magni ab enim qui aliquam et tempora ipsa natus eveniet
                    esse. Fugiat quibusdam aliquid illum nemo repudiandae natus!</p>
            </div>
            <div id="right-about" class="w-1/2 flex flex-row py-40 gap-4">
                <img src="{{ asset('assets/images/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="rounded-3xl w-fit"
                    alt="">

            </div>
        </div>
    </section>
@endsection
