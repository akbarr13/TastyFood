@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <style>
        * {
            overflow-x: hidden;
        }

        .img-nembus {
            top: -200px;
            right: -300px;
            position: absolute;
        }

        hr {
            border-top: 5px solid black !important;
            /* Tailwind's border-gray-300 */
            width: 150px !important;
            border-radius: 10px;
            height: 10px;
        }

        #menu-list {
            background-image: url('http://tastyfood.test/assets/images/background.png');
            height: 88vh;

        }

        #card-img {
            width: 15%;
            top: 155%;
            position: absolute;
        }
    </style>
@endsection

@section('page')
    <section class="top-section h-screen bg-slate-100">
        @include('partials.nav')
        <section class="flex flex-row w-screen ">
            <div class="left-banner pl-[150px] w-3/6 flex gap-10 flex-col">
                <hr class="my-4">
                <div class="flex flex-col gap-3">
                    <h1 class="text-6xl overflow-hidden subpixel-antialiased">HEALTHY</h1>
                    <H1 class="text-6xl font-extrabold overflow-hidden subpixel-antialiased">TASTY FOOD</H1>
                    <p class="font-medium text-base subpixel-antialiased">Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Quam quas,
                        eaque
                        maxime fugiat dolorem
                        reprehenderit asperiores. Sint vitae quo, doloremque repellendus dolor velit tempora odio molestias
                        labore quis accusantium sit neque ad repudiandae nihil expedita.</p>
                    <a href="#tentang-kami"
                        class="subpixel-antialiased w-80 px-7 py-5 text-center text-slate-50 bg-slate-950 font-bold">TENTANG
                        KAMI</a>
                </div>

            </div>
            <img src="{{ asset('assets/images/img-4-2000x2000.png') }}" class="img-nembus" width="60%" alt="">
        </section>
    </section>
    <section class="about-section bg-white w-screen" id="tentang-kami">
        <div class="flex flex-col text-center justify-end py-24 gap-8">
            <h1 class="text-3xl font-bold overflow-hidden">TENTANG KAMI</h1>
            <p class=" max-w-2xl text-center mx-auto font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Maxime sunt provident dolor omnis quis officiis non,
                explicabo ducimus quisquam fugiat neque id aliquam beatae incidunt recusandae veniam in eum eligendi?</p>
            <hr class="mx-auto">
        </div>
    </section>
    <section id="menu-list" class="w-screen flex flex-row justify-center items-center gap-6">
        @include('components.card', ['image' => 'img-1.png'])
        @include('components.card', ['image' => 'img-2.png'])
        @include('components.card', ['image' => 'img-3.png'])
        @include('components.card', ['image' => 'img-4.png'])
    </section>
@endsection
