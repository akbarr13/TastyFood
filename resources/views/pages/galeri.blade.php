@extends('layouts.app')


@section('css')
    <style>
        #indicators-carousel img {
            height: 300rem;
            object-fit: cover;
        }

        .photos img {
            object-fit: cover;

        }
    </style>
@endsection


@section('page')
    @include('partials.second_nav', ['title' => 'GALERI KAMI'])
    <section class=" h-max lg:h-screen bg-slate-100 w-screen">
        <!-- component -->
        <!-- This is an example component -->
        <div class=" mx-2 lg:mx-36 lg:py-32">

            <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative  rounded-2xl " style="height: 75vh">
                    <!-- Item 1 -->

                        @foreach ($photos as $photo)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/images/'.$photo->filename) }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">

                        </div>

                        @endforeach


                </div>
                <!-- Slider indicators -->
               
                <!-- Slider controls -->
                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>
    </section>
    <section id="gallery-list" class="flex h-max justify-center items-center my-24">
        <div class="photos flex mx-6 flex-wrap flex-row h-max justify-center items-center gap-8 ">

            @foreach ($photos as $photo)
                <img src="{{ asset('assets/images/'. $photo->filename) }}"
                    class="w-96 h-96 lg:w-[390px] lg:h-[390px] rounded-2xl" alt="">
            @endforeach

        </div>



    </section>
    <div class="flex flex-row gap-6 justify-center">

        {{$photos->links()}}
    </div>
@endsection
