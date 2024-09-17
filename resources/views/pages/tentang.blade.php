@extends('layouts.app')

@section('css')
    <style>


        #right-about img {
            object-fit: cover;
        }


    </style>
@endsection

@section('page')
    @include('partials.second_nav', ['title' => 'TENTANG KAMI'])

    <section id="about" class="w-screen h-screen bg-slate-100 ">
        <div class="container lg:mx-[150px] lg:my-auto  lg:mt-0  flex flex-col lg:flex-row lg:flex-nowrap justify-centerlg:h-screen lg:gap-6">
            <div id="left-about" class="lg:w-1/2 flex flex-col mx-6 lg:mx-0  justify-center gap-8">
                <h1 class="text-5xl text-center lg:text-left font-bold mt-12">TASTY FOOD</h1>
                <p class="text-xl font-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime inventore fuga
                    natus odit soluta sed
                    unde explicabo corrupti ullam aspernatur, eius nesciunt rem illum iusto autem quibusdam numquam
                    doloremque hic?</p>
                <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae magnam, odit dolore rem,
                    voluptate non
                    laboriosam laudantium exercitationem nam explicabo deserunt dolorum doloremque consequatur. Assumenda,
                    consequuntur? Minima inventore beatae soluta.</p>
            </div>
            <div id="right-about" class="lg:w-1/2 mx-6 lg:mx-0 flex flex-row py-12 lg:py-40 gap-4">
                <img src="{{ asset('assets/images/brooke-lark-oaz0raysASk-unsplash.jpg') }}" class="w-1/2 rounded-3xl"
                    alt="">
                <img src="{{ asset('assets/images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}"
                    class="w-1/2 rounded-3xl" alt="">
            </div>
        </div>
    </section>
    <section id="visi-misi" class="flex justify-center mt-[25rem] h-[250vh] lg:h-[140vh] flex-col gap-48 lg:gap-0 lg:items-center">


        <div class="container lg:mx-[150px]  flex flex-col lg:flex-row lg:justify-center h-1/2 gap-8 lg:px-0 lg:mt-0 px-6 lg:gap-16 ">
            <div id="right-about" class="lg:w-1/2 flex flex-row order-2 lg:order-1  lg:py-40 gap-4">
                <img src="{{ asset('assets/images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" class="lg:w-1/2 rounded-3xl"
                    alt="">
                <img src="{{ asset('assets/images/michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" class="w-1/2 rounded-3xl"
                    alt="">
            </div>
            <div id="left-about" class="lg:w-1/2 flex flex-col  lg:mt-0 order-1 lg:order-2 lg:justify-center gap-8">
                <h1 class="text-4xl text-center lg:text-left lg:text-3xl font-bold">VISI</h1>
                <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis libero qui quam.
                    Rerum, velit excepturi deleniti quibusdam unde qui maiores reiciendis esse debitis pariatur quidem
                    expedita suscipit cum officia, laudantium ducimus ex illum sint similique reprehenderit sed facere alias
                    cumque labore. Obcaecati necessitatibus quod beatae ullam, repellendus quis voluptate tempore corporis
                    et, possimus saepe nam fuga esse id aperiam expedita, velit ratione. Rem, cumque dolorum eos corrupti
                    reprehenderit unde, maiores tempore officiis magni ab enim qui aliquam et tempora ipsa natus eveniet
                    esse. Fugiat quibusdam aliquid illum nemo repudiandae natus!</p>
            </div>
        </div>
        <div class="container lg:mx-[150px] flex flex-col lg:flex-row mb-96 lg:mb-0 lg:mt-0 lg:justify-center lg:h-1/2 gap-16">

            <div id="left-about" class="lg:w-1/2 flex flex-col mx-6 lg:mx-0 justify-center gap-8">
                <h1 class="text-3xl font-bold">MISI</h1>
                <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis libero qui quam.
                    Rerum, velit excepturi deleniti quibusdam unde qui maiores reiciendis esse debitis pariatur quidem
                    expedita suscipit cum officia, laudantium ducimus ex illum sint similique reprehenderit sed facere alias
                    cumque labore. Obcaecati necessitatibus quod beatae ullam, repellendus quis voluptate tempore corporis
                    et, possimus saepe nam fuga esse id aperiam expedita, velit ratione. Rem, cumque dolorum eos corrupti
                    reprehenderit unde, maiores tempore officiis magni ab enim qui aliquam et tempora ipsa natus eveniet
                    esse. Fugiat quibusdam aliquid illum nemo repudiandae natus!</p>
            </div>
            <div id="right-about" class="lg:w-1/2 flex flex-row mx-6 lg:mx-0 justify-center lg:py-40 gap-4">
                <img src="{{ asset('assets/images/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="rounded-3xl lg:w-fit w-[500px]"
                    alt="">

            </div>
        </div>
    </section>
@endsection
