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
            width: 150px !important;
            border-radius: 10px;
            height: 10px;
        }

        #menu-list {
            background-image: url('http://localhost:8000/assets/images/background2.png');




        }





        #image-menu-list img {

            object-fit: cover;
            border-radius: 1rem
        }

        .news-card-img {
            object-fit: cover;
            height: 400px !important;
        }



        #card-footer img {}
    </style>
@endsection

@section('page')
    <section class="top-section h-screen bg-slate-100">
        @include('partials.nav')
        <section class="flex flex-row w-screen lg:justify-normal  justify-center overflow-hidden">
            <div class="left-banner px-8 lg:pl-[150px] lg:w-3/6 my-auto mt-48 overflow-hidden flex gap- flex-col lg:mt-24">
                <hr class="my-4 hidden lg:inline">
                <div class="flex flex-col gap-4 lg:gap-6 ">
                    <h1 class="text-4xl md:6xl lg:text-7xl overflow-hidden subpixel-antialiased">HEALTHY</h1>
                    <h1 class="text-4xl lg:text-7xl font-extrabold overflow-hidden subpixel-antialiased">TASTY FOOD</h1>
                    <p class="font-medium text-lg lg:text-xl subpixel-antialiased">Lorem ipsum dolor sit amet consectetur,
                        adipisicing
                        elit. Quam quas,
                        eaque
                        maxime fugiat dolorem
                        reprehenderit asperiores. Sint vitae quo, doloremque repellendus dolor velit tempora odio molestias
                        labore quis accusantium sit neque ad repudiandae nihil expedita.</p>
                    <a href="/tentang"
                        class="subpixel-antialiased w-80 mx=auto lg:w-96 w-full text-xl px-7 py-5 text-center  text-slate-50 bg-slate-950 font-bold">TENTANG
                        KAMI</a>
                </div>

            </div>
            <img src="{{ asset('assets/images/img-4-2000x2000.png') }}" class="img-nembus" width="60%" alt="">
        </section>
    </section>
    <section class="about-section bg-white w-screen" id="tentang-kami">
        <div class="flex flex-col text-center justify-end py-24 px-2 gap-8">
            <h1 class="text-4xl lg:text-5xl font-bold overflow-hidden">TENTANG KAMI</h1>
            <p class=" max-w-2xl text-center lg:text-xl text-lg mx-auto font-medium">Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit.
                Maxime sunt provident dolor omnis quis officiis non,
                explicabo ducimus quisquam fugiat neque id aliquam beatae incidunt recusandae veniam in eum eligendi?</p>
            <hr class="mx-auto">
        </div>
    </section>
    <section id="menu-list"
        class="w-screen sm:pb:6 lg:h-[75vh] flex flex-row justify-center items-center sm:gap-0 lg:gap-6 flex-wrap">
        @include('components.card', ['image' => 'img-1.png'])
        @include('components.card', ['image' => 'img-2.png'])
        @include('components.card', ['image' => 'img-3.png'])
        @include('components.card', ['image' => 'img-4.png'])
    </section>
    <section id="berita-kami"
        class=" w-screen lg:h-[160vh] flex flex-col gap-16 py-24 bg-slate-100 justify-center items-center ">
        <h1 class="text-center font-bold text-3xl overflow-hidden h-14">BERITA KAMI</h1>
        <div id="card-section" class="overflow-hidden flex flex-row  justify-center items-center">
            <div class="hidden lg:inline">
                @include('components.news.big-card', ['image' => $big_news->image, 'news' => $big_news])
            </div>
            <div style="" class="lg:w-[45%] small-card flex flex-wrap gap-4 items-center justify-center">
                @foreach ($news as $new)
                    @include('components.news.card', ['image' => $new->image, 'news' => $new])
                @endforeach

            </div>
        </div>
    </section>
    <section id="galeri-kami" class="py-24 lg:h-[155vh]  mb-12 overflow-hidden">
        <div class="flex flex-col text-center justify-center items-center overflow-hidden  gap-16">
            <h1 class="text-3xl font-bold overflow-hidden ">GALERI KAMI</h1>
            <div id="image-menu-list" class="flex flex-wrap gap-4 justify-center flex-row overflow-hidden">
                <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}"
                    class="w-[200px] h-[200px] lg:w-[550px] lg:h-[550px]" alt="">
                <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}"
                    class="w-[200px] h-[200px] lg:w-[550px] lg:h-[550px]" alt="">
                <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}"
                    class="w-[200px] h-[200px] lg:w-[550px] lg:h-[550px]" alt="">
                <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}"
                    class="w-[200px] h-[200px] lg:w-[550px] lg:h-[550px]" alt="">
                <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}"
                    class="w-[200px] h-[200px] lg:w-[550px] lg:h-[550px]" alt="">
                <img src="{{ asset('assets/images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}"
                    class="w-[200px] h-[200px] lg:w-[550px] lg:h-[550px]" alt="">
            </div>
            <a href="/galeri"
                class="subpixel-antialiased w-80 px-7 py-5 text-center text-slate-50 text-lg bg-slate-950 font-bold">LIHAT
                LEBIH
                BANYAK</a>
        </div>
    </section>
@endsection
