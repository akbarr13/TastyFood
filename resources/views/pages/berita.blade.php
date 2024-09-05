@extends('layouts.app')

@section('css')
    <style>
        #berita img {
            object-fit: cover;
        }

        #more-berita {
            height: 150vh;
        }
    </style>
@endsection


@section('page')
    @include('partials.second_nav', ['title' => 'BERITA KAMI'])
    <section id="berita" class="h-screen w-screen bg-slate-100 flex justify-center items-center flex-col">
        <div class="container w-screen h-screen flex flex-row justify-center items-center gap-24  ">
            <img src="{{ asset('assets/images/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" class="w-1/2 h-4/5 rounded-3xl "
                alt="">
            <div id="berita-text" class="w-1/2 flex flex-col gap-6">
                <h1 class="text-5xl font-bold">APA SAJA MAKANAN KHAS NUSANTARA?</h1>
                <P class="text-xl font-medium">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis quisquam
                    mollitia asperiores nulla
                    sunt labore recusandae vero at temporibus veritatis molestiae corporis corrupti quidem aliquam illo,
                    quis commodi modi sequi?</P>
                <p class="text-xl font-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et praesentium
                    ipsum, vero non eius, aspernatur
                    adipisci nisi, sapiente soluta nihil porro! Porro quibusdam aspernatur dolorum quisquam eius
                    necessitatibus maiores dolore.</p>

                <a href="#tentang-kami"
                    class="subpixel-antialiased w-80 px-7 py-5 text-center text-slate-50 text-lg bg-slate-950 font-bold">BACA
                    SELENGKAPNYA</a>
            </div>
        </div>
    </section>
    <section id="more-berita" class="w-screen flex justify-center flex-col gap-16">
        <h1 class="text-4xl font-bold overflow-hidden ml-[150px]">BERITA LAINNYA</h1>
        <div id="news-list" class=" small-card flex flex-wrap gap-4 items-center justify-center">
            @include('components.news.card', ['image' => 'fathul-abrar-T-qI_MI2EMA-unsplash.jpg'])
            @include('components.news.card', ['image' => 'fathul-abrar-T-qI_MI2EMA-unsplash.jpg'])
            @include('components.news.card', ['image' => 'fathul-abrar-T-qI_MI2EMA-unsplash.jpg'])
            @include('components.news.card', ['image' => 'fathul-abrar-T-qI_MI2EMA-unsplash.jpg'])
            @include('components.news.card', ['image' => 'fathul-abrar-T-qI_MI2EMA-unsplash.jpg'])
            @include('components.news.card', ['image' => 'fathul-abrar-T-qI_MI2EMA-unsplash.jpg'])
            @include('components.news.card', ['image' => 'fathul-abrar-T-qI_MI2EMA-unsplash.jpg'])
            @include('components.news.card', ['image' => 'fathul-abrar-T-qI_MI2EMA-unsplash.jpg'])
        </div>
    </section>
@endsection
